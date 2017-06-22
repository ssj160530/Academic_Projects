<html>
<head>
<title>Employee Details</title>
</head>
<tr><td><center><img src="image/logo1.jpeg"/></center></td>
<link href="global.css" rel="stylesheet" type="text/css" />
<body background="img/233.JPG"><br />
<font size="+2" color="#FF0000" face="Verdana, Arial, Helvetica, sans-serif" >
<center>Employee Details</center></font><br />
<form name="f1" method="post" action="ViewEmp1.php">
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
		  <li><a href="add_employee.php">MODIFY </a></li>
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
<table cellspacing="10">
		
                <?php
                include("connection.php");

 
                $sql="SELECT * FROM employee ORDER BY sid";
                $result = mysql_query($sql);
 $count=0;
echo "<table border='1'><tr><th>Employee ID</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Date of Birth</th><th>Date of Join</th><th>Blood Group</th><th>+/-</th><th>Email-Id</th><th>Mobile No.</th>";

while($myrow = mysql_fetch_array($result))
{

echo "<tr><td>";
echo $myrow['sid'];
echo "<input type='hidden' name='sid".$count."' id='sid".$count."' value='$myrow[sid]'>";

echo "</td><td>";
echo $myrow['name'];
echo "<input type='hidden' name='name".$count."' id='name".$count."' value='$myrow[name]'>";

echo "</td><td>";
echo $myrow['fname'];
echo "<input type='hidden' name='fname".$count."' id='fname".$count."' value='$myrow[fname]'>";

echo "</td><td>";
echo $myrow['mname'];
echo "<input type='hidden' name='mname".$count."' id='mname".$count."' value='$myrow[mname]'>";

echo "</td><td>";
echo $myrow['dob'];
echo "<input type='hidden' name='dob".$count."' id='dob".$count."' value='$myrow[dob]'>";

echo "</td><td>";
echo $myrow['doj'];
echo "<input type='hidden' name='doj".$count."' id='doj".$count."' value='$myrow[doj]'>";

echo "</td><td>";
echo $myrow['class'];
echo "<input type='hidden' name='class".$count."' id='class".$count."' value='$myrow[class]'>";

echo "</td><td>";
echo $myrow['section'];
echo "<input type='hidden' name='section".$count."' id='section".$count."' value='$myrow[section]'>";

echo "</td><td>";
echo $myrow['email_id'];
echo "<input type='hidden' name='email_id".$count."' id='email_id".$count."' value='$myrow[email_id]'>";

echo "</td><td>";
echo $myrow['mno'];
echo "<input type='hidden' name='mno".$count."' id='mno".$count."' value='$myrow[mno]'>";

$count++;

}
//echo $count;

echo "<input type='hidden' name='totalstudent' id='totalstudent' value='$count'>";



mysql_close();
?>
	<tr><td colspan="2"><div id="s"></div></td></tr>
</table>
</form>
</body>
<br />
<br />
<br />
<tr><td><center><img src="image/add.jpeg"/></center></td>
</html>
