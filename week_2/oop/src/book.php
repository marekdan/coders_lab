<?php
class Book{
    protected $name = "Unknown";
    protected $author;
    protected $ISBNNumber;
    protected $price;
    protected $bookmarks;

    public function __construct($newName, $newAuthor, $newNum, $newPrice){
        $this->setName($newName);
        $this->setAuthor($newAuthor);
        $this->setISBNNumber($newNum);
        $this->setPrice($newPrice);

        $this->bookmarks = [];
    }

    public function addBookmark(Bookmark $newBookmark){
        $this->bookmarks[] = $newBookmark;
    }

    public function __destruct(){
        echo "Uruchomiony zostal destruktor";
    }

    public function __clone(){ //samo clone plytkie koopiowanie
        echo "Clone book <br>"; //glebokie kopiowanie
        $tempArray = [];
        foreach($this->bookmarks as $bMark){
            $tempArray[] = clone $bMark;
        }
        $this->bookmarks = $tempArray;
    }

    public function setName($newName){
        $this->name = $newName;
    }

    public function setAuthor($newAuthor){
        $this->author = $newAuthor;
    }

    public function setISBNNumber($newNum){
        $this->ISBNNumber = $newNum;
    }

    public function setPrice($newPrice){
        $this->price = $newPrice;
    }

    public function printBookInfo(){
        echo "<br>";
        echo "<h1>{$this->name} </h1>";
        echo "Author: {$this->author} <br>";
        echo "ISBN Number: {$this->ISBNNumber} <br>";
        echo "Cena: {$this->price}";

        foreach($this->bookmarks as $bMark){
            $bMark->showInfo();
        }
    }
}
