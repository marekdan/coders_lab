<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class PostController extends Controller {

    /**
     * @Route("/helloworld/{name}")
     */
    public function getSessionAction(Request $req, $name){
        $_SESSION['sesja_test'] = 'asdasd';
        $sesja = $req->getSession()->get('sesja_test', 'Nie ma takiej sesji');

        return new Response('Hello world: ' . $name . '<br>' . $sesja);
    }

    /**
     * @Route("/set")
     */
    public function setSessionAction(){
        $session = new Session();
        $session->set('sesja_test', 'darker than black');
        return new Response('Sesja ustawiona');
    }

}
