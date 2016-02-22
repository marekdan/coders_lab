<?php

namespace CodersLabBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/post/{id}")
 */
class PostController extends Controller {

    /**
     * @Route("/")
     */
    public function showPost($id) {
        return new Response('Wysywietlam post: ' . $id);
    }

    /**
     * @Route("/delete")
     */
    public function deletePost($id) {
        return new Response('Usuwam post: ' . $id);
    }

}
