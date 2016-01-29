<?php

session_start();
if(!isset($_SESSION['wartoscKoszyka'])) {
    $_SESSION['wartoscKoszyka'] = 156.99;
}

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>

