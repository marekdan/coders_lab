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

session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $login = $_POST["login"];
    $haslo = $_POST["haslo"];
    if($login == "qwe" && $haslo == "123"){
        $_SESSION['zalogowany'] = true;
        header("location: index_2.php");
    }
}

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>
<form action="login.php" method="POST">
    <fieldset>
        <p>
            <label>
                <input type="text" name="login">
            </label>
        </p>
        <p>
            <label>
                <input type="text" name="haslo">
            </label>
        </p>
        <input type="submit" value="Zatwierdź">
    </fieldset>
</form>
</body>
</html>