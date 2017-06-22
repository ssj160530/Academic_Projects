<html>
<head>


<title>SCJMRC</title>
<tr><td><center><img src="image/logo1.jpeg"/></center></td>
<script language="JavaScript" src="calendar_db.js">
</script>
	<link rel="stylesheet" href="calendar.css">
<script type="text/javascript">

function checkMandatory()
{
	var error_string="";
	if(document.form2.saname.value=="")
	{
		error_string+="You must give First name \n";
	}

		if(error_string=="")
	{
		return true;
	}
	else
	{
		alert(error_string);
		return false;
	}

}

</script>
</head>

<link href="global.css" rel="stylesheet" type="text/css" />
<body background="img/233.JPG"><br />
<font size="+2" color="#FF0000" face="Verdana, Arial, Helvetica, sans-serif" >
<center>Saint Details</center></font><br />
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
</div>
  <form method="post" action="add_employee.php" name="form2" onSubmit= "return checkMandatory()">


&nbsp;&nbsp;<b>ID :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="said" value="" maxlength="50">

&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <b>*First Name :</b><span class="style2">&nbsp;</span>&nbsp;
  <input type="text" name="saname" value="" maxlength="50">


<br />

  <br />
  <br />
&nbsp;&nbsp;<b>Middle Name :</b>&nbsp;&nbsp;
  <input type="text" name="safname" value="" maxlength="50">

&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <b>Last Name :</b>&nbsp;&nbsp;
  <input type="text" name="samname"  value="" maxlength="50">

<br />
  <br />
  <br />

&nbsp;&nbsp;<b>Date of Birth :</b>&nbsp;<span class="style1">&nbsp;</span><span class="style2">&nbsp;</span>&nbsp;
  <input type="text" name="sdob">
  <script language="JavaScript">
	new tcal ({
		// form name
		'formname': 'form2',
		// input name
		'controlname': 'sdob'
	})</script>
  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


  <br> <br />


      <br /><strong>&nbsp;&nbsp;</strong><b>Blood Group :</b><strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong>   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <select name="sclass">
	<option value="SEL">SELECT</option>
        <option value="AB">AB</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="O">O</option>

</select>
 : &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
      <select name="ssec">
        <option value="SEL1">SELECT</option>
        <option value="+" >+</option>
        <option value="-">-</option>

      </select>
      <br />
      <br />  <br />

&nbsp;&nbsp;<b> Email id :</b>&nbsp;<strong><span class="style3">
  &nbsp;</span>&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="semail" width="100%" value="" maxlength="50" onKeyPress="return checkEmail(event)" onBlur="return checkNull_4()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <b>Mobile no. :</b>&nbsp;<strong><span class="style3">
  &nbsp;</span>&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

   <input type="text" name="smno" width="100%" value="" onKeyPress="return checkNum(event)" onBlur="return checkNull_11()">

    <h3 align=center><span class="style7"><span class="style8">UPLOAD IMAGE: <input type="file" id="files" name="files[]" multiple /></span></span></h3>
<div id="list"></div>
<div id="size"></div>
 <script>
    function handleFileSelect(evt) {
        var files = evt.target.files; // FileList object

        // Loop through the FileList and render image files as thumbnails.
        for (var i = 0, f; f = files[i]; i++) {
            var siz = document.createElement('div');
            siz.innerHTML = [f.name,f.size].join('');
            document.getElementById('size').insertBefore(siz, null);
            // Only process image files.
            if (!f.type.match('image.*')) {
                continue;
            }

            var reader = new FileReader();

            // Closure to capture the file information.
            reader.onload = (function (theFile) {
              //  alert("hii");
                return function (e) {
                    alert("hii inside return");
                    // Render thumbnail.
                    var span = document.createElement('span');
                    span.innerHTML = ['<img class="thumb" src="', e.target.result,
                            '" title="', theFile.name, '"/>'].join('');
                    document.getElementById('list').insertBefore(span, null);
                };
            })(f);

            // Read in the image file as a data URL.
            reader.readAsDataURL(f);
        }
    }


    document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>



 <br />
  <br />
  <br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input name="submit" type="submit" class="style9" value="SUBMIT" >
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<input name="button1" type="button" class="style9" value="CANCEL">

<br></br>
* FIELDS ARE COMPULSORY


 <?php
 }
 else
 {
  require('connection.php');
  $said=$_POST['said'];
  $saname=$_POST['saname'];
  $sclass=$_POST['sclass'];
   $ssec=$_POST['ssec'];
 $safname=$_POST['safname'];
  $samname=$_POST['samname'];
   $sdob=$_POST['sdob'];
   $smno=$_POST['smno'];
  $semail=$_POST['seid'];
  $sql=mysql_query("insert into saint values('".$said."','".$saname."','".$safname."','".$samname."','".$sdob."','".$sclass."','".$ssec."','".$semail."','".$smno."')");
 echo" <br><br><br> Saint Record is Added";
   }
 ?>
    </p>
    <tr><td><center><img src="image/add.jpeg"/></center></td>
</tr>

</body>
</html>







