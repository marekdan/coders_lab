<?php

session_start();
if(isset($_SESSION['wartoscKoszyka'])) {
    echo 'Wartość koszyka: '.$_SESSION['wartoscKoszyka'];
}

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>