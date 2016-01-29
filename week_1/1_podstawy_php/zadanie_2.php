<!--Narysuj schemat blokowy i napisz pseudokod, znajdujący najwyższą liczbę w
10 elementowej tablicy.-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<?php

$n = 10; //ile ma być liczb w tablicy?
for($i = 0; $i < $n; $i++){
    $tab[] = rand(0,50);
}
$max = $tab[0];
echo ("Wylosowane liczby to: ");
for($i = 0; $i < $n; $i++){
    echo("$tab[$i]");
    if($i < $n-1){  //przecinek znika przy ostatniej liczbie
        echo (", ");
    }
    else{   //kropka na końcu losowania
        echo (".");
    }
    if($tab[$i] > $max){
        $max = $tab[$i];
    }
}
echo ("<br>Największa liczba to: $max");