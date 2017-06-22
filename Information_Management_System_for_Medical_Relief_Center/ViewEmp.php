
<html>
<head>
<title>View Employee</title>
</head>
<body>
<?php
include("connection.php");

 
$sql="SELECT * FROM employee";
$result = mysql_query($sql);

echo "<table border='1'><tr><th>Employee ID</th><th>Emplyoee Name</th>";

$count=0;

mysql_close($con);
?>
</body>
</html>
