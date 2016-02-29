<?php

namespace CodersLabBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use CodersLabBundle\Entity\User;

class DefaultController extends Controller {

    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name) {
        return array('name' => $name);
    }

    /**
     * @Route("/admin")
     */
    public function adminHelloAction() {
        return new Response('Jestes adminem!');
    }

    /**
     * @Route("/test2")
     */
    public function deny2TestAction() {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Access denied');

        return new Response('IM in  ');
    }

    /**
     * @Route("/test")
     * @Security("has_role('ROLE_ADMINaaa')")
     */
    public function denyTestAction() {
        return new Response('Access granted');
    }

    /**
     * @Route("/getusername")
     */
    public function getUserNameAction() {
        /** @var User $user */
        $user = $this->getUser();

        if (!$user) {
            return new Response('nie zalogowany');
        }
        else {
            return new Response('zalogowany jako: ') . $user->getUsername();
        }
    }

    /**
     * @Route("/addadmin/{userId}")
     */
    public function addAdminAction($userId) {
//        wersja pierwsza
//        $repo = $this->getDoctrine()->getRepository('CodersLabBundle:User');
//        $user = $repo->find($userId);
//
//        $user->addRole('ROLE_ADMIN');
//
//        $em = $this->getDoctrine()->getManager();
//        $em->flush();

//      wersja zalecana do zarządznia
        $um = $this->get('fos_user.user_manager');
        $user = $um->findUserBy(['id' => $userId]);
        $user->addRole('ROLE_ADMIN');
        $um->updateUser($user);

        return new Response('dodano admina do: ' . $user->getUsername());
    }
}
