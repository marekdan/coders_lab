<?php

//zadanie 2 napisz test sprawdzajacy wartosć logiczną true oraz false

Class LogicTest extends PHPUnit_Framework_TestCase{

    public function testTruAndFalse(){

        $this->assertFalse(false, 'false ok');
        $this->assertTrue(true, 'true ok');

//        dodatkowe
//        $value = 11;
//        $this->assertTrue(is_numeric($value), 'message');
    }
}