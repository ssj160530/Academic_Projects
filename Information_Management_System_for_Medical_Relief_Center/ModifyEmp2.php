<?php
include("connection.php");
$msg="Student modified Successfully";
//header("location:ModifyEmp1.php");

$c=$_POST['newfname'];
$c2=$_POST['name'];

echo $c.$c2;

$s=$_POST['Employee'];
                  
echo 'before if';


mysql_query("UPDATE employee SET name='".$c."' where name='".$c2."'");
                      echo "hi";

mysql_close();


?>