<?php

class SampleTest extends PHPUnit_Framework_TestCase {

    public function testTru() {
        $this->assertTrue(true, 'First assseration failed');

        $myVar = 10;
        $this->assertEquals($myVar, 5 + 5);
    }

}