<?php
function nameAscending($a, $b) {
$nameA = substr($a, 0, strpos($a, '-'));
$nameB = substr($b, 0, strpos($b, '-'));
return strcmp($nameA, $nameB);
}
function nameDescending($b, $a) {
$nameA = substr($a, 0, strpos($a, '-'));
$nameB = substr($b, 0, strpos($b, '-'));
return strcmp($nameA, $nameB);
}
function dateAscending($a, $b) {
$regex = "/([\d]{2}-[\d]{2}-[\d]{4}\s[\d]{2}:[\d]{2})/";
preg_match($regex, $a, $matchA);
preg_match($regex, $b, $matchB);
$date1 = date("Y-m-d H:i", strtotime($matchA[1]));
$date2 = date("Y-m-d H:i", strtotime($matchB[1]));
return strcmp($date1, $date2);
}
function dateDescending($b, $a) {
$regex = "/([\d]{2}-[\d]{2}-[\d]{4}\s[\d]{2}:[\d]{2})/";
preg_match($regex, $a, $matchA);
preg_match($regex, $b, $matchB);
$date1 = date("Y-m-d H:i", strtotime($matchA[1]));
$date2 = date("Y-m-d H:i", strtotime($matchB[1]));
return strcmp($date1, $date2);
}
function getSeminarInfo($txt, &$name, &$date, &$lecturer, &$details) {
$regex = "/(.*?)-([\w\s]+)-([\d]{2}-[\d]{2}-[\d]{4}\s[\d]{2}:[\d]{2})\s([^\n]+)/";
preg_match($regex, $txt, $matcher);
$name = $matcher[1];
$date = $matcher[3];
$lecturer = $matcher[2];
$details = $matcher[4];
}
function displayInfo($lecturer, $info) {
echo '<strong>Lecturer:</strong> ' . $lecturer . '<br/>' .
'<strong>Details:</strong>' . $info ;
}
?>