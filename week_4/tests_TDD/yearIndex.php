<html>
<head>
</head>
<body>
<form method="POST">
    <label>
        <input type="text" name="data">
        <input type="submit" value="Wyslij">
    </label>
</form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$date = intval($_POST['data']);
function checkYear($date) {
if (is_int($date)) {
if($date % 4 == 0 && $date % 100 !== 0 || $date % 400 == 0)
return true;
}
return false;
}

echo checkYear($date);
}