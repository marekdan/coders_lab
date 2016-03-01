<?php

namespace CodersLabBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Response;

class LoggingController extends Controller {

    /**
     * @Route("/all")
     * @Template()
     */
    public function allAction() {
        return new Response('widzisz wszystko');
    }

    /**
     * @Route("/restricted")
     * @Template()
     * @Security("has_role('ROLE_USER')")
     */
    public function restrictedAction() {
        return new Response('widzisz restricted');
    }

}
