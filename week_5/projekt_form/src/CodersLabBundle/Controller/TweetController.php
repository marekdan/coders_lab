<?php

namespace CodersLabBundle\Controller;


use CodersLabBundle\Entity\Tweet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

class TweetController extends Controller {

    public function generateForm($tweet, $action) {
        $form = $this->createFormBuilder($tweet);
        $form->add('name', 'text');
        $form->add('text', 'text');
        $form->add('save', 'submit', ['label' => 'add']);
        //$form->setAction($this->generateUrl('create'));
        $form->setAction($action);

        $tweetForm = $form->getForm();

        return $tweetForm;
    }

    /**
     * @Route("/new")
     * @Template()
     */
    public function newAction() {
        $tweet = new Tweet();

        $action = $this->generateUrl('create');
        $tweetForm = $this->generateForm($tweet, $action);

        return ['form' => $tweetForm->createView()];
    }

    /**
     * @Route("/create", name = "create")
     * @Template()
     */
    public function createAction(Request $req) {
        $tweet = new Tweet();

        $action = $this->generateUrl('create');
        $form = $this->generateForm($tweet, $action);
        $form->handleRequest($req);

        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tweet);
            $em->flush();
        }

        return [];
    }

    /**
     * @Route("/showAll")
     * @Template()
     */
    public function showAllAction() {
        $repo = $this->getDoctrine()->getRepository('CodersLabBundle:Tweet');

        $tweets = $repo->findAll();

        return ['tweets' => $tweets];
    }

    /**
     * @Route("/showTweet/{id}")
     * @Template()
     */
    public function showTweetAction(){

        return [];
    }

    /**
     * @Route("/update/{id}", name = "update")
     * @Method("GET")
     * @Template()
     */
    public function updateAction(Request $req, $id) {
        $repo = $this->getDoctrine()->getRepository('CodersLabBundle:Tweet');
        $tweet = $repo->find($id);

        //TODO $action = $this->generateUrl('create');
        $tweetForm = $this->generateForm($tweet, $action);

        return ['form' => $tweetForm->createView()];

    }

    /**
     * @Route("/update/{id}", name = "update")
     * @Method("POST")
     */
    public function updateSaveAction(Request $req, $id) {
        $repo = $this->getDoctrine()->getRepository('CodersLabBundle:Tweet');
        $tweet = $repo->find($id);

        //TODO $action = $this->generateUrl('create'); przekierowac do wyswietlnaia dla pojedynczego elementu
        $form = $this->generateForm($tweet, $action);
        $form->handleRequest($req);

        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tweet);
            $em->flush();
        }
        $form->setAction($this->generateUrl('create'));
        $tweetForm = $form->getForm();

        return ['tweet' => $tweetForm->createView()];
    }
}
