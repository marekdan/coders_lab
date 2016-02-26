<?php

function romanNum($num) {
    $score = '';

    if (($num <= 0) OR ($num > 3999)) {
        return 'Podana liczba jest zla';
    }

    $roman = ['M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1];
    while ($num > 0) {
        foreach ($roman as $key => $ele) {
            if ($num >= $ele) {
                $num -= $ele;
                $score .= $key;
                break;
            }
        }
    }

    return $score;
}

$num = 222;
echo romanNum($num);


