<!--Zadanie *. Napisz funkcję, która oblicza kolejne wyrazy ciągu Fibonacciego
(http://pl.wikipedia.org/wiki/Ci%C4%85g_Fibonacciego) aż do podanej zmiennej. Nie
używaj do tego rekurencji.-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<?php

function fibonacci($n){
    $tab[0] = 0;
    $tab[1] = 1;
    for($i = 0; $i < $n; $i++){
        $tab[$i+2] = $tab[$i] + $tab[$i+1];
        echo $i+1 . " element ciągu to: " . $tab[$i] . "<br>";
    }
    return $tab[$i+2];
}
$n = 10; //ile wyrazów ciągu ma obliczyć
fibonacci($n);

