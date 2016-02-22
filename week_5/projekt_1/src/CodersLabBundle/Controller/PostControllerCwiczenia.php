<?php


namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller {

    /**
     * @Route("/helloWorld/{name}",
     * name="HelloWorld")
     */
    public function helloWorldAction(Request $req, $name){
        $test = $req->query->get('test', 'nie podales parametru');

        return new Response('Hello world: ' . $name . $test);
    }
}
