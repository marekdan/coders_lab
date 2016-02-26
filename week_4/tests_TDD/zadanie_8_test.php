<?php

//zadanie 8 Napisz kalkulator dodajacy dwie zmienne - zastosuj metodę TDD wykorzystaną w FizzBuzz

require_once ('zadanie_8_calculator.php');

class calculatorTest extends PHPUnit_Framework_TestCase{

    public function testAdd(){
        $c = new Calculatorr;
        $result = $c->add(10, 15);
        $this->assertEquals(25, $result);
    }

}