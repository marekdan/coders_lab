<?php
//• Ma między 10 a 15 znaków
//• Ma min. jedną małą literę jedną
//• Ma min. jedną wielką literę
//• Nie zawiera dwóch wielkich lub dwóch małych liter pod rząd

$password = '12345678901Aa';

function checkPass($password) {
    echo strlen($password);
    if (preg_match('#.{10,15}#', $password)) {
        if (preg_match('#[a-z]+#', $password)) {
            if (preg_match('#[A-Z]+#', $password)) {
                if (!preg_match('#[a-z][a-z]|[A-Z][A-Z]#', $password)) {
                    echo 'haslo prawidlowe';
                }
                else {
                    throw new Exception('blad 4');
                }
            }
            else {
                throw new Exception('blad 3');
            }
        }
        else {
            throw new Exception('blad 2');
        }
    }
    else {
        throw new Exception('blad 1');
    }
}

//checkPass($password);

try {
    checkPass($password);
} catch (Exception $e) {
    echo 'Cought exception';
} finally {
    echo 'Finnaly';
}