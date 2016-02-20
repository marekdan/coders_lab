<?php
/*
Pobieramy subj czyli rodzaj zajęcia
Title
Instructor
Od której do której godziny
Nazwa budynku i nr sali
*/


$result_browser = '';
$subj = array();

$filter = filter_has_var(INPUT_GET, 'filter');
$filterSubj = $_GET['filter'];

$getXml = file_get_contents('http://www.cs.washington.edu/research/xmldatasets/data/courses/reed.xml');

$xml = simplexml_load_string($getXml);
//var_dump($xml);die;
/* Search for <course> */
$result = $xml->xpath('/root/course'); //dzięki xpath pobranie wszystkich zajęć
foreach ($result as $course) {
    //var_dump($course);die;
    if (!$filter || ($filter && strcmp($filterSubj, $course->subj) === 0)) {
        $result_browser .= 'SUBJ: ' . $course->subj . PHP_EOL . '<br>';
        $result_browser .= 'Title: ' . $course->title . ' with (' . $course->instructor . ')' . PHP_EOL . '<br>';
        $result_browser .= 'TIME: ' . $course->time->start_time . ' - ' . $course->time->end_time . PHP_EOL . '<br>';
        $result_browser .= 'Buiding: ' . $course->place->building . ' room nr: ' . $course->place->room . PHP_EOL . '<br>';
        $result_browser .= '<hr><br>';

        $subj[] = $course->subj;
    }
}

$subj = array_unique($subj);
?>
<form action="" method="get">
    <select name="filter">
        <?php
        foreach ($subj as $sb) {
            echo '<option value="' . $sb[0] . '">' . $sb[0] . '</option>';
        }
        ?>
    </select>
    <input type="submit" value="filtruj"/>
</form>
<?php
echo $result_browser;
?>
(cc) 2006-2012 ForgottenLabs.comstrona główna / najnowsze / API / regulamin / kontakt