<!--Napisz funkcję sprawdzającą czy podana liczba jest liczbą pierwszą (jest
podzielna tylko przez 1 i samą siebie).
Żeby dostać resztę z dzielenia użyj operatora %, np.: 12 % 5 = 2-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<?php

function first($number){
    $s = 0;
    for($i = 1; $i <= $number; $i++){
        echo "obrot $i <br>";
        if(($number % $i) == 0){
            $s++;
        }
    }
    return $s;
}

$number = 6; //liczba którą sprawdzamy
if(first($number) == 2){
    echo ("$number jest liczbą pierwszą");
}
else{
    echo ("$number nie jest liczbą pierwszą");
}