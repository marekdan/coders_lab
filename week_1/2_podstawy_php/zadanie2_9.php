<!--Napisz skrypt, który dla zmiennej $liczba będącej liczbą całkowitą dodatnią wypisze sumę wszystkich
nieparzystych liczb aż do liczby #liczba-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

//sposób 1
$liczba = 9;
for($i = 1; $i <= $liczba; $i++){
    if(($i % 2) == 1){
        $s += $i;
    }
}
echo ("Suma nieparzystych to: $s");

//sposób 2
$liczba = 9;
$s = 0;
for($i = 1; $i <= $liczba; $i += 2){
    $s += $i;
}
echo ("<br>Suma nieparzystych to: $s");
