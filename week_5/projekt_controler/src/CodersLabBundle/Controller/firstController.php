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
     * @Route("/setSession/{value}")
     */
    public function setSessionAction($value) {
        $session = new Session();
        $session->set('usertext', $value);

        return new Response('Sesja utworzona');
    }

    /**
     * @Route("/getSession")
     */
    public function getSessionAction(Request $reg) {
        $session = $reg->getSession()->get('usertext', 'Nie ma takiej sesji');

        return new Response('Wiadomość z sesji to: ' . $session);
    }

    /**
     * @Route("/setCookie/{value}")
     */
    public function setCookieAction($value) {
        $cookie = new Cookie('myCookie', $value, time() + 3600);
        $response = new Response();
        $response->headers->setCookie($cookie);

        return $response;
    }

    /**
     * @Route("/getCookie")
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
     * @Route("/delCookie")
     */
    public function deleteCookieAction() {
        $response = new Response('Cookie deleted');
        $response->headers->clearCookie('myCookie');

        return $response;
    }

    /**
     * @Route("/redirectMe/{username}")
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
            'form',
            array(
                'id' => '2',
            )
        );

        $urlSix = $this->generateUrl(
            'form',
            array(
                'id' => '2',
            )
        );

        $links .= '<a href ="' . $urlOne . '">Link1</a><br>';
        $links .= '<a href ="' . $urlTwo . '">Link2</a><br>';
        $links .= '<a href ="' . $urlThree . '">Link3</a><br>';
        $links .= '<a href ="' . $urlFour . '">Link4</a><br>';
        $links .= '<a href ="' . $urlFive . '">Link4</a><br>';
        $links .= '<a href ="' . $urlSix . '">Link4</a><br>';


        return new Response($links);
    }
}
