<?php

class Form{
    protected $x;
    protected $y;
    protected $col;

    public function __construct($newX, $newY, $newCol){
        echo "Konstruktor Form <br>";
        $this->setXY($newX, $newY);
        $this->setCol($newCol);
    }

    public function __destruct(){
        echo "Destruktor Form <br>";
    }

    public function setXY($newX, $newY){
        if(is_int($newX) === true && is_int($newY) === true){
            $this->x = $newX;
            $this->y = $newY;
        }
        else{
            $this->x = 0;
            $this->y = 0;
        }
    }

    public function setCol($newCol){
        if(is_string($newCol)){
        $this->col = $newCol;
        }
        else{
            $this->col = null;
        }
    }

    public function display(){
        echo "X to: $this->x <br>";
        echo "Y to: $this->y <br>";
        echo "Kolor to: $this->col <br>";
    }

    public function distance(Form $other){

        $x1 = $this->x;
        $y1 = $this->y;

        $x2 = $other->x;
        $y2 = $other->y;

        $total = sqrt(pow(($x1 - $x2), 2) + pow(($y1 - $y2), 2));
        var_dump($total);
        return $total;
    }
}