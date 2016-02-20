<?php

require_once('User.php');

class Admin extends User {

    public function checkLogin($password) {
        $passwordFromDb = '123';
        if (strlen($password) >= 10) {
            if ($password == $passwordFromDb && $ip = '192.162.1.1') {
                return true;
            }
        }

        return false;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

}