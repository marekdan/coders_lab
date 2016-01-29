<!--Napisz skrypt który dla 3 mziennych sorawdzi czy
należą do trójki pitagroejskiej-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

//sposób 1
$a = 3;
$b = 4;
$c = 6;
if(($a * $a + $b * $b) == $c * $c){
    echo ("Liczby należą do trójki pitagorejskiej");
}
else{
    echo ("Liczby nie należą do trójki pitagorejskiej");
}

//sposób 2
$a = 3;
$b = 4;
$c = 5;
echo (($a * $a + $b* $b) == $c * $c) ? "<br>Nalezą do trójki oitagorejskiej" : "<br>Nie należą należą do trójki pitagorejskiej" ;