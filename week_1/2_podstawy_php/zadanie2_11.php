<!--Napisz funkcję wyznacającą liczbę cyfr liczby całkowitej.-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

$liczba = -12345;
echo ("Liczba $liczba ma: " . Zliczaj($liczba) . " cyfr");

function Zliczaj($liczba){
    if($liczba == 0){
        return 1;
    }
    for($i = 0; $liczba >= 1 || -1 >= $liczba; $i++){
        $liczba /= 10;
    }
    return $i;
}