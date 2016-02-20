<?php

require_once('User.php');

session_start();
$_SESSION['logInCounter'] = 0;

class Client extends User {

    public function checkLogin($password) {
        $passwordFromDb = '123';
        $check = preg_match('#[A-Z]+#', $password);

        if (!($_SESSION['logInCounter'] == 3)) {
            if (strlen($password) >= 8 && $check) {
                if ($password == $passwordFromDb) {
                    echo 'sukces logowania';
                    $_SESSION['logInCounter'] = 0;
                }
                else {
                    echo 'porażka 3';
                    $_SESSION['logInCounter']++;
                }
            }
            else {
                echo 'porażka 2';
                $_SESSION['logInCounter']++;
            }
        }
        else {
            echo 'porażka 1';
        }
    }

    public function setPassword($password) {
        $this->password = $password;
    }
}