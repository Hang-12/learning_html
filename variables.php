<?php
echo 'Variables<br />';
echo '<br />';

define("APU", "Asia Pacific University");
define("PI", 3.141516);
define("WDT", "Welcome to Web Development");

$firstName = "Hafeez";
$lastName = "Khan";
$age = 18;
$price = 6.40;
$hasValue = false;
$value = null;
$value = 8;

echo $firstName;
echo '<br />';
echo "$firstName $lastName";
echo '<br />';
echo $firstName . " " . $lastName;
echo '<br />';
echo "Welcome to PHP, $firstName";
echo '<br />';
echo "You are now, $age";
echo '<br />';
echo WDT;
echo '<br />';
$x = 8;
$y = 4;
$sum = $x + $y;
echo $sum;
echo '<br />';
$radius = 5;
$area = PI * $radius * $radius;
echo "Area of Circle: " . $area;
?>
