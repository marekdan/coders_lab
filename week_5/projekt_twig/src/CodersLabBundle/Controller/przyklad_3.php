<?php

namespace CodersLabBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class twigconController extends Controller {

    /**
     * @Route("/test2/{name}")
     * @Template()
     */
    public function test2Action($name){
        return ['name' => $name];
    }

}
