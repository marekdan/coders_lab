<!--Napisz program, który będzie losował liczbę z zakresu 0-20 aż nie wylosuje
liczby 10. Za każdym razem kiedy wylosuje złą liczbę ma wypisać na ekran „Zła liczba”, a w
chwili wylosowania poprawnej ma wypisać „Poprawna liczba”. Do losowania liczb użyj
funkcji rand (http://php.net/manual/pl/function.rand.php). Wyświetl pod koniec ile razy
zostało przeprowadzone losowanie.-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<?php

$lottery = rand(0,20); //losowana liczba
$i = 1; //licznik
while( $lottery != 10){
    if($lottery != 10){
        echo ('Zła liczba ');
    }
    $lottery = rand(0,20);
    $i++;
}
echo ('<hr>Dobra liczba <br>');
echo ("Losowanie zostało przeprowadzone $i ");
if($i == 1){
    echo ("raz");
}
else{
    echo ("razy");
}