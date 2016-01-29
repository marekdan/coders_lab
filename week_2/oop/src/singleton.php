<?php


class Singleton {
    static private $instance = null;

    private function __construct(){
        echo "Konstruktor";
    }
    static function GetInstance(){
        if(Singleton::$instance === null){
            Singleton::$instance = new Singleton();
        }
        return Singleton::$instance;
    }
}

?>