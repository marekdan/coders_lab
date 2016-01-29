<?php

session_start();
if($_SESSION['zalogowany'] == true){
    //$log = "tak";
    echo ("Jesteś zalogowany");
    echo("<a href=wyloguj.php> Wyloguj</a>");
}
else{
    //$log = "nie";
    echo ("Jesteś NIE zalogowany");
    echo("<a href=login.php> Zaloguj </a>");
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>
<body>
<!--    --><?php
//    if($log == "tak"){
//        echo ("Jesteś zalogowany");
//        echo("<a href=wyloguj.php> Wyloguj</a>");
//    }
//    else{
//        echo ("Jesteś NIE zalogowany");
//        echo("<a href=login.php> Zaloguj </a>");
//    }
//    ?>
</body>
</html>
