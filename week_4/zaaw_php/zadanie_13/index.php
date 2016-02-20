<?php

$getData = file_get_contents('https://dl.dropboxusercontent.com/u/19244701/coderlab_z13.json');
$data = json_decode($getData);

foreach ($data as $ele) {
    echo 'Name: ' . $ele['name'];
}


//$json = file_get_contents('https://dl.dropboxusercontent.com/u/19244701/coderlab_z13.json');
//
//$decoded = json_decode($json, true);
//foreach ($decoded as $person) {
//    echo 'Name: ' . $person['name']['first'] . ' ' . $person['name']['last'] . '<br>';
//    echo 'Przyjaciele:<br>';
//    foreach ($person['friends'] as $friend) {
//        echo $friend['name'] . '<br>';
//    }
//    echo '<hr>';
//}