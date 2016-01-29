<?php


class Bookmark {
    private $page;
    private $desc;

    public function __construct($newPage, $newDesc) {
    $this->page = $newPage;
    $this->desc = $newDesc;
    }

    public function showInfo(){
        echo ("Zakladka na stronie $this->page z opisem $this->desc");
    }
}

?>