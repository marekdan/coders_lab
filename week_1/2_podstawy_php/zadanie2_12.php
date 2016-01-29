<!--Napisz funkcję max2, która zwraca większą z podanych jako jej
parametry liczb, a następnie funkcję max3, zwracającą największą spośród trzech
podanych liczb. Funkcja max3 ma do tego celu używać funkcji max2.-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

function max2($a, $b){
    if($a > $b){
        return $a;
    }
    else{
        return $b;
    }
}
function max3($a, $b, $c){
    if(max2($a, $b) > $c){
        return max2($a, $b);
    }
    else{
        return $c;
    }
}

$a = 6;
$b = 5;
$c = 9;
echo ("Z liczb: $a, $b największa liczba to: " . max2($a, $b) . "<br>");
echo ("Z liczb: $a, $b, $c największa liczba to: " . max3($a, $b, $c));
