<?php

namespace CodersLabBundle\Controller;


use CodersLabBundle\Entity\Post;
use CodersLabBundle\Entity\Tag;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class DatabaseController extends Controller {

    /*
     * 1. To ma zwracac abiekt tag po jego tagtext
     * 2. Sprawdzam czy tag z takim text juz istnieje, jak tak to go zwraca
     * 3. Jak nie ma, to tworzy i zwraca
     *
     * -findTagBytext
     * BEZ ROUTA
     */
    private function getTag($tagText) {
        $repo = $this->getDoctrine()->getRepository('CodersLabBundle:Tag');
        $exists = $repo->findOneByTagText($tagText);
        if (!($exists)) {
            $tag = new Tag();
            $tag->setTagText($tagText);

            $em = $this->getDoctrine()->getManager();
            $em->persist($tag);

            return $tag;
        }
        $tag = $repo->findOneByTagText($tagText);

        return $tag;
        //exista zmienic na tag i susuna returna i ostatni tag zwaracajcy wartosc
    }

    /**
     * @Route("/create")
     */
    public function createAction() {
        $post = new Post();
        $post->setTitle('Czwarty post');
        $post->setPostText('zzzzzzzzzz');
        $post->setRating(8);

        $userRepo = $this->getDoctrine()->getRepository('CodersLabBundle:User');
        $user = $userRepo->find(1);

        $post->setUser($user);
        $user->addPost($post);
        $post->addTag($this->getTag('tagtext'));

        //to nam pobierze entity menegera
        $em = $this->getDoctrine()->getManager();

        //to nam zapamieta obiekt
        $em->persist($post);

        //poinformujmy menedzera zeby zapisal boiekt do bazy
        $em->flush();

        $noweId = $post->getId();

        return new Response('Dodano nowy post z id' . $noweId);
    }

    /**
     * @Route("/getPost/{id}", name = "getPost")
     */
    public function getPostAction($id) {
        {
            $repo = $this->getDoctrine()->getRepository('CodersLabBundle:Post');

            $post = $repo->find($id);

            return new Response('Pobralem post z tytylem: ' . $post->getTitle());
        }
    }

    /**
     * @Route("/getPostToTwig/{id}")
     * @Template("CodersLabBundle:Database:showPost.html.twig")
     */
    public function getPostToTwigAction($id) {
        $repo = $this->getDoctrine()->getRepository('CodersLabBundle:Post');

        $post = $repo->find($id);

        return ['post' => $post];
    }

    /**
     * @Route("/showAllPosts")
     * @Template("CodersLabBundle:Database:showAllPosts.html.twig")
     */
    public function showAllPostsAction() {
        $repo = $this->getDoctrine()->getRepository('CodersLabBundle:Post');

        $posts = $repo->findAll();

        return ['posts' => $posts];
    }

    /**
     * @Route("/update/{id}/{newTitle}")
     */
    public function updateAction($id, $newTitle) {
        $repo = $this->getDoctrine()->getRepository('CodersLabBundle:Post');

        $post = $repo->find($id);

        $post->setTitle($newTitle);

        $em = $this->getDoctrine()->getManager();
        $em->flush();

        //return $this->redirectToRoute('getPost', ['id'=>$post->getId()]);
        return $this->redirectToRoute('getPost', ['id' => $id]);
    }

    /**
     * @Route("/remove/{id}")
     * @Template("CodersLabBundle:Database:showPost.html.twig")
     */
    public function removeAction($id) {
        $repo = $this->getDoctrine()->getRepository('CodersLabBundle:Post');

        $post = $repo->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($post);
        $em->flush();

        return ['post' => $post];
    }

}
