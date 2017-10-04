<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: "."<br>";
print_r($year)."<br>";
echo "<br>";

echo "<br>1. Replaced '-' with '/' in date <br>";
$date1 = str_replace("-", "/","$date");
echo "The value of \$date: ".$date1."<br>";
echo "<br>";





>
