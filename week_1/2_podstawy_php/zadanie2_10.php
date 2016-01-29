<!--Zadanie: Napisz funkcję przyjmującą jeden parametr, która bada czy
liczba przekazana w parametrze jest parzysta. Jeśli tak – funkcja ma
zwracać logiczną prawdę, w przeciwnym przypadku ma zwracać fałsz.
Sprawdź działanie funkcji wywołując ją w przykładowym skrypcie.-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

function tof($number){
    if($number % 2 == 0){
        return true;
    }
    else{
        return false;
    }
}
$number = 8;
var_dump(tof($number));