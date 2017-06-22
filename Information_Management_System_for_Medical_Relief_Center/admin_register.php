<?php
require('connection.php');
$un=$_POST['uname'];
$pas=$_POST['pass'];
$pwd=md5($password);
if($un==admin && $pas==123)
	{
	 header("Location: d.html");
	}
else 
	{
		sleep(1);
		echo"wrong user name or passwords";
	}

?>
