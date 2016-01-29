<!--Zadanie 1. Tworzenie bazy danych.
Stwórz nową bazę danych o nazwie „cwiczenia”. Napisz skrypt php który
stworzy połączenie do tej bazy danych.-->
<?php
$servername = "localhost";
$username = "root";
$password = "coderslab";
$baseName = "cwiczenia";
//tworzenie połączenia
$conn = new mysqli($servername, $username, $password, $basename);

//sprawdzenie czy polączenie się udało
if($conn->connect_error){
    die("Polaczenie nieudane. Blad: " . $conn->connect_error);
}
echo "Polaczenie udane.";

//tworzenie bazy danych
$result = $conn->query("CREATE DATABASE test3");

//Niszczymy połączenie
$conn->close();
$conn = null;

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>