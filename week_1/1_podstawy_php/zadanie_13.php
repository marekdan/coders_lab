<!--Napisz program który będzie obliczał wartość liczby Pi używając następującej
formuły: formuła w pdf Zobacz jak zmienia się precyzja wyniku w zależności od ilości iteracji.-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<?php

$k = 1;
$n =1500; // dokładność pi
$pi = 0;
for($i = 1; $i <= $n; $i++){
    $zm = (1/$k);
    if($i % 2 == 0){
        $zm = $zm * (-1);
    }
    $k += 2;
    $pi = $pi + $zm;
}
$pi = $pi * 4;
echo ("PI to $pi");