<!--Napisz funkcję logiczną doskonała, ktra zwraca true
gdy zadana parametrem liczba całkowita jest liczbą doskonałą,
false w przeciwnym przypadku. Liczba doskonała to taka, która jest równa sumie
swoich dzielników. Np. 6 = 1+2+3.-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

function Doskonala($number){
    $s = 0;
    for($i = 1; $i <= $number / 2; $i++){
        if($number % $i == 0 ){
            $s += $i;
        }
    }
    return $number == $s && $number > 0 ? true : false;
}

$number = 6;
echo (" Liczba $number jest doskonała? ");
if(doskonala($number) == true){
    echo ("Tak");
}
else{
    echo ("Nie");
}