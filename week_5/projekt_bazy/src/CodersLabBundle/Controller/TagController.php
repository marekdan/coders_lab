<?php

namespace CodersLabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class TagController extends Controller
{

    /**
     * @Route("/showAllTags")
     * @Template()
     */
    public function showAllTagsAction(){
        $repo = $this->getDoctrine()->getRepository('CodersLabBundle:Tag');

        $allTags = $repo->findAll();

        return ['allTags'=>$allTags];
    }

    /**
     * @Route("/showAllTagsOrdered")
     * @Template()
     */
    public function showAllTagsOrderedAction(){
        $repo = $this->getDoctrine()->getRepository('CodersLabBundle:Tag');

        $allTags = $repo->findAllOrderByTagText();
        return ['allTags'=>$allTags];
    }

    /**
     * @Route("/searchTag/{searchText}")
     * @Template("CodersLabBundle:Tag:showAllTags.html.twig")
     */
    public function searchTagAction($searchText){
        $repo = $this->getDoctrine()->getRepository('CodersLabBundle:Tag');
        $allTags = $repo->searchByTagText($searchText);

        return ['allTags'=>$allTags];
    }

}
