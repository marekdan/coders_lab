<!--Program dnia pewnego seminarium wygląda następująco:
8-11 wykłady
12-13 dyskusje
14 obiad
15-18 prelekcje
19 kolacja-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

$godzina = 11; //wybierz godzine
switch($godzina){
    case 8:
    case 9:
    case 10:
    case 11:
        echo("Wykłady<br>");
    case 12:
    case 13:
        echo ("Dyskusje<br>");
    case 14:
        echo ("Obiad<br>");
    case 15:
    case 16:
    case 17:
    case 18:
        echo("Prelekcje<br>");
    case 19:
        echo("Kolacja<br>");
        break;
    default:
        echo ("Nie masz już więcej zajęć");
}
