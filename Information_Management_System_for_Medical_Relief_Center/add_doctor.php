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
	if(document.form2.did.value=="")
	{
		error_string+="You must give an id \n";
	}
	if(document.form2.dname.value=="")
	{
		error_string+="You must give employee name \n";
	}
        if(document.form2.dfname.value=="")
	{
		error_string+="You must give a Middlename \n";
	}
	if(document.form2.dmname.value=="")
	{
		error_string+="You must give Surname \n";
	}
	if(document.form2.padd.value=="")
	{
		error_string+="You must give a professional address \n";
	}
	if(document.form2.asso.value=="")
	{
		error_string+="You must give a name of the associated organization \n";
	}
	if(document.form2.class1.selectedIndex<=0)
	{
		error_string+="You must select a blood group \n";
	}
	if(document.form2.sec1.selectedIndex<=0)
	{
		error_string+="You must select a blood group type \n";
	}
	if(document.form2.eid1.value=="")
	{
		error_string+="You must give an email id \n";
	}


	if(document.form2.mno1.value.length!=10)
	{
		error_string+="You must give a valid(10-digit) mobile number \n";
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
<center>Doctor Details</center></font><br />

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
  <form method="post" action="add_doctor.php" name="form2" onSubmit= "return checkMandatory()">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>*DOCTOR ID :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="did" value="" maxlength="50">

&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<b>*First Name :</b><span class="style2">&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="dname" value="" maxlength="50">
   <br />
  <br />
  <br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>*Middle Name :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="dfname" value="" maxlength="50">

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;<b>*Surname :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="dmname"  value="" maxlength="50">
  <br />
  <br />
  <br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>*Professional Address :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="padd"  value="" maxlength="50" onKeyPress="return checkFirst(event)" onBlur="return checkNull_3()">

	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>*Association :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="asso"  value="" maxlength="50" onKeyPress="return checkFirst(event)" onBlur="return checkNull_3()">
  <br />
  <br />
  <br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>*Date of Birth :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style1">&nbsp;</span><span class="style2">&nbsp;</span>&nbsp;
  <input type="text" name="dob1">
  <script language="JavaScript">
	new tcal ({
		// form name
		'formname': 'form2',
		// input name
		'controlname': 'dob1'
	})</script>
  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <b>*Date of Join :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="doj1" />
  <script language="JavaScript">
	new tcal ({
		// form name
		'formname': 'form2',
		// input name
		'controlname': 'doj1'
	})</script>
      
  <br> <br />


      <br /><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><b>*Blood Group :</b><strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <select name="class1">
	<option value="SEL">SELECT</option>
        <option value="AB">AB</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="O">O</option>	
        		
</select>
 *: 
      <select name="sec1">
        <option value="SEL1">SELECT</option>
        <option value="+" >+</option>
        <option value="-">-</option>	
         	
      </select>
      <br /> 
      <br />  <br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b> *Email id :</b>&nbsp;<strong><span class="style3">
  &nbsp;</span>&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="eid1" width="100%" value="" maxlength="50" onKeyPress="return checkEmail(event)" onBlur="return checkNull_4()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>*Mobile no. :</b>&nbsp;<strong><span class="style3">
  &nbsp;</span>&nbsp;</strong>&nbsp;&nbsp;&nbsp;

   <input type="text" name="mno1" width="100%" value="" onKeyPress="return checkNum(event)" onBlur="return checkNull_11()">

 <br />
  <br />
  <br />
  
 <h3 align="justify"><span class="style7"><span class="style8">&nbsp;&nbsp;&nbsp;&nbsp;*UPLOAD IMAGE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="file" id="files" name="files[]" multiple /></span></span></h3>
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
                    span.innerHTML = ['<img class="thumb" src="', e.arget.result,
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
  $did=$_POST['did'];
  $dname=$_POST['dname'];
  $dfname=$_POST['dfname'];
  $dmname=$_POST['dmname'];
  $padd=$_POST['padd'];
   $asso=$_POST['asso'];
 $dob1=$_POST['dob1'];
 $doj1=$_POST['doj1'];
 $class1=$_POST['class1'];
  $sec1=$_POST['sec1'];
  $eid1=$_POST['eid1'];
   $mno1=$_POST['mno1'];
  $sql=mysql_query("insert into doctor values('".$did."','".$dname."','".$dfname."','".$dmname."','".$padd."','".$asso."','".$dob1."','".$doj1."','".$class1."','".$sec1."','".$eid1."','".$mno1."')");
 echo" <br><br><br> Doctor Record is Added";
   }
 ?>      
    </p>
    <tr><td><center><img src="image/add.jpeg"/></center></td>
</tr>

</body>
</html>







