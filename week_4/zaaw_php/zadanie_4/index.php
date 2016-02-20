<?php

//zadanie 4
function showMail($email) {

    //imie
    $nameSurUp = explode('.', $email);
    $name = ucwords($nameSurUp[0]);

    //nazwisko
    $posDot = strpos($email, '.');
    $posMonkey = strpos($email, '@');
    $surname = substr($email, $posDot + 1, $posMonkey - $posDot - 1);
    $surname = ucwords($surname);

    //pierwsza litera imienia duża
    $nameF = $name[0];

    //pierwsza litera naziwska
    $surnameF = $surname[0];

    //firma
    $posDotTwo = strpos($email, '.', $posDot);
    $company = substr($email, $posMonkey+1, $posDotTwo);
    $companyU = strtoupper($company);

    echo '1. ' . $name . ' ' . $surname . '<br>';

    echo '2. ' . $companyU . ' ' . $nameF . '.' . $surname . '<br>';

    echo '3. ' . $nameF . '.' . $surnameF;

    //zadanie 4b
    $aliasOne = 'firma.pl';
    $aliasTwo = 'poczta.firma.pl';

    //pierwsza litera imienia mała
    $nameL = strtolower($name[0]);

    //nazwisko małe
    $surnameL = strtolower($surname);

    //alias 1
    echo '<br>4. ' . $nameL . '.' . $surnameL . '<br>';

    //alias 2


}

$email = 'marek.danilowicz@firma.com.pl';
showMail($email);



