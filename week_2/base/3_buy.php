<!--
Napisz stronę na której można kupić bilet i wybrać sposób płatności (może go
nie być).
-->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>
<form method="POST">
    <fieldset>
        <label>Ilość biletów:
            <input type="text" name="amount">
        </label>
        <label>Platność:
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

$amount = null;
$payment = null;

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    //ile biletów
    $amount = $_POST["amount"];
    $price = rand(5,40);

    if($amount != null){
        $sql = "INSERT INTO Tickets(quantity, price) VALUES('$amount', '$price')";
        $result = $conn->query($sql);
    }

    //------------------sposob platnosci------------------------------------
    $last_id = $conn->insert_id;
    $payment = $_POST["payment"];
    $date = date('Y-m-d');

    if($payment != null){
        $sql = "INSERT INTO Payments(id, type, p_date) VALUES('$last_id', '$payment', '$date')";
        $result = $conn->query($sql);
    }
}

?>

