<!DOCTYPE html>
<html>
<body>
<?php
echo "<h1>DATE AND TIME<h1>";
echo "Today is " . date("l")."<br>";
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
?>
<br/>
<hr>
<?php
echo "<h1>Timezone America New_York</h1>"."<br>";
date_default_timezone_set("America/New_York");
echo "The time in new york " . date("H:i:s");
?>
<?php
echo "<h1>Timezone india chennai</h1>"."<br>";
date_default_timezone_set("ASIA/CALCUTTA");
echo "The time in chennai " . date("h:i:sa");
?>

<br/>
<hr>
&copy; 2022-<?php echo date("Y");?>
<hr>

<?php

#syntax mktime(hour, minute, second, month, day, year)
print "<h1>MK TIME<h1>"."<br>";
echo "<br>";
$t=mktime(12, 30, 24, 3, 1, 2023);
echo "Created date is " . date("Y-m-d h:i:sa", $t);
?>
<br/>
<hr>
<?php
print "<h1>STRING  TO  TIME<h1>"."<br>";
#syntax strtotime(time, now)

$d=strtotime("2:30pm march 1 2023");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
<br>
<?php
$startdate = strtotime("Today");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
?>
</body>
</html>