<!--Zadanie 3. Wpisywanie danych.
Napisz zapytania SQL żeby wypełnić każdą tabelkę co najmniej kilkoma
wpisami.-->
<?php
$servername = "localhost";
$username = "root";
$password = "coderslab";
$baseName = "cwiczenia";
$conn = new mysqli($servername, $username, $password, $baseName);

$name = null;
$opis = null;
$rating = null;

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $name = $_POST["name"];
    $opis = $_POST["opis"];
    $rating = $_POST["rating"];

    if($name != null && $opis != null && $rating != null){
        $sql = "INSERT INTO Film(name, opis, rating) VALUES('$name', '$opis', '$rating')";
        $result = $conn->query($sql);
    }
    else{
        echo "<br>Podaj wszystkie dane! <br>";
    }
}

$sql = "SELECT id, name, opis, rating FROM Film";
$result = $conn->query($sql);

if($result->num_rows > 0){

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

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<form action="4_add.php" method="POST">
    <fieldset>
        <p>
            <label>Nazwa filmu:
                <input type="text" name="name">
            </label>
        </p>
        <p>
            <label>Opis:
                <input type="text" name="opis">
            </label>
        </p>
        <p>
            <label>Ocena:
                <input type="text" name="rating">
            </label>
        </p>
        <input type="submit" value="Dodaj">
    </fieldset>
</form>