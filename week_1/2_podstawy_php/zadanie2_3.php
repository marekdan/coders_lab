<!--Napisz skrypt, który wyświetli ilość pierwiastków równania kwadratowego
(ax2 + bx + c) o współczynnikach a, b i c.-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

//sposób 1
$a = 1;
$b = 0;
$c = 0;
if($a != 0){
    $delta = $b * $b - 4 * $a * $c;
    if($delta > 0){
        echo ("Ma dwa rozwiazania");
    }
    elseif($delta == 0){
        echo ("Ma jedno rozwiazanie");
    }
    else{
        echo ("Nie ma rozwiązania");
    }
}
else{
    echo ("Nie ma rozwiązania");
}

//sposób 2
$a = 5;
$b = 7;
$c = 2;
$delta = $b * $b - 4 * $a * $c;
echo($delta > 0) ? "<br>Ma dwa pierwiastki" : ($delta == 0 ? "<br>Ma jeden pierwiastek" : "<br>Brak pierwiastków");
