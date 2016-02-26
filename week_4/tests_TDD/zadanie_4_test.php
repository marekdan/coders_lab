<?php

//zadanie 4 napisz test sprawdzajacy identycznosc tyow danych

class SameTest extends PHPUnit_Framework_TestCase{

    public function testSame(){
        $myVar = 10;
        $this->assertSame(10, $myVar);
    }
}

