<?php
if(isset($_COOKIE['jezyk'])) {
    setcookie('jezyk', 'en', time()-3600*24);
    echo ('ciasteczko język usuniete');
}
if(isset($_COOKIE['jezyk'])) {
    var_dump($_COOKIE['jezyk']);
}
else{
    echo ("Ciasteczko nie istnieje");
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="utf-8">
</head>