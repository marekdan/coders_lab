<!--Napisz program który na podstawie wartości zmiennej $n będzie rysował
następujący schemat (tutaj dla $n = 5):
*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*
-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<?php

$n = 5; //wielkość trójkąta
for($i = 0; $i < $n; $i++){
    for($j = 0; $j <= $i; $j++){
        echo ("*");
    }
    echo ("<br>");
}
for($i = 0; $i < $n; $i++){
    for($j = $n; $j > $i; $j--){
        echo ("*");
    }
    echo ("<br>");
}