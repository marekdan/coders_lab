<?php

class Vector2D{
    private $x;
    private $y;

    public function __construct($newX, $newY){
        echo "Konstruktor dla Vectora2D <br>";
        echo "Podanie x: $newX <br>";
        echo "Podanie y: $newY <br>";

        $this->setX($newX);
        $this->setY($newY);
    }

    public function __destruct(){
        echo "Wektor zniszczony<br>";
        echo "x: $this->x<br>";
        echo "x: $this->y<br>";
    }

    public function setX($newX){
        if(is_int($newX) === true){
            $this->x = $newX;
        }
        else{
            $this->x = 0;
        }
    }

    public function setY($newY){
        if(is_int($newY) === true){
            $this->y = $newY;
        }
        else{
            $this->y = 0;
        }
    }

    public function getLength(){
        return sqrt(pow($this->x, 2) + pow($this->y, 2));
    }

    public function addVector(Vector2D $other){
        $this->x += $other->x;
        $this->Y += $other->y;
    }

    public function multiply($num){
        if(is_int($num) || is_float($num)){
            $this->x *= $num;
            $this->y*= $num;
        }
    }
}