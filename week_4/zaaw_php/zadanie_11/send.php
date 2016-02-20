<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $subject = 'temat';

    $headers =
        'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/';

    $check = mail($email, $subject, $message, $headers);

    if ($check == true) {
        echo 'wyslany';
    }
    else {
        echo 'nie wyslany';
    }
}