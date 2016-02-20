<?php

abstract class User {

    public $username;
    public $password;

    abstract public function checkLogin($password);

    abstract public function setPassword($password);

    final public function login($username, $password) {
        $this->checkLogin($password);
    }

}

class Client extends User {

    public function __construct($newName, $newPass) {
        $this->setName($newName);
        $this->setPassword($newPass);
    }

    public function setName($newName) {
        $this->username = $newName;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function checkLogin($password) {
        if ($password == 'password2' && strlen($password) >= 8) {
            return true;
        }

        return false;
    }

}

class UserSet implements Iterator {

    private $amount = array();

    public function add(Client $newUser) {
        $this->amount[] = $newUser;
    }

    public function checkLogin($password) {
        echo 'uzywkownicy: <br>';
        foreach ($this->amount as $ele) {
            if ($password == $ele->password) {
                echo 'nick: ' . $ele->username . '<br>';
            }
        }
    }

    public function next() {
        // TODO: Implement next() method.
    }

    public function valid() {
        // TODO: Implement valid() method.
    }

    public function current() {
        // TODO: Implement current() method.
    }

    public function rewind() {
        // TODO: Implement rewind() method.
    }

    public function key() {
        // TODO: Implement key() method.
    }

}

$allClients = new UserSet();

$Client1 = new Client('qwe', '111');
$Client2 = new Client('asd', '222');
$Client3 = new Client('zxc', '111');

$allClients->add($Client1);
$allClients->add($Client2);
$allClients->add($Client3);

$allClients->checkLogin('111');