<!--Napisz program, który będzie liczył sumę wszystkich liczb w podanym
przedziale od $x do $y. Użyj do tego obu znanych Ci pętli. Np. dla podanego $x = 5, &y = 10
suma to 5+6+7+8+9+10=45-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<?php

//sposób 1
$x = 5;     //od jakiej liczby ma liczyć
$y = 10;    //do jakiej liczby ma liczyć
$s = 0;     //suma
for($i = $x; $i <= $y; $i++){
    $s = $s + $i;
}
echo ("Suma z przedziału od $x do $y to $s<br>");

//sposób 2
$x = 5;     //od jakiej liczby ma liczyć
$y = 10;    //do jakiej liczby ma liczyć
$s = 0;     //suma
$i = $x;
while($i <= $y){
    $s = $s + $i;
    $i++;
}
echo ("Suma z przedziału od $x do $y to $s");