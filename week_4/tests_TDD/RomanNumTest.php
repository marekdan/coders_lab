<?php

require_once('RomanNum.php');

class RomanNumTest extends PHPUnit_Framework_TestCase {

    function testRomanNum() {

        $this->assertEquals('CCXXII', romanNum(222));
    }
}