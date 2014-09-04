<?php
session_start();
if(isset($_POST['text']) && isset($_POST['sortBy']) && isset($_POST['orderBy'])) {
$_SESSION['text'] = $_POST['text'];
$_SESSION['sortBy'] = $_POST['sortBy'];
$_SESSION['orderBy'] = $_POST['orderBy'];
header("Location: seminars_parse.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Check For Available Seminars</title>
</head>
<form action="" method="post">
<textarea name="text" id="seminars-txt" cols="100" rows="20"></textarea><br/>
<label for="sort-type">Sort by:</label>
<select name="sortBy" id="sort-type">
<option value="name">Name</option>
<option value="date">Date</option>
</select>
<label for="sort-order">Order by:</label>
<select name="orderBy" id="sort-order">
<option value="Ascending">Ascending</option>
<option value="Descending">Descending</option>
</select>
<input type="submit" name="submitBtn" value="Submit"/>
</form>
</html>