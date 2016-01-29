<!--Napisz funkcję, która wyświetli te liczby w tablicy
które są mniejsze od średniej arytmetycznej wszystkich liczb w tablicy-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

//sposób 1 na forach
$n = 15; //rozmiar tablicy
echo ("Elementy tablicy to: ");
for($i = 0; $i < $n; $i ++){
    $tab[$i] = rand(0,9);
    echo ($tab[$i] . " ");
}
MniejSrednia($tab);

function MniejSrednia($tab){
    $sum = 0;
    $sr = 0;
    for($i = 0; $i < count($tab); $i ++){
        $sum += $tab[$i];
    }
    $sr = $sum / count($tab);
    echo ("<br>Średnia to $sr<br>");
    echo ("Liczby poniżej średniej to: ");
    for($i = 0; $i < count($tab); $i ++){
        if($tab[$i] < $sr){
            echo ($tab[$i] . " ");
        }
    }


}

//sposób 2 foreeach
echo("<hr>");
$n = 10; //rozmiar tablicy
echo ("Elementy tablicy to: ");
for($i = 0; $i < $n; $i ++){
    $tab[$i] = rand(0,9);
    echo ($tab[$i] . " ");
}
MniejSredniaForeach($tab);

function mniejSredniaForeach($tab){
    $sum = 0;
    $sr = 0;
    foreach($tab as $ele){
        $sum += $ele;
    }
    $sr = $sum / count($tab);
    echo ("<br>Średnia to $sr<br>");
    echo ("Liczby poniżej średniej to: ");
    foreach($tab as $ele){
        if($ele < $sr){
            echo ($ele . " ");
        }
    }
}