<!--Napisz skrypt wyświetlający formularz z polem tekstowym,
checkboxem oraz przyciskiem zatwierdzającym
Skrypt ma sprawdzać czy wpisany przez użytkownika
tekst zawiera wulgaryzmy - jeżeli tak, powinien zastąpić je
dowolnymi znakami (np. "cholera, znowu to php" powinien zastąpic
frazą "*****, znowu to php")
Tekst wpisany przez użytkownika powinien być wyświetlany
(w formie ocenzurowanej lub nie)
-->
<?php

echo ("<h1>Twój tekst</h1><br>");

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $zgoda = $_POST["zgoda"];
    if (isset($_POST['zawartosc'])){
        $zawartosc = trim($_POST[zawartosc]);
        if ($zgoda != "on"){
            $zawartosc = str_replace("cholera", "******", $zawartosc);
            echo $zawartosc;
        }
        else{
            echo $zawartosc;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>
<form action="cenzura.php" method="POST">
    <fieldset>
        <p>
            <label>
                <textarea rows="10" cols="80" name="zawartosc"></textarea>
            </label>
        </p>
        <p>
            <label>
                <input type="checkbox" name="zgoda">
                Jestem świadom
            </label>
        </p>
        <input type="submit" value="Zatwierdź">
    </fieldset>
</form>
<p>
    <?php
    if (isset($zawartosc)){
        echo $zawartosc;
    }
    ?>
</p>
</body>
</html>