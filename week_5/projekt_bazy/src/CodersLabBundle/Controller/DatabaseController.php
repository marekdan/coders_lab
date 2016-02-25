<?php

namespace CodersLabBundle\Controller;


use CodersLabBundle\Entity\Post;
use CodersLabBundle\Entity\Tag;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DatabaseController extends Controller {

    private function generatePostUrlAction($post) {
        $form = $this->createFormBuilder($post);
        $form->add('title', 'text');
        $form->add('rating', 'text');
        $form->add('postText', 'text');
        $form->add('save', 'submit', ['label' => 'Add']);
        $form->add('tags', 'entity',
        ['class'=>'CodersLabBundle:Tag',
        'choice_label'=>'tagText',
        'expanded'=>'true',
        'multiple'=>'true']);
        $form->setAction($this->generateUrl('create'));
        $postForm = $form->getForm();

        return $postForm;
    }

    /**
     * @Route("/newPost")
     * @Template()
     */
    public function newPostAction() {
        $post = new Post();

        $postForm = $this->generatePostUrlAction($post);

        return ['form' => $postForm->createView()];
    }

    /**
     * @Route("/create", name = "create")
     */
    public function createAction(Request $req) {
        $post = new Post();

        $form = $this->generatePostUrlAction($post);
        $form->handleRequest($req);

        if($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();
        }

//        $userRepo = $this->getDoctrine()->getRepository('CodersLabBundle:User');
//        $user = $userRepo->find(1);

//        //dodawanie taga
//        $tags = explode(',', $tagStr);
//        foreach ($tags as $tagText) {
//            $this->mapPostAndTag($post, $tagText);
//        }

//        $post->setUser($user);
//        $user->addPost($post);

        $postId = $post->getId();

        return new Response('Dodano nowy post z id' . $postId);
    }

    private function getTag($tagText) {
        $repo = $this->getDoctrine()->getRepository('CodersLabBundle:Tag');
        $tag = $repo->findOneByTagText($tagText);
        if (!($tag)) {
            $tag = new Tag();
            $tag->setTagText($tagText);

            $em = $this->getDoctrine()->getManager();
            $em->persist($tag);
        }

        return $tag;
    }

    /**
     *
     */
    public function mapPostAndTag($post, $tagText) {
        $tag = $this->getTag($tagText);

        $post->addTag($tag);
        $tag->addPost($post);
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
     * @Route("/getPostToTwig/{id}", name = "getPostToTwig")
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
