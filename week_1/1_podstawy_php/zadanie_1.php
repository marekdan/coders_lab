<!--Narysuj schemat blokowy i napisz pseudokod, który wpisze do tablicy A
wartości od 1 do 10. A następnie doda te wartości a wynik wypisze na ekranie.-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<?php

$total = 0; //suma liczb
for($i = 0; $i < 10; $i++){
    $tab[$i] = $i+1;        //przypisywanie do tablicy liczb od 1 do 0
    $total += $tab[$i]; //sumowanie kolejnych elementów tablicy
}
echo ("Wynik to: $total");  //wypisanie sumy