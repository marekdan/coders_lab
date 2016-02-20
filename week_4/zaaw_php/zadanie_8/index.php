<?php
//• Ma między 10 a 15 znaków
//• Ma min. jedną małą literę jedną
//• Ma min. jedną wielką literę
//• Nie zawiera dwóch wielkich lub dwóch małych liter pod rząd

$password = 'A1234567a890a';

if (preg_match('#^.{10,15}$#', $password)) {
    echo 'tak 1 <br>';

    if (preg_match('#[a-z]+#', $password)) {
        echo 'tak 2 <br>';

        if (preg_match('#[A-Z]+#', $password)) {
            echo 'tak 3 <br>';

            if(!preg_match('#[a-z][a-z]|[A-Z][A-Z]#', $password)){
                echo 'tak 4';
            }
            else{
                echo 'nie 4';
            }
        }
        else {
            echo 'nie 3 <br>';
        }
    }
    else {
        echo 'nie 2 <br>';
    }
}
else {
    echo 'nie 1 <br>';
}