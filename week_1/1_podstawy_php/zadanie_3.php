<!--Narysuj schemat blokowy i napisz pseudokod wypisujący wszystkie pozycje, na
których w tablicy A[1, . . . , n] znajduje się liczba x.-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<?php

$n = 30; //ile liczb ma być w tablicy?
$x = 5; //jakiej liczby szukasz?
for($i = 0; $i < $n; $i++){
    $tab2[] = rand(1,10);
    echo ("Pozycja w tablicy: $i Wylosowana liczba: $tab2[$i] <br>");
}
echo ("<br>Szukana liczba to: $x <br>");
echo ("Pozycje szukanej liczby to: ");
for($i = 0; $i < $n; $i++){
    if($tab2[$i] == $x){
        echo ("$i ");
    }
}
