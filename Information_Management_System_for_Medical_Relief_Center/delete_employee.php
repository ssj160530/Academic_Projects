<html>
<head>

<title>Deletion of Employee</title>
<tr><td><center><img src="image/logo1.jpeg"/></center></td>
<script language="JavaScript" src="calendar_db.js">
</script>
	<link rel="stylesheet" href="calendar.css">


<script>
    var Msg=new Array(20)
    var i
    for(i=0;i<=13;i++)
    {
        Msg[i]=""
    }
    function checkFirst(evt)
    {
        var charCode=(evt.which)?evt.which:event.keyCode
        if(charCode>31&&(charCode<65||charCode>90)&&(charCode<97||charCode>122))
        {
            alert("Please make sure entries are characters only")
            Msg[0]+="Invalid"
            return false
        }
        Msg[0]=""
        return true
    }

	function checkNull_1()
    {
        var d=document.forms[0].sid.value
        if(d=="")
        {
            alert("Please fill up blank fields")
            Msg[5]+="Invalid"
                    return false
        }
        Msg[5]=""
        return true
    }
	function checkNull_2()
    {
        var d=document.forms[0].sname.value
        if(d=="")
        {
            alert("Please fill up blank fields")
            Msg[6]+="Invalid"

            return false
        }
        Msg[6]=""
        return true
    }
	 function checkAll()
    {
        var j
        for(j=0;j<13;j++)
        {
            if(Msg[j]!="")
            {
                alert("Some Fields haven't been filled Correctly")
                return false
            }
        }
        return true
    }

	</script>
</head>
<link href="global.css" rel="stylesheet" type="text/css" />
<body background="img/233.JPG"><br />
<font size="+2" color="#FF0000" face="Verdana, Arial, Helvetica, sans-serif" >
<center> Deleting Employee</center></font><br />
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
	<?php
if(!isset($_POST['submit'])){
?>
<form method="post" action="delete_employee.php">
</div><br /><br />
<span class="style3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Employee ID :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><strong>&nbsp;</strong>
  <input type="text" name="sid" width="100%" value="" maxlength="50" onBlur="return checkNull_1()"><br /><br /><br />
  <span class="style3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Employee Name :</span><strong>&nbsp;</strong>
  <input type="text" name="sname" width="100%" value="" maxlength="50" onKeyPress="return checkFirst(event)" onBlur="return checkNull_2()"><br /><br /><br />
  <span class="style3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blood Group :&nbsp;&nbsp;&nbsp;&nbsp;</span>   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <select name="class">
                       <option value="SEL">SELECT</option>
					<option value="AB">AB</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="O">O</option>

				 </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
                     <select name="sec">

                       <option value="SEL1" >SELECT</option>
					<option value="+" >+</option>
        				<option value="-">-</option>
					   </select><br /> <br /><br />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;<input name="submit" type="submit" class="style5" value="submit" onClick="return checkAll()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input name="button1" type="reset" class="style5" value="cancel">
    <?php
 }
 else
 {
  require('connection.php');
  $name=$_POST['sname'];
  $sclass=$_POST['class'];
  $sec=$_POST['sec'];
   $ssid=$_POST['sid'];

  $sql=mysql_query("select sid from employee where sid='$ssid' ") or die("query did not exec");
  while($row=mysql_fetch_array($sql))
  {

  $sid= $row["sid"];
  }
  if($ssid==$sid)
  {
   $query="delete from employee where sid='$sid' and name='$name' and class='$sclass' and section='$sec' ";
   echo "<br /><br /><br /><font color=\"red\" size=\"+2\">&nbsp;&nbsp;&nbsp;Employee Record Is Deleted</font>";
   mysql_query($query)or die("No such name is found");
  }
  else
  {
   echo"<br /><br /><br /><font color=\"blue\" size=\"+2\">&nbsp;&nbsp;&nbsp;Wrong Entries Are Made</font>";
  }
 }
 ?>
</body>
</html>
