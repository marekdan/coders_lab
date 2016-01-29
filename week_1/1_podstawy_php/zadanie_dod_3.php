<!--Liczba doskonałą nazywamy liczbę która jest sumą wszystkich swoich dzielników. Jest to np.
6, ponieważ 6 = 3 + 2 + 1.
Liczbą niekompletną nazywamy liczbę która jest większa od sumy wszystkich swoich
dzielników. Jest to np. 10 (1+2+5=8 < 10).
Napisz program który wypisze wszystkie liczby do wcześniej zdefiniowanej liczby $x i
określi czy jest to liczba doskonała, niekompletna czy żadna z nich.-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<?php

function doskonala($number){
    $s = 0;
    for($i = 1; $i <= $number / 2; $i++){
        if($number % $i == 0 ){
            $s += $i;
        }
    }
    return $s;
}

$number = 6;
if($number == doskonala($number)){
    echo (" Liczba $number jest doskonała? Tak");
}
elseif($number < doskonala($number)){
    echo ("Liczba $number jest niekompletna");
}
else{
    echo (" Liczba $number jest doskonała? Nie");
}