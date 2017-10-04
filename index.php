<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: "."<br>";
print_r($year)."<br>";
echo "<br>";

echo "<br><b>Replaced '-' with '/' in date</b><br>";
$date1 = str_replace("-", "/","$date");
echo "The value of \$date: ".$date1."<br>";
echo "<br>";

echo "<b>Compare date and tar and print the output</b><br>";
if($date1>$tar){
        echo "The future"."<br>";
         }
    elseif ($date1<$tar){
        echo "The past"."<br>";
		        }
    else {
        echo "Oops";
		        }

echo "<br>";

echo "<b>Search '/' and print all the positions</b>"."<br>";
echo "The postion of '/' is at ";
echo strpos("$date1","/");
echo " and ";
echo strrpos("$date1","/")."<br>";

echo "<br>";

echo "<b>Count the number of words in date and print the output</b><br>";
echo str_word_count($date)."<br>";
echo "<br>";





















?>




