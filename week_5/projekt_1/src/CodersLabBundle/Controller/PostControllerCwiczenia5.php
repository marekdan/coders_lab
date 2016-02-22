<?php

namespace CodersLabBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller {

    /**
     * @Route("/helloworld/{name}",
     * name="HelloWorld",
     * defaults={"name" = "nie podales imienia"},
     * requirements={"name" = "[a-zA-Z]+"})
     *
     * @Method({"POST", "GET"})
     */
    public function helloWorldAction($name) {
        return new Response('Hello World! ' . $name);
    }
}