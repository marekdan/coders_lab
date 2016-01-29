<!--Napisz program, który definiuje 3 liczby całkowite. Za pomocą używania
instrukcji if, else zdefiniuj program, który wypisuje na ekran największą z liczb.
Do porównywania liczb użyj operatorów: > (większy), >= (większy równy), < (mniejszy), <=
(mniejszy równy).Więcej o operatorach dowiecie się na pierwszym dniu zajęć PHP.-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<?php

$number1 = 3;
$number2 = 1;
$number3 = 2;
if($number1 > $number2){
    if($number1 > $number3){
        echo ("Największa liczba to number1");
    }
    else{
        echo ("Największa liczba to number3");
    }
}
if($number2 > $number3){
    echo ("Największa liczba to number 2");
}
if($number3 > $number1){
    echo ("Najwieksza liczba to number 3");
}