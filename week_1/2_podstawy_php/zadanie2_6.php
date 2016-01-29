<!--Cena biletu zależy od długości trasy
0 do 11 km 2zł
od 11 do 30 1zł plus 0,10 za każdy km
przejazd powyżej 30km 1zł plus 0,08 za km
Przy założeniu że zmienna $sk oznacza długość w km,
napisz skrypt wyznaczjacy koszt przejazdu za $sk kilometrów-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

$sk = 30; //ile ile kilometrów
$pc = 0; //cena za przejazd
if($sk < 1){
    echo ("Nie masz po co jechać");
}
elseif($sk < 11){
    $pc = 2;
}
elseif($sk >= 11 && $sk < 30){
    $pc = 1 + 0.1 * $sk;
}
else{
    $pc = 1 + $sk * 0.08;
}
echo ("Za $sk kilometrów cena to $pc zł");
