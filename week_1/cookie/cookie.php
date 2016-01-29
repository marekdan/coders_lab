<?php

if(!isset($_COOKIE['jezyk'])) {
    echo 'ciasteczko nie istnieje<br>';
    setcookie('jezyk', 'en', time()+3600*24);
    echo 'ciasteczko utworzone';
}
if(isset($_COOKIE['jezyk'])) {
    var_dump($_COOKIE['jezyk']);
}

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
