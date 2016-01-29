<!--Napisz program który na podstawie wartości zmiennej $n będzie rysował
następujący schemat (tutaj dla $n = 5):
* 2 3 4 5
* * 3 4 5
* * * 4 5
* * * * 5
* * * * *
* * * * *
* * * * 5
* * * 4 5
* * 3 4 5
* 2 3 4 5-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<?php

$n = 5;
for($i = 1; $i <= $n; $i++){
    for($j =1; $j <= $n; $j++){
        if($i >= $j){
            echo ("*");
        }
        else{
            echo ("$j");
        }
    }
    echo ("<br>");
}
for($i = $n; $i >= 1; $i--){
    for($j = 1; $j <= $n; $j++){
        if($j <= $i){
            echo ("*");
        }
        else{
            echo("$j");
        }
    }
    echo ("<br>");
}