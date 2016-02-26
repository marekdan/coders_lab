<?php

namespace CodersLabBundle\Controller;


use CodersLabBundle\Entity\Tweet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller {

    /**
     * @Route("/setUsername/{name}")
     */
    public function setUsernamAction($name) {
        $session = new Session();
        $session->set('username', $name);

        return new Response('Dane sesji zapisane: ' . $name);
    }

    /**
     * @Route("/sayHello/{n}")
     * @Template()
     */
    public function sayHelloAction(Request $req, $n) {
        if ($req->getSession()->get('username')) {
            $username = $session = $req->getSession()->get('username');
        }
        else {
            $username = 'Witaj nieznajomy';
        }

        return ['n' => $n, 'username' => $username];
    }

    /**
     * @Route("/createCookie/{cookieName}/{cookieValue}/{cookieTime}")
     */
    public function createCookie($cookieName, $cookieValue, $cookieTime) {
        $cookie = new Cookie($cookieName, $cookieValue, time() + $cookieTime);

        $resp = new Response('Cookie created');
        $resp->headers->setCookie($cookie);

        return $resp;
    }

    /**
     * @Route("/deleteCookie/{cookieName}")
     */
    public function deleteCookie($cookieName) {
        $resp = new Response('Cookie deleted');
        $resp->headers->clearCookie($cookieName);

        return $resp;
    }

    /**
     * @Route("/createTweet")
     * @Template()
     */
    public function createFormTweetAction($tweet) {

        $form = $this->createFormBuilder($tweet);
        $form->add('title', 'text');
        $form->add('tweetText', 'text');
        $form->add('save', 'submit', ['label' => 'add']);
        $form->setAction($this->generateUrl('newTweet'));
        $tweetForm = $form->getForm();

        return ['form' => $tweetForm->createView()];
    }

    /**
     * @Route("/newTweet", name = "newTweet")
     */
    public function newTweet(Request $req) {
        $tweet = new Tweet();

        $form = $this->createFormTweetAction($tweet);
        $form->handleRequest($req);

        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tweet);
            $em->flush();
        }

        return new Response('Tweet utworzony');
    }

    /**
     * @Route("/createUser")
     * @Template()
     */
    public function createFormUserAction($user) {

        $form = $this->createFormBuilder($user);
        $form->add('title', 'text');
        $form->add('tweetText', 'text');
        $form->add('save', 'submit', ['label' => 'add']);
        $form->setAction($this->generateUrl('newUser'));
        $tweetForm = $form->getForm();

        return ['form' => $tweetForm->createView()];
    }

    /**
     * @Route("/newUser", name = "newUser")
     */
    public function newUser(Request $req) {
        $user = new Tweet();

        $form = $this->createFormUserAction($user);
        $form->handleRequest($req);

        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }

        return new Response('User utworzony');
    }
}





