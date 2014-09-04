<?php
require_once("Seminar.class.php");
require_once("functions.php");
session_start();
if(isset($_SESSION['seminars'])) {
$seminars = $_SESSION['seminars'];
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Seminars</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<table border="1">
<thead>
<tr>
<th>Seminar name</th>
<th>Date</th>
<th>Participate</th>
</tr>
</thead>
<tbody>
<?php foreach($seminars as $seminar): ?>
<tr>
<td>
<p class="tooltip">
<a href="#">
<?=$seminar->getSeminarName();?>
<span>
<?=displayInfo($seminar->getLecturer(), $seminar->getDetains());?>
</span>
</a>
</p>
</td>
<td>
<?=$seminar->getDate();?>
</td>
<td>
<a href="#" class="button">Sign Up</a>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</body>
</html>