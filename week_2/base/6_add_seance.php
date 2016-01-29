<!--
Napisz stronę na której można kupić stworzyć nowy seans.
-->
<?php

$servername = "localhost";
$username = "root";
$password = "coderslab";
$baseName = "kino_1";
$conn = new mysqli($servername, $username, $password, $baseName);


?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>
<form method="POST">
    <fieldset>
        <label>Jaki seans chcesz dodać:
            <select name="Cinemas">
                <?php
                $selCinema = "SELECT name, id FROM Cinemas";
                $result = $conn->query($selCinema);

                while($row = $result->fetch_assoc()){
                    echo '<option value="' . $row['id'] . '" >';
                    echo $row['name'] . '</option>';
                }
                ?>
            </select>

            <select name="Movies">
                <?php
                $selMovie = "SELECT name, id FROM Movies";
                $result = $conn->query($selMovie);

                while($row = $result->fetch_assoc()){
                    echo '<option value="' . $row['id'] . '" >';
                    echo $row['name'] . '</option>';
                }
                ?>
            </select>
        </label>
        <input type="submit" value="Zatwierdź">
    </fieldset>
</form>
</body>
</html>

<?php

$payment = null;

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $movie = $_POST['Movies'];
    $cinema = $_POST['Cinemas'];

    $sql = "INSERT INTO Seance
            (Cinemas_id, Movies_id)
             VALUES ('$cinema', '$movie' )";

    $conn->query($sql);
}