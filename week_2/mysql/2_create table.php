<!--Zadanie 2. Tworzenie tabel z danymi.
W bazie danych o nazwie „cwiczenia” stwórz następujące tabele:
 Kino: id: int, name: string, address: string
 Film: id:int, name: string, opis: string
 Bilet: id: int, ilość: int, cena:float
 Płatność: id: int, typ: string (“Przelew”, “Gotówka”, “Karta”), data: date
Pamiętaj o tym żeby założyć odpowiednie atrybuty na pola (np.: każde ID
powinno być kluczem głównym, być automatycznie numerowane).-->
<?php
$servername = "localhost";
$username = "root";
$password = "coderslab";
$baseName = "cwiczenia";
$conn = new mysqli($servername, $username, $password, $baseName);

$sql = "CREATE TABLE Kino(
id int AUTO_INCREMENT,
name varchar(255),
adres varchar(255),
PRIMARY KEY(id))";
$result = $conn->query($sql);

$sql = "CREATE TABLE Film(
id int AUTO_INCREMENT,
name varchar(255),
opis varchar(255) UNIQUE,
PRIMARY KEY(id))";
$result = $conn->query($sql);

$sql = "CREATE TABLE Bilet(
id int AUTO_INCREMENT,
ilosc int,
cena float,
PRIMARY KEY(id))";
$result = $conn->query($sql);

$sql = "CREATE TABLE Platnosc(
id int AUTO_INCREMENT,
typ varchar(255),
data date,
PRIMARY KEY(id))";
$result = $conn->query($sql);

if($result === true){
    echo "Tabela została stworzona poprawnie";
}
else{
    echo "Błąd podczas tworzenia tabeli: " . $conn->error;
}

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>