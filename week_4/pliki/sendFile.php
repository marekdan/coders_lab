<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //nazwa pliku
    $filename = $_FILES['fileOne']['name'];

    //nazwa md5
    $md = md5('$filename');

    //dzisiejsza data
    $today = date('d-m-Y');

    //tworzenie katalogu z dzisiejszej daty
    $currentFolder = dirname(__FILE__);
    if (!(is_dir($today))) {
        mkdir($currentFolder . "/" . $today);
        echo 'folder z dzis utworzony <br>';
    }
    else {
        echo 'folder z dzis juz istnieje <br>';
    }

    //tworzenie katalogu z 2 pierwszych znaków md5
    $md5Dir = substr($md, 0, 2);
    if (!(is_dir($currentFolder . "/" . $today . "/" . $md5Dir))) {
        mkdir($currentFolder . '/' . $today . '/' . $md5Dir);
        echo 'folder z md5 poczatek utworzony<br>';
    }
    else {
        echo 'folder z md5 poczatek instnieje<br>';
    }

    //tworzenie katalogu z 2 ostatnich znaków md5
    $md5DirEnd = substr($md, -2);
    if (!(is_dir($currentFolder . "/" . $today . "/" . $md5Dir . "/" . $md5DirEnd))) {
        mkdir($currentFolder . "/" . $today . "/" . $md5Dir . "/" . $md5DirEnd);
        echo 'folder z md5 koniec utworzony<br>';
    }
    else {
        echo 'folder z md5 koniec instnieje<br>';
    }

    $uploaddir = $currentFolder . "/" . $today . "/" . $md5Dir . "/" . $md5DirEnd . '/';
    $uploadfile = $uploaddir . $_FILES['fileOne']['name'];

    if (move_uploaded_file($_FILES['fileOne']['tmp_name'], $uploadfile)) {
        echo "sukces <br>";
        $b64location = base64_encode($uploadfile);
        echo '<a href="showImg.php?filelocation=' . $b64location . '" target="_blank">POKAŻ PLIK</a>';
    }
    else {
        echo "porazka<br>";
    }






    //alternatywa
    /*
        $filename = $_FILES['fileOne']['name'];
        $md = md5('$filename');
        $today = date('d-m-Y');
        $currentFolder = dirname(__FILE__);
        $md5Dir = substr($md, 0, 2);
        $md5DirEnd = substr($md, -2);

        if (!(is_dir($currentFolder . "/" . $today . "/" . $md5Dir . "/" . $md5DirEnd, true, 0777))) {
            mkdir($currentFolder . "/" . $today . "/" . $md5Dir . "/" . $md5DirEnd);
            echo 'folder z md5 koniec utworzony<br>';
        }
        else {
            echo 'folder z md5 koniec instnieje<br>';
        }

        $uploaddir = $currentFolder . "/" . $today . "/" . $md5Dir . "/" . $md5DirEnd . '/';
        $uploadfile = $uploaddir . $_FILES['fileOne']['name'];

        if (move_uploaded_file($_FILES['fileOne']['tmp_name'], $uploadfile)) {

            echo "sukces <br>";
        }
        else {
            echo "porazka<br>";
        }
    */

}