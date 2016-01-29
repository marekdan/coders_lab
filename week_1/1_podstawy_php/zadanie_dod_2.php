<!--Zadanie **. Napisz funkcję mySin($x, $iterNum) i myCos($x, $iterNum), która oblicza
aproksymacje funkcji sinus i cosinus używając następujących wzorów:
Żeby to zrobić najpierw napisz funkcje do wyliczania silni, potem do wyliczania potęgi a na
koniec połącz je w całość.-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<?php

$x = 4;
$iterNum = 4;
echo "Cosinus z $x to: " . cosinus($x, $iterNum) . "<br>";
echo "Sinus z $x to: " . sinus($x, $iterNum) . "<br>";

function sinus($x, $iterNum){
    $sin = 0;
    $k = 3; //początkowa wartość dla silni i wykladnka potegi
    for($i = 1; $i <= $iterNum; $i++){
        $zm = (power($x, $k)/factorial($k)); //wyliczenie potega/silnia
        if($i % 2 == 1){
            $zm = $zm * (-1); //zmiana znaków co drugie przejście
        }
        $k += 2;
        $sin += $zm; //dodanie potegi/silnia do wyniku
    }
    return $sin + $x;
}

function cosinus($x, $iterNum){
    $cos = 0;
    $k = 2; //początkowa wartość dla silni i wykladnka potegi
    for($i = 1; $i <= $iterNum; $i++){
        $zm = (power($x, $k)/factorial($k)); //wyliczenie potega/silnia
        if($i % 2 == 1){
            $zm = $zm * (-1); //zmiana znaków co drugi raz
        }
        $x += 2;
        $cos = $cos + $zm;
    }
    return $cos + 1;
}

function power($x, $k){ //wyliczanie potegi
    $power = 1;
    for($i = 0; $i < $k; $i ++){
        $power *= $x;
    }
    return $power;
}

function factorial($k){ //wyliczanie silni
    $s = 1; //zmienna przechowująca wynik silni
    for($i = 1; $i <= $k; $i++){
        $s *= $i;
    }
    return $s;
}