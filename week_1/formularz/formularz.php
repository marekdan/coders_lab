<?php
$imie = '';
$drugieImie = '';
$nazwisko = '';
$przedzialWiekowy = '';
$komunikat = '';
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    //wywołanie metodą POST - formularz został wysłany
    if(isset($_POST['imie']) && strlen(trim($_POST['imie'])) > 1){
        $imie = trim($_POST['imie']); }
    $drugieImie = trim($_POST['drugieImie']);

    if(isset($_POST['nazwisko']) && strlen(trim($_POST['nazwisko'])) > 1) {
        $nazwisko = trim($_POST['nazwisko']);
    }
    if($_POST['przedzialWiekowy'] != 0) {
        $przedzialWiekowy = $_POST['przedzialWiekowy'];
    }
    if($imie && $nazwisko && $przedzialWiekowy) {
        echo 'Poprawanie wypelniony formularz';
        $imie = '';
        $nazwisko = '';
    }
    else {
        echo 'Wypelnij ponownie';
    }
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<form action="formularz.php" method="POST">
    <fieldset>
        <legend>Twoje dane</legend>
        <p>
            <label>
                Imie:
                <input type="text" name="imie" placeholder="Podaj swoje imie" value="<?php echo $imie; ?>">
            </label>
        </p>
        <p>
            <label>
                Nazwisko:
                <input type="text" name="nazwisko" placeholder="Podaj swoje nazwisko" value="<?php echo $nazwisko; ?>">
            </label>
        </p>
        <p>
            <label> Drugie imie:<input type="text" name="drugieImie" placeholder="Podaj swoje drugie imie" <?php echo $drugieImie; ?>></label>
        </p>
        <p>
            <label> Przedział wiekowy
                <select name="przedzialWiekowy">
                    <option value="0">wybierz</option>
                    <option value="10-30" <?php echo $przedzialWiekowy == "10-30" ? "selected" : ""?> >10 - 30 lat</option>
                    <option value="31-60" <?php echo $przedzialWiekowy == "31-60" ? "selected" : ""?>>31 - 60 lat</option>
                    <option value="61-90" <?php echo $przedzialWiekowy == "61-90" ? "selected" : ""?>>61 - 90 lat</option>
                </select>
            </label>
        </p>
        <p>
            <label>
                <textarea rows="10" cols="80" name="zawartosc" placeholder="pod"></textarea>
            </label>
        </p>
        <p>
            <label>
                <input type="checkbox" name="zgoda" checked />
                Zgadzam się
            </label>
        </p>
        <input type="submit" value="Wyslij">
    </fieldset>
</form>

