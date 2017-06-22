<html>
<title> Modify Student</title>
<title>Untitled Document</title>
<head>
<head>
</head>

<body>
<link href="global.css" rel="stylesheet" type="text/css" />
<body background="img/233.JPG"><br />
<font size="+2" color="#FF0000" face="Verdana, Arial, Helvetica, sans-serif" >
<center>Modify Student</center></font><br />

<div id="menu">
<input type='hidden' id='msg' value=''>
<table width="1000" height="142">
<tr><td>

		<ul>
		<li>
		 <h2>HOME</h2>
		  <ul>
		  <li><a href="home.php">HOME </a></li>
		  </ul>
		  </li></ul>
		  <ul>
		<li>
		  <h2>ADMIN</h2>
			<ul>
		  <li><a href="admin.php">ADMIN </a></li>
		  </ul>
		  	</li></ul>
		<ul>
		<li>
		  <h2>ATTENDANCE REPORT</h2>
		<ul>
		  <li><a href="att_rep.php">ATTENDANCE REPORT </a></li>
		  </ul>
		  </li>
		  </ul>
		  
		  <ul>
		<li>
		  <h2>EMPLOYEE</h2>
		<ul>
		  <li><a href="add_employee.php">ADD </a></li>
		  <li><a href="ModifyEmp1.php">MODIFY </a></li>
		  <li><a href="delete_employee.php">DELETE </a></li>
		  <li><a href="ViewEmp1.php">VIEW </a></li>
                  </ul>
		</li>
		</ul>

                <ul>
		<li>
		  <h2>DOCTOR</h2>
		<ul>
		  <li><a href="add_doctor.php">ADD </a></li>
		  <li><a href="add_doctor.php">MODIFY </a></li>
		  <li><a href="delete_doctor.php">DELETE </a></li>
		  <li><a href="ViewDoc1.php">VIEW </a></li>
                  </ul>
		</li>
		</ul>

                <ul>
		<li>
		  <h2>VIP</h2>
		<ul>
		  <li><a href="add_vip.php">ADD </a></li>
		  <li><a href="add_vip.php">MODIFY </a></li>
		  <li><a href="delete_vip.php">DELETE </a></li>
		  <li><a href="add_vip.php">VIEW </a></li>
                  </ul>
		</li>
		</ul>
		
		<ul>
		<li>
		  <h2>SAINT</h2>
		<ul>
		  <li><a href="add_saint.php">ADD </a></li>
		  <li><a href="add_saint.php">MODIFY </a></li>
		  <li><a href="delete_saint.php">DELETE </a></li>
		  <li><a href="add_saint.php">VIEW </a></li>
                  </ul>
		</li>
		</ul>

		<ul>
		<li>
			  <h2>LOGIN</h2>
		<ul>
		  <li><a href="d_login.php">LOGIN </a></li>
		  </ul>
		  </li></ul>
		  
		<ul>
		<li>
		  <h2>FEEDBACK</h2>
		<ul>
		  <li><a href="feedback.php">FEEDBACK </a></li>
		  </ul>
		</li>
		</ul>      
</td></tr>
</table>


<table width="800" height="250" border="0">
  <tr>
    <td height="290">
    <form id="form1" name="form1" method="post" action="ModifyEmp2.php">
<table border="0">
<tr>
  <td width="128"> Employee </td>
  <td width="144">
      <?php


include("connection.php");
$result=mysql_query("select *  from employee ");
if($result)
{
echo '<select name="name">';
echo '<option value="">Select Employee first Name</option>';
while($myrow = mysql_fetch_array($result))
{
echo '<option value='.$myrow['name'].'>'.$myrow['name'].'</option>';
}
echo "</select>";
}
?></td>
</tr>
<tr>
  <td>      New Employee Middle Name</td>
  <td><?php
include("connection.php");
$result=mysql_query("select *  from employee ");
if($result)
{
echo '<input type="text" name="newfname"  value="" maxlength="50">';
}
/*
mysql_query("UPDATE employee SET name='".$c."' WHERE fname='".$c2."'");
$msg="Student modified Successfully"; */
mysql_close();
?>
  <tr><td colspan="2">
        <input type="submit" name="Submit" value="Modify"/>
      </td></tr>
    </table></form>    </td>
  </tr>

</table>
</body>
</html>
