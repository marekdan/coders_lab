<?php

/*
require_once("./src/book.php");

$book1 = new Book("Wiedzmin", "Sapkowski", 4241241241, 44.5);
$xxx = $book1;

var_dump($book1);
var_dump($xxx);

$xxx->setName("xxxx");

var_dump($book1);
var_dump($xxx);

$book1->printBookInfo();
$book2->printBookInfo();
*/

/*
require_once("./src/wektor2d.php");

$myVec1 = new Vector2D(4, 5);
$myVec2 = new Vector2D(7, 3);

echo "Dlugosc v1 = ".$myVec1->getLength()."<br>";
echo "Dlugosc v2 = ".$myVec2->getLength()."<br>";

$myVec1->addVector($myVec2);
*/

/*
require_once("./src/form.php");

$newForm1 = new Form(2, 4, "ziel");
$newForm2 = new Form(5, 6, "czerw");
var_dump($newForm1);
var_dump($newForm2);

$newForm1->display();
echo "Odleglosc to: ";
$newForm1->distance($newForm2);
*/
/*
require_once("./src/form.php");
require_once("./src/wheel.php");
require_once ("./src/cone.php");
$circle1 = new Wheel (2, 2, "red", 5);
$circle2 = new Wheel (5, 3, "blue", 3.5);

$circle1->display();
$circle2->display();

$distance = $circle1->distance($circle2);
echo "Wynik: $distance <br>";

echo "Pole kola 1: ".$circle1->getArea()."<br>";
echo "Ob 2: ".$circle2->getPerimeter()."<br>";
*/

/*
require_once("./src/form.php");
require_once("./src/wheel.php");
require_once ("./src/cone.php");
require_once ("./src/roller.php");

$cone1 = new Cone(2, 3, "yellow", 5, 10);
$cone2 = new Cone(2, 1, "black", 2, 12);

echo "<hr>Display cone 1: <br>";
$cone1->display();
echo "<hr>Display cone 2: <br>";
$cone2->display();

echo "<hr>Volume cone 1: <br>";
echo "Objetosc 1: ".$cone1->volume()."<br>";
echo "<hr>Volume cone 2: <br>";
echo "Objetosc 2: ".$cone2->volume()."<br>";

echo "<hr><hr>";

$roller1 = new Roller(2, 3, "yellow", 5, 10);
$roller2 = new Roller(2, 1, "black", 2, 12);

echo "<hr>Display roller 1: <br>";
$roller1->display();
echo "<hr>Display roller 2: <br>";
$roller2->display();

echo "<hr>Volume roller 1: <br>";
echo "Objetosc 1: ".$roller1->volume()."<br>";
echo "<hr>Volume roller 1: <br>";
echo "Objetosc 2: ".$roller2->volume()."<br>";
*/

//require_once ("./src/singleton");

require_once ("./src/bookmark.php");
require_once ("./src/book.php");

$book1 = new Book("Wiedzmin", "Sapkowski", 4241241241, 44.5);

$bookMark1 = new Bookmark(40, "mark1 for wiedxmin");
$book1->addBookmark($bookMark1);

$bookMark2 = new Bookmark(70, "marek2 for wiedxmin");
$book1-> addBookmark($bookMark2);

$book1->printBookInfo();

var_dump($book1);

$book2 = clone $book1;
$book2->setPrice(40000);
var_dump($book2);