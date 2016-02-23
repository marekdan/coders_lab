<?php

namespace CodersLabBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * @Route("/first")
 */
class firstController extends Controller {

    /**
     * @Route("/helloWorld", name = "helloWorld")
     */
    public function helloWorldAction() {

        return new Response('Hello World');
    }

    /**
     * @Route("/goodBye/{username}", name = "goodBye")
     */
    public function goodByeAction($username) {

        return new Response('Good Bye ' . $username);
    }

    /**
     * @Route("/welcome/{name}/{surname}",
     * name = "welcome",
     * defaults={"name" = "Marek", "surname" = "Danilowicz"})
     */
    public function welcomeFullAction($name, $surname) {

        return new Response('Welcome: ' . $name . ' ' . $surname);
    }

    /**
     * @Route("/showPost/{id}",
     * name = "showPost",
     * requirements={"id" = "[\d+]"})
     */
    public function showPostAction($id) {

        return new Response('Showing post: ' . $id);
    }

    /**
     * @Route("/form", name = "form")
     * @Method("GET")
     */
    public function showFormAction() {
        //echo '
        return new Response('
            <form method="POST">
                <label>
                    <input type="text" name="message">
                    <input type="submit" name="OK">
                </label>
            </form>
        ');
    }

    /**
     * @Route("/form", name = "form")
     * @Method("POST")
     */
    public function takeFormAction(Request $req) {
        $text = $req->request->get('message');

        return new Response('Formularz przyjety <br> Zawartość: <br>' . $text);
    }

    /**
     * @Route("/setSession/{value}", name = "setSession")
     */
    public function setSessionAction($value) {
        $session = new Session();
        $session->set('usertext', $value);

        return new Response('Sesja utworzona');
    }

    /**
     * @Route("/getSession", name = "getSession")
     */
    public function getSessionAction(Request $reg) {
        $session = $reg->getSession()->get('usertext', 'Nie ma takiej sesji');

        return new Response('Wiadomość z sesji to: ' . $session);
    }

    /**
     * @Route("/setCookie/{value}", name = "setCookie")
     */
    public function setCookieAction($value) {
        $cookie = new Cookie('myCookie', $value, time() + 3600);
        $response = new Response();
        $response->headers->setCookie($cookie);

        return $response;
    }

    /**
     * @Route("/getCookie", name = "getCookie")
     */
    public function getCookieAction(Request $req) {
        $cookie = $req->cookies->all();

        if (isset($cookie['myCookie'])) {
            $returnValue = $cookie['myCookie'];
        }
        else {
            $returnValue = 'Nie ma ciesteczka';
        }

        return new Response($returnValue);
    }

    /**
     * @Route("/delCookie", name = "delCookie")
     */
    public function deleteCookieAction() {
        $response = new Response('Cookie deleted');
        $response->headers->clearCookie('myCookie');

        return $response;
    }

    /**
     * @Route("/redirectMe/{username}", name = "redirectMe")
     */
    public function redirectMeAction($username) {
        return $this->redirectToRoute('goodBye', array('username' => $username));
    }

    /**
     * @Route("/showAllLinks")
     */
    public function showAllLinksAction() {
        $links = '';
        $urlOne = $this->generateUrl(
            'helloWorld'
        );

        $urlTwo = $this->generateUrl(
            'goodBye',
            array(
                'username' => 'Ania z zielonego wzgórza'
            )
        );

        $urlThree = $this->generateUrl(
            'welcome',
            array(
                'name'    => 'Ania',
                'surname' => 'Kowalski'
            )
        );

        $urlFour = $this->generateUrl(
            'showPost',
            array(
                'id' => '2',
            )
        );

        $urlFive = $this->generateUrl(
            'form'
        );

        $urlSix = $this->generateUrl(
            'form'
        );

        $urlSeven = $this->generateUrl(
            'setSession',
            array(
                'value' => 'Tekst z sesji',
            )
        );

        $urlEight = $this->generateUrl(
            'getSession'
        );

        $urlNine = $this->generateUrl(
            'setCookie',
            array(
                'value' => 'wartosc z ciasteczka',
            )
        );

        $urlTen = $this->generateUrl(
            'getCookie'
        );

        $urlEleven = $this->generateUrl(
            'delCookie'
        );

        $links .= '<a href ="' . $urlOne . '">Link1 helloWorld</a><br>';
        $links .= '<a href ="' . $urlTwo . '">Link2 goodBye</a><br>';
        $links .= '<a href ="' . $urlThree . '">Link3 welcome</a><br>';
        $links .= '<a href ="' . $urlFour . '">Link4 showPost</a><br>';
        $links .= '<a href ="' . $urlFive . '">Link5 form</a><br>';
        $links .= '<a href ="' . $urlSix . '">Link6 form</a><br>';
        $links .= '<a href ="' . $urlSeven . '">Link7 setSession</a><br>';
        $links .= '<a href ="' . $urlEight . '">Link8 getSession</a><br>';
        $links .= '<a href ="' . $urlNine . '">Link9 setCookie</a><br>';
        $links .= '<a href ="' . $urlTen . '">Link10 getCookie</a><br>';
        $links .= '<a href ="' . $urlEleven . '">Link11 delCookie</a><br>';


        return new Response($links);
    }

    /**
     * @Route("/getLinks")
     * @Template("CodersLabBundle:first:links.html.twig")
     */
    public function getLinks() {
        $links =[
            'helloWorld'=>[],
            'goodBye'=>['username'=>'Marko'],
            'welcome'=>['name'=>'Marko', 'surname'=>'surname'],
            'showPost'=>['id'=>'1'],
            'form'=>[],
            'setSession'=>['value'=> 'qwer'],
            'getSession'=>[],
            'setCookie'=>['value'=>'123'],
            'getCookie'=>[],
            'delCookie'=>[],
        ];

        return ['links' => $links];
    }
}
