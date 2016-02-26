<?php

require_once('FizzBuzz.php');

class FizzBuzzTest extends PHPUnit_Framework_TestCase {

    public function testAnyNumber() {
        $this->assertEquals(1, FizzAndBuzz(1));
        $this->assertEquals(2, FizzAndBuzz(2));
        $this->assertEquals(4, FizzAndBuzz(4));
    }

    public function testThreeNumber() {
        $this->assertEquals('Fizz', FizzAndBuzz(3));
    }

}