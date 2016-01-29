<!--Zadanie 4. Wpisywanie danych.
Napisz zapytania SQL które:
 Wybiorą wszystkie filmy zaczynające się na literę W
 Wybiorą wszystkie bilety na których cena jest większa od 15.30
 Wybiorą wszystkie bilety na których ilość jest większa od 3
 Wybiorą wszystkie filmy które mają rating większy niż 6.5-->
<?php
$servername = "localhost";
$username = "root";
$password = "coderslab";
$baseName = "cwiczenia";
$conn = new mysqli($servername, $username, $password, $baseName);

//zapytanie o filmy na w
$sql = ("SELECT * FROM Film WHERE name LIKE 'W%'");
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "Filmy na w";
    //wypisz dane
    while($row = $result->fetch_assoc()){
        foreach($row as $element){
            var_dump($element);
        }
        echo ("<br>");
    }
}
else{
    echo "brak wyników";
}

//zapytanie o rating > 6.5
echo "<hr>";
$sql = "SELECT * FROM Film WHERE rating > 6.5 ";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "Filmy z ratingiem > 6.5";
    //wypisz dane
    while($row = $result->fetch_assoc()){
        foreach($row as $element){
            var_dump($element);
        }
    }
}
else{
    echo "brak wyników";

}

//zapytanie o bilety cena > 15.30
echo "<hr>";
$sql = "SELECT * FROM Tickets WHERE price > 15.30 ";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "Filmy z ratingiem > 6.5";
    //wypisz dane
    while($row = $result->fetch_assoc()){
        foreach($row as $element){
            var_dump($element);
        }
    }
}
else{
    echo "brak wyników";

}

//zapytanie o bilety ilość > 3
echo "<hr>";
$sql = "SELECT * FROM Tickets WHERE quantity > 3";
$result = $conn->query($sql);

if($result->num_rows > 0){
    echo "Filmy z ratingiem > 6.5";
    //wypisz dane
    while($row = $result->fetch_assoc()){
        foreach($row as $element){
            var_dump($element);
        }
    }
}
else{
    echo "brak wyników";

}
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>