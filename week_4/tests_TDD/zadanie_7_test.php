<?php

//zadanie 7 napisz test sprawdzajacy czy podana zmienna jest obiektem danej klasy

class User{
}

class You{
}

class isObjectTest extends PHPUnit_Framework_TestCase{

    public function testIsObject(){

        $user = new You;
        $this->assertInstanceOf('User', $user);
        $this->assertInstanceOf('You', $user);
    }
}

