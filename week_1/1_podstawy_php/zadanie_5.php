<!--Napisz program, który wystawi ocenę z testu.
0 - 39 pkt - ocena niedostateczna
40 - 54 pkt - ocena dopuszczająca
55 - 69 pkt - ocena dostateczna
70 - 84 pkt - ocena dobra
85 - 98 pkt - ocena bardzo dobra
99 - 100 pkt - ocena celująca-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<?php

$points = 99; //punkty z testu
if($points < 0){
    echo ('Źle wprowadzone punkty');
}
elseif($points <= 39){
    echo ('Ocena niedostateczna');
}
elseif($points <= 54){
    echo ('Ocena dopuszczająca');
}
elseif($points <= 69){
    echo ('Ocena dostateczna');
}
elseif($points <= 84){
    echo ('Ocena dobra');
}
elseif($points <= 98){
    echo ('Ocena bardzo dobra');
}
elseif($points <= 99){
    echo ('Ocena celująca');
}
else{
    echo ('Coś poszło nie tak');
}