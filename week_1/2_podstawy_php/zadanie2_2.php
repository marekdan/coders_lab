<!--Oblicz pole i obwód prostokąta
o bokach $bokA $BokB-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

$bokA = 5;
$bokB = 5;
$pAB = $bokA * $bokB;
$obAB = $bokA * 2 + $bokB *2;
echo ("Pole prostokata o bokach $bokA cm i $bokB cm wynosi: $pAB<br>");
echo ("Obwód prostokąta o bokach $bokA cm i $bokB cm wynosi: $obAB");