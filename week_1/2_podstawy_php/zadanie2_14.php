<!--●Napisz skrypt, który podaną przez użytkownika kwotę
pieniędzy (liczba całkowita) rozmieni na jak najmniejszą
ilość monet i banknotów o nominałach 1, 2, 5, 10 złotych.
● Przykład: 188 zł
– 18 banknotów 10 zł
– 1 moneta 5zł
– 1 moneta 2zł
– 1 moneta 1zł
● W skrypcie należy zdefiniować funkcję, w której zadana
kwota oraz ilości poszczególnych monet są parametrami
funkcji, a wynikiem funkcji jest ilość banknotów
dziesięciozłotowych-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

function rozmiana($kasa, &$jeden, &$dwa, &$piec, &$dziesiec){ //wywolanie funkcji z & przed zmiennymi żeby zmienić ich wartość
    while($kasa >= 10){ //sprawdzenie ile 10
        $kasa -= 10;
        $dziesiec++;
    }
    while($kasa >=5){ //sprawdzenie ile 5
        $kasa -= 5;
        $piec++;
    }
    while($kasa >=2){ //sprawdzenie ile 2
        $kasa -= 2;
        $dwa++;
    }
    while($kasa >=1){ //sprawdzenie ile 1
        $kasa -= 1;
        $jeden++;
    }
    return $dziesiec;
}

$jeden = 0;
$dwa = 0;
$piec = 0;
$kasa = 188;
if($kasa >= 0){
    rozmiana($kasa, $jeden, $dwa, $piec, $dziesiec);
    echo ("Masz tyle $kasa pieniędzy, po rozmianie otrzymasz:<br>");
    echo ("Masz $jeden złotówek<br>");
    echo ("Masz $dwa dwuzłotówek<br>");
    echo ("Masz $piec pięciozłotówek<br>");
    echo ("Masz $dziesiec dziesięciozłotówek<br>");
}
else{
    echo ("Nie podałeś poprawnej kwoty");
}