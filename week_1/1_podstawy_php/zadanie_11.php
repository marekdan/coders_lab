<!--DODATKOWE
Napisz program który na podstawie wartości zmiennej $n będzie rysował
następujący schemat (tutaj dla $n = 5):
1 2 3 4 5 4 3 2 1
1 2 3 4   4 3 2 1
1 2 3       3 2 1
1 2           2 1
1               1
1 2 3 4 5 4 3 2 1-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<?php

$n = 5;
$k = 1;
for($i = 0; $i < $n; $i++){
    for($j = 1; $j < $n; $j++){
        echo ("$j");
    }
    for($l = $n; $l >= 1; $l--){
        echo ("$l");
    }
    echo ("<br>");
    $k += 2;
}
