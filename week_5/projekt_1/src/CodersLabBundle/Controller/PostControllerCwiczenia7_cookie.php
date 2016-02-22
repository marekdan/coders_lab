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
     * @Route("/setCookie/{text}")
     */
    public function setCookieAction($text) {
        $cookie = new Cookie('text', $text, time() + 3600);

        $resp = new Response();
        $resp->headers->setCookie($cookie);

        return $resp;
    }

    /**
     * @Route("/getCookie")
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
}
