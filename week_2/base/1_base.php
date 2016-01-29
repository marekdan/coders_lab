<!--Zadanie 1. Import bazy danych.
Stwórz nową bazę danych o nazwie kino. Zaimportuj do niej dane z pliku
kino.sql.
Są to takie same tabele jakie tworzyliście wczoraj (brakuje tylko tabeli
płatności) – są po prostu powypełniane dużą ilością danych.-->
<?php
$servername = "localhost";
$username = "root";
$password = "coderslab";
$baseName = "kino_1";
$conn = new mysqli($servername, $username, $password, $baseName);
