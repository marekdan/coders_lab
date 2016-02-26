<?php

//zadanie 1 napisz test porownujacy string zawarty w zmiennej

Class StringTest extends PHPUnit_Framework_TestCase{

    public function testString(){
        $varStr = 'string';
        $this->assertEquals('string', $varStr);
    }
}