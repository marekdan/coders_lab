<?php

require_once ("form.php");

class Wheel extends Form{
    protected $r;

    public function __construct($newX, $newY, $newCol, $newR) {
        echo "Konstruktor Wheel<br>";
        parent::__construct($newX, $newY, $newCol);
        $this->setR($newR);

    }

    public function __destruct() {
        echo "Destruktor Wheel <br>";
        parent::__destruct();
    }

    public function setR($newR){
        if(is_int($newR) || is_float($newR)){
            $this->r = $newR;
        }
        else{
            $this->r = 0;
        }
    }

    public function gerR(){
        return $this->r;
    }

    public function display(){
        parent::display();
        echo "Promien: $this->r <br>";
    }

    public function getArea(){
        return (M_PI * pow($this->r, 2));
    }

    public function getPerimeter(){
        return (2 * M_PI * $this->r);
    }
}