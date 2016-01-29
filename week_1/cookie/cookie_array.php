<?php

$klient = array(
    "imie"  => "Marek",
    "nazwisko" => "Danilowicz",
    "miasto" => "warszawa"
);

if(!isset($_COOKIE['klient'])) {
    setcookie('klient', serialize($klient), time()+3600*24);
    var_dump($klient);
    var_dump(serialize($klient));
    echo 'ciasteczko utworzone';
}
if(isset($_COOKIE['klient'])) {
    var_dump($_COOKIE['klient']);
    echo ("<br>");
    var_dump(unserialize($_COOKIE["klient"]));
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
