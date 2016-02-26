<?php

require_once ('LeapYearGenerator.php');

class LeapYearGenerateTest extends PHPUnit_Framework_TestCase{

    function test_checkLeapYear_false(){
        $test_LeapYearGenerator = new LeapYearGenerator;
        $input = 1993;
        $result = $test_LeapYearGenerator->checkLeapYear($input);
        $this->assertEquals(false, $result);
    }

    function test_checkLeapYear_true(){
        $test_LeapYearGenerator = new LeapYearGenerator;
        $input = 1996;
        $result = $test_LeapYearGenerator->checkLeapYear($input);
        $this->assertEquals(true, $result);
    }
}