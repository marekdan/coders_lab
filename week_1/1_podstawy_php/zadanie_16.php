<!--Napisać funkcję, która pobiera liczbę $a i $n jako argument i zwraca jako
wynik $a do potęgi $n.-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<?php

$a = 2; //liczba potęgowana
$n = 10; //wykładnik
$s = $a;
function result($a, $n){
    $power = 1;
    for($i = 0; $i < $n; $i ++){
        $power *= $a;
    }
    return $power;
}
echo ("$s do potęgi $n to: ");
echo (result($a, $n));
