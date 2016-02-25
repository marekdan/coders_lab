<?php

namespace CodersLabBundle\Controller;

use CodersLabBundle\Entity\Book;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BookController extends Controller
{

    /**
     * @Route("/newBook")
     * @Template()
     */
    public function newBookAction(){

        return [];
    }

    /**
     * @Route("/createBook", name = "createBook")
     * @Template()
     */
    public function createBookAction(Request $req){
        $title = $req->get('title');
        $description = $req->get('description');
        $rating = $req->get('rating');

        $book = new Book();
        $book->setTitle($title);
        $book->setDescription($description);
        $book->setRating($rating);

        $em = $this->getDoctrine()->getManager();
        $em->persist($book);
        $em->flush();

        $id = $book->getId();
        return $this->redirectToRoute('showBook', ['id'=>$id]);
    }

    /**
     *
     * @Route("/showBook/{id}", name = "showBook")
     * @Template()
     */
    public function showBookAction($id){
        $repo = $this->getDoctrine()->getRepository('CodersLabBundle:Book');

        $book = $repo->find($id);

        return ['book' => $book];
    }

    /**
     * @Route("/showAllBooks")
     * @Template()
     */
    public function showAllBooksAction(){
        $repo = $this->getDoctrine()->getRepository('CodersLabBundle:Book');
        $books = $repo->findAll();
        return ['books'=>$books];
    }

    /**
     * @Route("/deleteBook/{id}")
     */
    public function deleteBookAction($id){
        $repo = $this->getDoctrine()->getRepository('CodersLabBundle:Book');
        $book = $repo->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($book);
        $em->flush();

        return new Response('Ksiązka usunieta');
    }

}
