<?php

include('vendor/autoload.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $mail = new PHPMailer();

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mail->addAddress($email);
    $mail->Subject = 'temat';
    $mail->Body = $message;

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
    else {
        echo 'Message has been sent';
    }

}