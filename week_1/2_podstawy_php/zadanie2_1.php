<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
//przeliczanie cm na cale

$cm = 7; // ile cm
define('CAL', 2.54);
$w = $cm / CAL;
echo("$cm cm to $w cali");