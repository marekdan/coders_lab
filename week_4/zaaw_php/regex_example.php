<?php

$str = 'jan@kowalski';
$result = preg_match('#[a-z]+@[a-z]#', $str);
var_dump($result);

$str = 'jan@kowalski';
$result = preg_match('#([a-z]+)@([a-z]+)#', $str, $m);
var_dump($m);