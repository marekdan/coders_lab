<?php

include('vendor/autoload.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $mail = new PHPMailer();

    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (is_file($_FILES['fileOne']['temp_name'])) {
        $file = $_FILES['fileOne']['temp_name'];
        $currentFolder = dirname(__FILE__);
        $uploadDir = $currentFolder . '/';
        $uploadFile = $uploadDir . $_FILES['fileOne']['name'];

        if (move_uploaded_file($_FILES['fileOne']['tmp_name'], $uploadFile)) {
            echo "plik dodany <br>";
        }
        else {
            echo 'plik nie dodany';
        }
    }

    $mail->addAddress($email);
    $mail->Subject = 'temat';
    $mail->Body = $message;
    if (isset($uploadFile)) {
        $mail->addAttachment($uploadFile);
    }

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
    else {
        echo 'Message has been sent';
    }

}