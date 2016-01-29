<!--Napisz skrypt, który dla zmiennej $liczba będącej
liczbą całkowitą wypisze sumę cyft tej liczby-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

$liczba = 1234;
$suma = 0;
while($liczba > 0){
    $suma += $liczba % 10;
    $liczba = ($liczba - $liczba % 10)/10;
}
echo ("$suma <br>");

$liczba = 1234;
$suma = 0;
while($liczba > 0){
    $suma += $liczba % 10;
    $liczba = (int)($liczba/10);
}
echo ("$suma");
