<!--Napisz funkcje o nazwie FooBar, przyjmującą jedną zmienną. Funkcja ta ma
wypisywać kolejne liczby, ale:
W miejsce liczb podzielnych przez 3 wypisywać Foo
W miejsce liczb podzielnych przez 5 wypisywać Bar
W miejsce liczb podzielnych przez 3 i 5 wypisywać FOOBAR
Np. Dla parametru $x = 15 wynik ma być:
12Foo4BarFoo78FooBar11Foo1314FOOBAR-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<?php

$x = 15; //do jakiej liczby ma sprawdzać
for($i =1; $i <= $x; $i++){
    if($i % 15 == 0){
        echo ("FOOBAR");
    }
    else{
        if($i % 3 == 0){
            echo ("Foo");
        }
        elseif($i % 5 == 0){
            echo ("Bar");
        }
        else{
            echo ("$i");
        }
    }
}