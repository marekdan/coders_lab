<!--
Następnie stronę na której możemy pokazać wszystkie bilety opłacona
za pomocą:
 karty,
 gotówki,
 przelewu
 nieopłacone
-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>
<form method="POST">
    <fieldset>
        <label>Bilety zakupione jak chcesz wyświetlić:
            <select name="payment">
                <option value="Karta">Karta</option>
                <option value="Gotowka">Gotówka</option>
                <option value="Przelew">Przelew</option>
                <option value="Nieoplacaony">Nieopłacony</option>
            </select>
        </label>
        <input type="submit" value="Zatwierdź">
    </fieldset>
</form>
</body>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "coderslab";
$baseName = "kino_1";
$conn = new mysqli($servername, $username, $password, $baseName);

$payment = null;

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $payment = $_POST["payment"];

    $sql = "SELECT * FROM Tickets
            JOIN Payments
            ON Tickets.id=Payments.id
            WHERE Payments.type='$payment'";
    $result = $conn->query($sql);

    echo "
    <table border='solid black 1px' >
    <thead>
        <tr>
            <td>ID</td>
            <td>Ilość</td>
            <td>Cena</td>
            <td>Metoda</td>
            <td>Data</td>
</tr>
</thead>";
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        foreach($row as $element){
            echo "<td>$element </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}