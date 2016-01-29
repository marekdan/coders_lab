<!--Napisz funkcję, która sprawdza czy zmienna przekazana jako pierwszy parametr-->
<!--występuje w tablicy przekazanej jako drui parametr. Jeżeli tak,-->
<!--funkcja powinna zwrócić logiczną prawdę a w trzecim parametrze powinna ustwić index-->
<!--w tablicy pod którym pierwszy raz wystąpiła szukana zmienna.-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

$number = 1; //szukana liczba
$index = -1;
echo ("Elementy tablicy to: ");
for($i = 0; $i < 10; $i ++){
    $tab[$i] = rand(0,9);
    echo($tab[$i] . " ");
}

function find($number, $tab, &$index)
{
    for ($i = 0; $i < 10; $i++)
    {
        if ($tab[$i] == $number)
        {
            $index = $i;
            return true;
        }
    }
    return false;
}
echo ("<br>Szukany element to: $number<br>");
find($number, $tab, $index);
if($index == -1){
    echo ("Liczba nie wystąpiła");
}
else{
    echo ("Index pod którym pierwszy raz wystąpiła liczba to $index");
}
var_dump(find($number, $tab, $index));