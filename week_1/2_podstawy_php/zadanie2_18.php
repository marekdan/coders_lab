<!--Napisz funkcję, która jako parametr orzyjmuje tablicę i wyświetla
wszystkie elementy, które mają wszystkie cyfry parzyste;-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

$n = 10; //rozmiar tablicy
echo ("Liczby w tablicy to: ");
for($i = 0; $i < $n; $i++){
    $tab[$i] = rand(0,200);
    echo ("$tab[$i] ");
}
echo("<br>");
pair($tab);

function pair($tab){
    foreach($tab as $key){ //wyciąga liczbe z tablicy
        $check = (string)$key; //zamiena na string kolejne elementy(tablica)
        $s = 0;
        for($l = 0; $l < strlen($check); $l++){ //sprawdza długość i powtarza petle aż nie sprawdzi każdej liczby
            if($check[$l] % 2 == 0 && $check[$l] > 0){ //sprawdza czy dana cyfra jest parzysta i różna od zera
                $s++; //jeśli parzysta zwiększa licznik
            }
        }
        if(strlen($check) == $s){ //jeżeli liczba cyfr i liczba parzytych cyfr się zgadza wyświetla komunikat
            echo "Ta liczba $check ma wszystkie cyfry parzyste<br>";
        }
    }
}