<?php

//zadanie 3 napisz test sprawdzajacy dwa typ danej liczbowej

Class TypeTest extends PHPUnit_Framework_TestCase{

    public function testNumberType(){
        $myVar = '10';
        $this->assertEquals($myVar, 10);
    }
}