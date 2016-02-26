<?php

//zadanie 5 napisz test sprawdzajacy czy pierwszy parametr istnieje jako element tablicy

class FirstParameterTest extends PHPUnit_Framework_TestCase{

    public function testFirstParameter(){

        $myVar = array('n', 2, 3);
        $this->assertContains('n', $myVar);
    }
}