<?php

//zadanie 6 napisz test sprawdzajacy czy podany parametr jako drugi jest typem tablicowym

class  isArrayTest extends PHPUnit_Framework_TestCase{

    public function testIsArray(){
        $myVar = array(1, 2, 3);
        $this->assertInternalType('array', $myVar);
    }
}