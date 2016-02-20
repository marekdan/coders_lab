<html>
<head>

</head>
<body>
<form method="POST">
    <label>
        Emial:
        <input type="text" name="mail">
        <br>
        Url:
        <input type="text" name="name">
        <br>
        Password:
        <input type="password" name="pass">
        <br>
        IP:
        <input type="text" name="ip">
        <br>
        <input type="submit" value="Zatwierdz">
    </label>
</form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //$password = $_POST['pass'];
    $password = '12345678901Aa';

    //$email = $_POST['mail'];
    $email = 'marek@cos.pl';

    //$url = $_POST['name'];
    $url = 'http://php.net/manual/en/function.fpassthru.php';

    //$ip = $_POST['ip'];
    $ip = '79.188.194.19';

    function checkPass($password, $email, $url, $ip) {
        echo strlen($password) . '<br>';
        if (preg_match('#.{10,15}#', $password)) {
            if (preg_match('#[a-z]+#', $password)) {
                if (preg_match('#[A-Z]+#', $password)) {
                    if (!preg_match('#[a-z][a-z]|[A-Z][A-Z]#', $password)) {
                        echo 'Haslo prawidlowe<br>';
                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            echo "Emial poprawny<br>";
                            if (filter_var($url, FILTER_VALIDATE_URL)) {
                                echo "URL poprawny<br>";
                                if (filter_var($ip, FILTER_VALIDATE_IP)) {
                                    echo "IP poprawny<br>";
                                }
                                else {
                                    echo 'IP niepoprawne';
                                }
                            }
                            else {
                                echo 'bledny url<br>';
                            }
                        }
                        else {
                            echo 'bledny email<br>';
                        }
                    }
                    else {
                        throw new Exception('blad 4<br>');
                    }
                }
                else {
                    throw new Exception('blad 3<br>');
                }
            }
            else {
                throw new Exception('blad 2<br>');
            }
        }
        else {
            throw new Exception('blad 1<br>');
        }
    }

    checkPass($password, $email, $url, $ip);

}


//
//    try {
//        checkPass($password);
//    } catch (Exception $e) {
//        echo 'Cought exception';
//    } finally {
//        echo 'Finnaly';
//    }
//}