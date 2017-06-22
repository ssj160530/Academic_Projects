<html>
<head>
<title>Doctor Details</title>
</head>
<tr><td><center><img src="image/logo1.jpeg"/></center></td>
<link href="global.css" rel="stylesheet" type="text/css" />
<body background="img/233.JPG"><br />
<font size="+2" color="#FF0000" face="Verdana, Arial, Helvetica, sans-serif" >
<center>Doctor Details</center></font><br />
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
		  <li><a href="ViewVip1.php">VIEW </a></li>
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
		  <li><a href="ViewSaint.php">VIEW </a></li>
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

 
                $sql="SELECT * FROM doctor ORDER BY did";
                $result = mysql_query($sql);
 $count=0;
echo "<table border='1'><tr><th>Doctor ID</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Professional Address</th><th>Association</th><th>Date of Birth</th><th>Date of Join</th><th>Blood Group</th><th>+/-</th><th>Email-Id</th><th>Mobile No.</th>";

while($myrow = mysql_fetch_array($result))
{
echo "<tr><td>";
echo $myrow['did'];
echo "<input type='hidden' name='did".$count."' id='did".$count."' value='$myrow[did]'>";

echo "</td><td>";
echo $myrow['dname'];
echo "<input type='hidden' name='dname".$count."' id='dname".$count."' value='$myrow[dname]'>";

echo "</td><td>";
echo $myrow['dfname'];
echo "<input type='hidden' name='dfname".$count."' id='dfname".$count."' value='$myrow[dfname]'>";

echo "</td><td>";
echo $myrow['dmname'];
echo "<input type='hidden' name='dmname".$count."' id='dmname".$count."' value='$myrow[dmname]'>";

echo "</td><td>";
echo $myrow['padd'];
echo "<input type='hidden' name='padd".$count."' id='padd".$count."' value='$myrow[padd]'>";

echo "</td><td>";
echo $myrow['asso'];
echo "<input type='hidden' name='asso".$count."' id='asso".$count."' value='$myrow[asso]'>";

echo "</td><td>";
echo $myrow['dob1'];
echo "<input type='hidden' name='dob1".$count."' id='dob1".$count."' value='$myrow[dob1]'>";

echo "</td><td>";
echo $myrow['doj1'];
echo "<input type='hidden' name='doj1".$count."' id='doj1".$count."' value='$myrow[doj1]'>";

echo "</td><td>";
echo $myrow['class1'];
echo "<input type='hidden' name='class1".$count."' id='class1".$count."' value='$myrow[class1]'>";

echo "</td><td>";
echo $myrow['sec1'];
echo "<input type='hidden' name='sec1".$count."' id='sec1".$count."' value='$myrow[sec1]'>";

echo "</td><td>";
echo $myrow['eid1'];
echo "<input type='hidden' name='eid1".$count."' id='eid1".$count."' value='$myrow[eid1]'>";

echo "</td><td>";
echo $myrow['mno1'];
echo "<input type='hidden' name='mno1".$count."' id='mno1".$count."' value='$myrow[mno1]'>";

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
