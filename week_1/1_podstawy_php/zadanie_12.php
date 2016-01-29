<!--Napisz program który napisze tabliczkę mnożenia dla podanej zmiennej $n.
Np., dla $n = 3 wynik będzie wyglądać następująco:
1 x 1 = 1 1 x 2 = 2 1 x 3 = 3
2 x 1 = 2 2 x 2 = 4 2 x 3 = 6
3 x 1 = 3 3 x 2 = 6 3 x 3 = 9
+ramki-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<?php

$n = 3;
echo ("<table border='2px solid black' cellpadding='10px' cellspacing='0px'>");
for($i =1; $i <= $n; $i++){
    echo ("<tr>");
    for($j = 1; $j <= $n; $j++){
        echo("<td>$i x $j = " . $i*$j . "</td> ");
    }
    echo ("</tr>");
}
echo ("</table>");

