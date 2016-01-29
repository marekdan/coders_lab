<?php


function maxof3($number1, $number2, $number3 ){
    $maxNumber = null;
    if($number1 > $number2 && $number1 > $number3){
        $maxNumber = $number1;
    }
    if($number2 > $number1 && $number2 > $number3){
        $maxNumber = $number2;
    }
    if($number3 > $number3 && $number3 > $number1){
        $maxNumber = $number3;
    }
    return $maxNumber;
}
echo ("Max z 4, 7, 2 = " . maxof3(4, 7, 2) . "<br>");
echo ("Max z 18, 7, 2 = " . maxof3(18, 7, 2) . "<br>");
echo ("Max z 4, 7, 2 = " . maxof3(4, 7, 2) . "<br>");