<?php
//po ang
function verbalNum($num) {

    $score = '';

    $numTab = ['one' => 10, 'two' => 9, 'three' => 8, 'four' => 7, 'five' => 6, 'six' => 5, 'seven' => 4, 'eight' => 3, 'nine' => 2, 'ten' => 1];

    while ($num > 0) {
        foreach ($numTab as $key => $ele) {
            if($num <= 99){

            }
            elseif(){

            }
            elseif($num >= $ele){
                $num -= $ele;
                $score .= $key . ' ';
                break;
            }
        }
    }

    return $score;
}

$num = 10;
echo verbalNum($num);