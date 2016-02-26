<?php

class LeapYear {

    public function validate($year) {
        $result = ($year % 4) == 0;
        if ($year % 100 != 0) {
            $result = ($year % 400 == 0);
        }

        return $result;
    }

}