<?php

require_once('LeapYear.php');

class LeapYearTest extends PHPUnit_Framework_TestCase {

    public function testLeapYearValidateExpectingFalse($value) {
        $validation = new LeapYear;
        $this->assertFalse($validation->validate($value));

    }

    public function testLeapYearValidateExpectingTrue($value) {
        $validation = new LeapYear;
        $this->assertTrue($validation->validate($value), 'Messages ' . $value);
    }

    public static function InputNonLeapYear() {
        return array("2015" => [2015], '1000' => [1000]);
    }

    public static function InputLeapYear() {
        return array('2004' => [2004], '2000' => [2000]);
    }
}