<!--Napisz program, który liczy wartość x!. gdzie ! oznacza silnię a x jest zmienną.
Użyj do tego obu znanych Ci pętli.-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<?php

//sposób 1
$x = 6; //wybierz liczbę do wyliczenia silni
$s = 1; //wynik silni
for($i = 1; $i <= $x; $i++){
    $s = $s * $i;
}
echo ("Wynik silni (sposób 1) to: $s <br>");

//sposób 2
$x = 6; //wybierz liczbę do wyliczenia silni
$s = 1; //suma silni
$i = 1; //licznik i mnożnik silni
while($i <= $x){
    $s = $s * $i;
    $i++;
}
echo ("Wynik silni (sposób 2) to $s");