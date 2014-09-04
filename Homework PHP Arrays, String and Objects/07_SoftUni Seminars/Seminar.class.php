<?php
class Seminar {
private $seminarName;
private $date;
private $lecturer;
private $details;
public function __construct($name, $date, $lecturer, $details) {
$this->seminarName = $name;
$this->date = $date;
$this->lecturer = $lecturer;
$this->details = $details;
}
public function getSeminarName() {
return $this->seminarName;
}
public function getDate() {
return $this->date;
}
public function getLecturer() {
return $this->lecturer;
}
public function getDetains() {
return $this->details;
}
}
?>