<?php

class LeapYearGenerator {

    function checkLeapYear($input_year) {

        if (($input_year % 4 == 0 && $input_year % 100 != 0) OR ($input_year % 400 == 0)) {
            return true;
        }
        else {
            return false;
        }
    }
}