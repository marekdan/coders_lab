<?php
$uploadfile = base64_decode($_GET['filelocation']);
$fp = fopen($uploadfile, 'r');
header("Content-Type: image/png");
fpassthru($fp);