<!--Napisz funkcję, która wyświetli największą liczbę spośród liczb znajdujących się
w tablicy liczb całkowitych. Funkcja ma przyjomwać jeden parametr - tablicę.-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

//sposób 1
$n = 10; //rozmiar tablicy
for($i = 0; $i < $n; $i ++){
    $tab[$i] = rand(0,9);
}
echo ("Elementy tablicy 1 to: ");
for($i = 0; $i < $n; $i ++){
    echo ($tab[$i] . " ");
}
echo ("<br>Największa liczba 1 to: " . najwieksza($tab));

function najwieksza($tab){
    $max = $tab[0];
    foreach($tab as $ind => $val){
        if($max < $val){
            $max = $val;
        }
    }
    return $max;
}

//sposób 2
function Naj($tab, $n){
    $max = $tab[0];
    for($i = 0; $i < $n; $i++){
        if($max < $tab[$i]){
            $max = $tab[$i];
        }
    }
    return $max;
}

echo ("<br>");
for($i = 0; $i < $n; $i ++){
    $tab[$i] = rand(0,9);
}
echo ("Elementy tablicy 2 to: ");
for($i = 0; $i < $n; $i ++){
    echo ($tab[$i] . " ");
}

echo ("<br>Największa liczba 2 to: " . Naj($tab, $n));

