<?php

namespace CodersLabBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller {

    /**
     * @Route("/setCookie/{text}", name="setCookie")
     */
    public function setCookieAction($text) {
        $resp = $this->redirectToRoute('getCookie');
        $cookie = new Cookie('text', $text, time() + 3600);

        $resp->headers->setCookie($cookie);

        return $resp;
    }

    /**
     * @Route(
     * "/getCookie",
     * name="getCookie"
     * )
     */
    public function getCookieAction(Request $reg) {
        $cookie = $reg->cookies->all();

        if (isset($cookie['text'])) {
            $cookieValue = $cookie['text'];
        }
        else {
            $cookieValue = $cookie['text'] = 'brak cookie';
        }

        return new Response($cookieValue);
    }

    /**
     * @Route("/deleteCookie")
     */
    public function deleteCookieAction() {
        $resp = new Response('Usuniete');
        $resp->headers->clearCookie('text');

        return $resp;
    }

    /**
     * @Route("/test")
     */
    public function setTestAction(){
        return $this->redirectToRoute('setCookie', array('text' => 'cookie slug'));
    }



    /**
     * @Route("/google")
     */
    public function googleAction(){
        return $this->redirect('https://www.google.pl/');
    }

    /**
     * @Route("/google2/{search}")
     */
    public function googleeAction($search){
        return $this->redirect('https://www.google.pl/#q=' . $search);
    }
}
