<?php

namespace CodersLabBundle\Controller;


use CodersLabBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller {

    /**
     * @Route("/createUser")
     */
    public function createUserAction() {
        $user = new User();
        $user->setUsername('Adam');
        $user->setEmail('adam@pl');
        $user->setAge(25);

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        $userId = $user->getId();

        return new Response('Dodano usera o id: ' . $userId);
    }

    /**
     * @Route("/showUser/{id}", name = "showUser")
     * @Template()
     */
    public function showUserAction($id) {
        $repo = $this->getDoctrine()->getRepository('CodersLabBundle:User');
        $user = $repo->find($id);

        return ['user' => $user];
    }

    /**
     * @Route("/showAllUsers")
     * @Template()
     */
    public function showAllUsersAction() {
        $repo = $this->getDoctrine()->getRepository('CodersLabBundle:User');
        $users = $repo->findAll();

        return ['users' => $users];
    }

    /**
     * @Route("/updateUser/{id}/{username}")
     */
    public function updateUserAction($id, $username) {
        $repo = $this->getDoctrine()->getRepository('CodersLabBundle:User');
        $user = $repo->find($id);
        $user->setUsername($username);

        $em = $this->getDoctrine()->getManager();
        $em->flush();

        return $this->redirectToRoute('showUser', ['id'=>$id]);
    }

    /**
     * @Route("/removeUser/{id}")
     * @Template()
     */
    public function removeUserAction($id) {
        $repo = $this->getDoctrine()->getRepository('CodersLabBundle:User');
        $user = $repo->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();

        return ['user'=>$user];
    }
}
