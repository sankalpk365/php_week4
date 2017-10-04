<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$string = "Hi Wassup";

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

echo "<b>Return the length of the string and print the result</b><br>";
echo strlen("$string")."<br>";
echo "<br>";

echo "<b>Return the ASCII value of the string</b><br>";
echo ord("$string")."<br>";
echo "<br>";

echo "<b>Return last two characters in date  and print the result</b><br>";
echo substr("$date","-2")."<br>";
echo "<br>";

echo "<b>Convert date into array</b><br>";
print_r (explode("/",$date1));
echo "<br>";

echo "<br><b>Leap year using foreach</b><br>";
foreach($year as $value)
{
    if(((int)$value)%4==0)
{
       echo "<br>True";
}
    else
{
       echo "<br>False";
}
}
echo "<br>";

echo "<br><b>Leap year using While function</b><br>"; 
$i=0;
while($i<count($year))
{
if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}
++$i;
}
echo "<br>";

echo "<br><b>Leap year using Switch statements</b><br>";
for ($i=0;$i<count($year);$i++)

{echo "<br>";
switch ($year{$i})
{
case "2012": if(((int)$year[$i])%4==0)
{
echo "True";
}
else
{
echo "False";
}
break;

case "396": if(((int)$year[$i])%4==0)
{
echo "True";
}
else
{
echo "False";
}
break;

case "300": if(((int)$year[$i])%4==0)
{
echo "True";
}
else
{
echo "False";
}
break;

case "2000": if(((int)$year[$i])%4==0)
{
echo "True";
}
else
{
echo "False";
}
break;

case "1089": if(((int)$year[$i])%4==0)
{
echo "True";
}
else
{
echo "False";
}
break;

case "1100": if(((int)$year[$i])%4==0)
{
echo "True";
}
else
{
echo "False";
}
break;

}
}

?>




