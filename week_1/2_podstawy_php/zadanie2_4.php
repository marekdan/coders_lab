<!--Zakładamy, że $a <= $b <= $c. Napisz skrypt, który będzie sprawdzał
czy można zbudowac trójkąt. Jeżeli można to jaki?-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

//spoób 1
$a = 7;
$b = 7;
$c = 5;
if(($a+$b) > $c)
{
    if ($a == $b)
    {
        if ($b == $c)
        {
            echo("Można zbudować trójkąt równoboczny");
        }
        else
        {
            echo("To może być trójkąt równorammienny");
        }
    }
    else{
        echo("Można zbudować różnoboczny");
    }
}
else{
    echo ("Nie można zbudować trójkąta");
}

//sposob 2
$a = 7;
$b = 7;
$c = 15;
echo ("<br>");
echo (($a+$b) > $c ? (($a == $b) ? (($b == $c) ? "Równoboczny" : "Równorammienny") : "Róznoboczny") : "Nie da się zbudować trójkąta");
