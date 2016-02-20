<?php

abstract class User {

    protected $username;
    protected $password;

    abstract public function checkLogin($password);

    abstract public function setPassword($password);

    final public function login($username, $password) {
        $this->checkLogin($password);
    }

}