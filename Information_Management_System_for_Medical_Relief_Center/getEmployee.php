<html>
<head>
<title>Untitled Document</title>
</head>
<body>
<?php
$q=$_GET["q"];


include("connection.php");

$sql="SELECT * FROM employee WHERE sid = '".$q."'";

$result = mysql_query($sql);

echo '<select name="Employee" Id="Employee" onchange="showme()">';

while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['sid'].'>'.$myrow['sid'].'</option>';
}  
echo "</select>";

mysql_close();
?>
</body>
</html>
