<!--
Zadanie 2.b. Zmiana tablicy z danymi.
Dodaj do tablicy Film kolumnę która będzie trzymała rating danego filmu (float
z zakresu 0.0-10.0).
-->
<?php
$servername = "localhost";
$username = "root";
$password = "coderslab";
$baseName = "cwiczenia";
$conn = new mysqli($servername, $username, $password, $baseName);

$sql = "ALTER TABLE kino
        ADD rating FLOAT";

$result = $conn->query($sql);