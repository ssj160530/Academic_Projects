<?php
session_start();
$sid=$_POST['sid'];
$name=$_POST['name'];

$_SESSION['sid']=$sid;
$_SESSION['name']=$name;


require('connection.php');


echo"<table border=\"1\"> 
       <tr>
	    <th>Student Name</th>
		<th>Subject 1 \outof </th>
		<th>Subject 2\outof</th>
		<th>Subject 3\outof</th>
		<th>Subject 4\outof</th>
		<th>Subject 5\outof</th>
		<th>Subject 6\outof</th>
		
		</tr>";
$sql=mysql_query("select name from employee where sid='$sid'  and name='$name' ")or die('query not performed');
while($row=mysql_fetch_array($sql) )
  { $at=0;$bt=0;$ct=0;$dt=0;$et=0;$ft=0;$out1=0;$out2=0;$out3=0;$out4=0;$out5=0;$out6=0;
 
   $name= $row["name"];
    
	  echo"<tr>";
  echo"<td>$name</td>";
	$sq=mysql_query("select total_attendance,out_of from present where name='$name' and subject='sub1' and sid='$sid' and name  ='$name' ") or die('fail');
	while($ro=mysql_fetch_array($sq) )
  {
      $att=$ro['total_attendance'];
	  $at=$at + $att;
	  $ott1=$ro['out_of'];
	  $out1=$out1 + $ott1;
	  }
	 echo"<td>$at\\$out1</td>";
	  
	$sq=mysql_query("select total_attendance,out_of from present where name='$sname' and subject='sub2' and class='$sclass' and section='$sec' ") or die('fail');
	while($ro=mysql_fetch_array($sq) )
  {
      $btt=$ro['total_attendance'];
	  $bt=$bt + $btt;
	  $ott2=$ro['out_of'];
	  $out2=$out2 + $ott2;
	  }
	 echo"<td>$bt\\$out2</td>";
	  
	$sq=mysql_query("select total_attendance,out_of from present where name='$sname' and subject='sub3' and class='$sclass' and section='$sec' ") or die('fail');
	while($ro=mysql_fetch_array($sq) )
  {
      $ctt=$ro['total_attendance'];
	  $ct=$ct + $ctt;
	  $ott3=$ro['out_of'];
	  $out3=$out3 + $ott3;
	  }
	 echo"<td>$ct\\$out3</td>";
	  
	$sq=mysql_query("select total_attendance,out_of from present where name='$sname' and subject='sub4' and class='$sclass' and section='$sec' ") or die('fail');
	while($ro=mysql_fetch_array($sq) )
  {
      $dtt=$ro['total_attendance'];
	  $dt=$dt + $dtt;
	  $ott4=$ro['out_of'];
	  $out4=$out4 + $ott4;
	  }
	 echo"<td>$dt\\$out4</td>";
	  
	$sq=mysql_query("select total_attendance,out_of from present where name='$sname' and subject='sub5' and class='$sclass' and section='$sec' ") or die('fail');
	while($ro=mysql_fetch_array($sq) )
  {
      $ett=$ro['total_attendance'];
	  $et=$et + $ett;
	  $ott5=$ro['out_of'];
	  $out5=$out5 + $ott5;
	  }
	 echo"<td>$et\\$out5</td>";
	 
	$sq=mysql_query("select total_attendance,out_of from present where name='$sname' and subject='sub6' and class='$sclass' and section='$sec' ") or die('fail');
	while($ro=mysql_fetch_array($sq) )
  {
      $ftt=$ro['total_attendance'];
	  $ft=$ft + $ftt;
	  $ott6=$ro['out_of'];
	  $out6=$out6 + $ott6;
	  }
	 echo"<td>$ft\\$out6</td>";
	 echo"</tr>"; 
	
	$as=mysql_query("insert into total values('".$sname."', '".$at."' ,'".$bt."' ,'".$ct."' ,'".$dt."' ,'".$et."', '".$ft."')")or die("ha");
 
	}
	echo"</table>"; 
	
	$_SESSION['out1']=$out1;
	$_SESSION['out2']=$out2;
	$_SESSION['out3']=$out3;
	$_SESSION['out4']=$out4;
	$_SESSION['out5']=$out5;
	$_SESSION['out6']=$out6;
	
	
?>
<style type="text/css">
<!--
.style4 {
	color: #FF00CC;
	font-weight: bold;
}
.style6 {color: #3399FF; font-weight: bold; }
.style8 {color: #3399FF}
-->
</style>

 <form method="post" action="count.php"><br/><br/>
   <span class="style6">Max Criteria:</span> 
   <input type="text" name="criteria" width="40%" />
   <span class="style8">%</span><br/>
   <br/>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="submit" type="submit" class="style4" value="submit" width="100%" />
 </form>
   