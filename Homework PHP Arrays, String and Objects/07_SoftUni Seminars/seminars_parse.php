<?php
session_start();
require_once("functions.php");
require_once("Seminar.class.php");
if(isset($_SESSION['orderBy']) && isset($_SESSION['sortBy']) && isset($_SESSION['text'])) {
$text = $_SESSION['text'];
$sortby = $_SESSION['sortBy'];
$orderby = $_SESSION['orderBy'];
$tempSeminarParser = explode(PHP_EOL, $text);
$tempSeminarParser = array_filter($tempSeminarParser, function($val) { return $val == "" ? false : true; });
usort($tempSeminarParser, $sortby . '' . $orderby);
$seminars = array();
foreach ($tempSeminarParser as $seminar) {
$name = '';
$date = '';
$lecturer = '';
$details = '';
getSeminarInfo($seminar, $name, $date, $lecturer, $details);
$newSeminar = new Seminar($name, $date, $lecturer, $details);
$seminars[] = $newSeminar;
}
$_SESSION['seminars'] = $seminars;
if(isset($_SESSION['seminars'])) {
header("Location: SoftUniSeminarGenerator.php");
}
else {
echo 'Error';
}
}
?>