<?php

namespace CodersLabBundle\Controller;


use CodersLabBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller {

    private function generateUserForm($user) {
        $form = $this->createFormBuilder($user);
        $form->add('username', 'text');
        $form->add('age', 'number');
        $form->add('email', 'email');
        $form->add('save', 'submit', ['label' => 'Utworz nowego uzytkownika']);
        $form->setAction($this->generateUrl('createUser'));
        $userForm = $form->getForm();

        return $userForm;
    }

    /**
     * @Route("/newUser")
     * @Template()
     */
    public function newUserAction() {
        $user = new User();

        $userForm = $this->generateUserForm($user);

        return ['form' => $userForm->createView()];
    }

    /**
     * @Route("/createUser", name = "createUser")
     */
    public function createUserAction(Request $req) {
        $user = new User();

        $form = $this->generateUserForm($user);
        $form->handleRequest($req);
        if($form->isSubmitted()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }

        $userId = $user->getId();

        return $this->redirectToRoute('showUser', ['id'=>$userId]);
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

        return $this->redirectToRoute('showUser', ['id' => $id]);
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

        return ['user' => $user];
    }

}
