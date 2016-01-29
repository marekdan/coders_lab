<!--Napisz stronę na której można wybrać wszystkie kina które wyświetlają dany film.-->
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
        <label>Jaki film chcesz sprawdzić:
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

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $movie = intval($_POST["Movies"]);

/*    $sql = "SELECT name, adress FROM Cinemas
            WHERE Seance.Cinemas_id = '$movie'";*/

/*    $sql = "SELECT * FROM Seance
            JOIN Movie
            ON Seance.id = '$movie'";*/
    $sql = "SELECT * FROM Cienmas
            JOIN Seance ON Cinemas.id=Seance.Cinemas_id
            JOIN Movies ON Movies.id='$movie'";
            //Seance.Movies_id";


    $wyb = $conn->query($selMovie);

    while ($row = $wyb->fetch_assoc()) {
        //echo $row['name'];
        //echo $row['adress'];
        var_dump($row);
    }
}
?>