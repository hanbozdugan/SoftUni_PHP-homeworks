<link rel="stylesheet" href="09.AwesomeCalendar.css" type="text/css" />
<h1>2014</h1>
<div class="calendar">
<?php
for ($i=1; $i<=12; $i++){
$date = date("1-$i-2014");
$month = date("F", strtotime($date));
$m = date("m", strtotime($date));
$daysInMon = date('t', mktime(0, 0, 0, $m));
$blankDays = date('N', strtotime($date))-1;
$daysInWeek = 0;
?>
<div id="month">
<table>
<thead>
<tr><th colspan=7><?=$month?></th></tr>
<tr><th>Mn</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th><th>Su</th></tr>
</thead>
<tbody>
<tr>
<?php
while ($blankDays>0){
$daysInWeek++;
?>
<td></td>
<?php
$blankDays--;
}
for ($day=1; $day<=$daysInMon; ){
if ($daysInWeek%8!=7){
?>
<td><?=$day?></td>
<?php
$day++;
}
else{
?>
</tr><tr>
<?php
}
$daysInWeek++;
}
?>
</tr>
</tbody>
</table>
</div>
<?php
}
?>
</div>