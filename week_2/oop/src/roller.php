<?php

require_once ("wheel.php");

class Roller extends Wheel{
    protected $h;

    public function __construct($newX, $newY, $newCol, $newR, $newH){
        echo "Konstruktor Roller<br>";
        parent::__construct($newX, $newY, $newCol, $newR);
        $this->setH($newH);
    }

    public function __destruct() {
        echo "Destruktor Roller <br>";
        parent::__destruct();
    }

    public function setH($newH){
        if(is_int($newH) || is_float($newH)){
            return $this->h = $newH;
        }
        else{
            return $this->h = 0;
        }
    }

    public function getH(){
        return $this->h;
    }

    public function display(){
        parent::display();
        echo "Wysokosc to: ".$this->getH()."<br>";
    }

    public function volume(){
        $p = $this->getArea();
        return $p * $this->h;
    }
}

?>