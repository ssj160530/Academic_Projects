<?php 
	session_start();
	include ("menu.php"); 
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Delete Student</title>
</head>

<body>
<table width="800" height="250" border="0" bgcolor="#FFCC00">
  <tr>
    <td height="163"><form id="form1" name="form1" method="post" action="DeleteStudent2.php">
      <p>
        <label>
         <div align="center">
         <div align="center">Select Student ID
           <?php
include("db.php");
$result=mysql_query("select *  from student ");
if($result)
{ 
echo '<select name="StudentId">'; 
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['StudentId'].'>'.$myrow['StudentId'].'</option>';  
}  
echo "</select>";
}
?>  
        </div>
        </label>
       
        <p align="center">
          <input type="submit" name="Submit" value="Delete" onclick="return confirm('Are you sure you want to Delete?')" />
        </p>
    </form>    </td>
  </tr>
  
</table>
</body>
</html>
