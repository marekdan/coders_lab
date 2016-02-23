<?php

namespace CodersLabBundle\Controller;


use CodersLabBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ViewsController extends Controller {

    /**
     * @Route("/render")
     * @Template()
     */
    public function renderAction() {
        return [];
    }

    /**
     * @Route("/render/{username}")
     * @Template("CodersLabBundle:Views:render2.html.twig")
     */
    public function renderNameAction($username) {
        return ['username' => $username];
    }

    /**
     * @Route("/repeat/{n}")
     * @Template("CodersLabBundle:Views:repeat.html.twig")
     */
    public function repeatAction($n) {
        return ['repeat' => $n];
    }

    /**
     * @Route("/repeatThis/{n}/{text}")
     * @Template("CodersLabBundle:Views:repeat_2.html.twig")
     */
    public function repeatSentenceAction($n, $text = 'symfony jest fajne') {
        return ['repeat' => $n, 'text' => $text];
    }

    /**
     * @Route("/createRandoms/{start}/{end}/{n}")
     * @Template("CodersLabBundle:Views:random.html.twig")
     */
    public function createRandomsAction($start, $end, $n) {
        $array = [];
        for ($i = 0; $n > $i; $i++) {
            $array[$i] = rand($start, $end);
        }

        return ['array' => $array, 'n' => $n, 'start'=>$start, 'end'=>$end];
    }

    /**
     * @Route("/showArticle/{id}")
     * @Template("CodersLabBundle:Views:article.html.twig")
     */
    public function showArticleAction($id){
        $article = Article::GetArticlebyId($id);

        return ['article' => $article];
    }

    /**
     * @Route("/showAllArticles")
     * @Template("CodersLabBundle:Views:articleAll.html.twig")
     */
    public function showAllArticlesAction(){
        $articles = Article::GetAllArticles();

        return ['articles' => $articles];
    }

}

/*
Stwórz akcję podpiętą do adresu /createRandoms/{start}/{end}/{n}.
Akcja ma generować tablicę z n losowymi liczbami z zakresu start do end którą
prześlesz do swojego widoku. Nastepnie w Twigu użyj pętli for żeby wyświetlić wszystkie przesłane liczby.
Jeżeli tablica jest pusta (czyli podane n jest mniejsze lub równe 0) powinieneś
wyświetlić odpowiednią informacje.
*/