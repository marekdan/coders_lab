<?php

$z = new XMLReader();
$getXml = file_get_contents('http://www.cs.washington.edu/research/xmldatasets/data/courses/uwm.xml');

$z->xml($getXml);
$levels = array();
while ($z->read()) {
    if ($z->name === 'level') {
        $lvl = $z->readInnerXML();
        $levels[$lvl]++;
    }
}

var_dump($levels);