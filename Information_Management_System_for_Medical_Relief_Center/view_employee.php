<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php
$c=$_GET["q"];
include("connection.php");

 
$sql="SELECT * FROM employee WHERE sid = '".$c."' ORDER BY sid";
$result = mysql_query($sql);

echo "<table border='1'><tr><th>Employee ID</th><th>Emplyoee Name</th>";

$count=0;
while($myrow = mysql_fetch_array($result))
{
echo "<tr><td>";
echo $myrow['sid'];
echo "<input type='hidden' name='sid".$count."' id='sid".$count."' value='$myrow[sid]'>";

echo "</td><td>";
echo $myrow['name'];
echo "<input type='hidden' name='name".$count."' id='name".$count."' value='$myrow[name]'>";
$count++;

}
//echo $count;
echo "<input type='hidden' name='totalemployee' id='totalemployee' value='$count'>";

echo "</table>";

mysql_close($con);
?>
</body>
</html>
