<?php
session_start();
?>
<html><head>
<link rel="stylesheet" href="try.css" type="text/css"media="screen"/>
<style type="text/css">
#Message
{
background-color:#CC99FF;
}
</style>
</head>
<body>
<div id="menu">
<table width="1000" height="142">
<tr><td><img src="colg.jpg"/></td>
</tr>
<tr><td>
<?php
	
	{
		echo '
		<ul>
		<li>
		  <h2>HOME</h2>
		  <ul>
		  <li><a href="HomePage.php">HOME </a></li>
		  </ul>	
		</li></ul>
		<ul>
		<li>
		  <h2>Department</h2>
			  <ul>
				<li><a href="AddDept.php">Add</a></li>
				<li><a href="ModifyDept.php">Modify</a></li>
				<li><a href="DeleteDept.php">Delete</a></li>
				<li><a href="ViewDept.php">View</a></li>
			  </ul>
		</li></ul>
		<ul>
		<li>
		  <h2>Class</h2>
		  <ul>
				<li><a href="AddClass.php">Add</a></li>
				<li><a href="ModifyClass.php">Modify</a></li>
				<li><a href="DeleteClass.php">Delete</a></li>
				<li><a href="ViewClass.php">View</a></li>
		</ul>
		</li></ul>
		<ul>
		<li>
		  <h2>REGISTER</h2>
		  <ul>
		  <li><a href="Register.php">Register</a></li>
		  </ul>	
		</li></ul>
				<ul>
		<li>
		  <h2>Student</h2>
		<ul>
				<li><a href="AddStudent.php">Add</a></li>
				<li><a href="ModifyStudent.php">Modify</a></li>
				<li><a href="DeleteStudent.php">Delete</a></li>
				<li><a href="ViewStud1.php">View</a></li>

		</ul>
		</li></ul>
		<ul>
		<li>
		   <h2>Teacher</h2>
		<ul>
				<li><a href="AddTeacher.php">Add</a></li>
				<li><a href="ModifyTeacher.php">Modify</a></li>
				<li><a href="DeleteTeacher.php">Delete</a></li>
				<li><a href="ViewTeacher.php">View</a></li>
		</ul>
		</li>
		</ul>
		<ul>
		<li>
		  <h2>Batch</h2>
		  <ul>
				<li><a href="AddBatch.php">Add</a></li>
				<li><a href="ModifyBatch.php">Modify</a></li>
				<li><a href="ViewBatch1.php">View</a></li>
		</ul>
		</li></ul>
		<ul>
		<li>
		  <h2>Subject</h2>
		  <ul>
				<li><a href="AddSubject.php">Add</a></li>
				<li><a href="ViewSubject.php">View</a></li>

		</ul>
		</li></ul>
		<ul>
		<li>
		  <h2>Promote</h2>
			  <ul>
				<li><a href="Promote.php">Promote</a></li>
			  </ul>
		</li></ul>
		<ul>
		<li>
		  <h2>Academic Calendar</h2>
			  <ul>
				<li><a href="AcademicCalendar.php">Add Academic Calendar</a></li>
			  </ul>
		</li></ul>
		<ul>
		<li>
		  <h2>Elective</h2>
			  <ul>
				<li><a href="AssignElective.php">Assign Elective</a></li>
			  </ul>
		</li></ul>
		
		<ul>
		<li>
		  <h2>Timetable</h2>
			  <ul>
				<li><a href="TimetablePreview.php">Add Timetable</a></li>
				<li><a href="ViewTimetable1.php">View Timetable</a></li>
				<li><a href="TimetablePreviewModify.php">Modify Timetable</a></li>
			  </ul>
		</li></ul>
		
		<ul>
		<li>
		  <h2>Exam</h2>
			  <ul>
				<li><a href="AddQuesBank.php">AddQues</a></li>
			  </ul>
		</li></ul>
		<ul>
		<li>
		  <h2>Notice</h2>
			  <ul>
			    <li><a href="UploadNotice.php">Upload</a></li>
				<li><a href="DeleteNotice.php">Delete Notice</a></li>
			  </ul>
		</li></ul>
		<ul>
		<li>
		  <h2>LOGOUT</h2>
		  <ul>
		  <li><a href="Login.php">LOGOUT </a></li>
		  </ul>	
		</li></ul>
		<ul>
		<li>
		  <h2>CHANGE PASSWORD</h2>
		  <ul>
		  <li><a href="ChangePwd1.php">CHANGE PASSWORD </a></li>
		  </ul>	
		</li></ul>';
	}
	
	{
		echo '
		<ul>
		<li>
		  <h2>HOME</h2>
		  <ul>
		  <li><a href="HomePage.php">HOME </a></li>
		  </ul>
		</li></ul>
		<ul>
		<li>
		  <h2>ABOUT US</h2>
		</li></ul>
		<ul>
		<li>
		  <h2>NOTICE</h2>
		  <ul>
				<li><a href="UploadNotice.php">Upload</a></li>
		</ul>
		</li></ul>
		<ul>
		<li>
		  <h2>ATTENDANCE</h2>
		  <ul>
				<li><a href="StudAttendance.php">Defaulters</a></li>

		</ul>
		</li></ul>
		<ul>
		<li>
		  <h2>E-LIBRARY</h2>
		  <ul>
		  		<li><a href="UploadFile.php">Upload Document</a></li>
				<li><a href="ListFiles.php">Search/Download Document</a></li>
		  </ul>
		</li></ul>
		<ul>
		<li>
		  <h2>E-EXAM</h2>
		<ul>
				<li><a href="SelectSection.php">EXAM</a></li>
		</ul>
		</li></ul>
		<ul>
		<li>
		  <h2>FEEDBACK</h2>
		<ul>';
				include ("db.php");		
				$sql="select * from student where StudentId='".$UserId."' AND GivenFeedback='YES'";
				$result9=mysql_query($sql);
				$n=mysql_num_rows($result9);
				if($n==1){
				echo '<li><a href="">UNAVAILABLE</a></li>';}
				else
				{echo '<li><a href="Feed.php">Give feedback</a></li>';}
			echo'
		</ul>
		</li>
		</ul>
		<ul>
		<li>
		  <h2>TIMETABLE</h2>
		<ul>
				<li><a href="ViewTimetable1.php">View Timetable</a></li>
		</ul>
		</li>
		</ul>
		<ul>
		<li>
		  <h2>LOGOUT</h2>
		  <ul>
		  <li><a href="Login.php">LOGOUT </a></li>
		  </ul>	
		</li></ul>
		<ul>
		<li>
		  <h2>CHANGE PASSWORD</h2>
		  <ul>
		  <li><a href="ChangePwd1.php">CHANGE PASSWORD </a></li>
		  </ul>	
		</li></ul>';
	}
	if($role=="teacher")
	{
		echo '
		<ul>
		<li>
			<h2>HOME</h2>
		  <ul>
		  <li><a href="HomePage.php">HOME </a></li>
		  </ul>
		  </li>
		  </ul>	
		  	<ul>
		<li>
		  <h2>ABOUT US</h2>
		</li></ul>
		<ul>
		<li>
		  <h2>NOTICE</h2>
		  <ul>
				<li><a href="UploadNotice.php">Upload</a></li>
		</ul>
		</li></ul>
		
		<ul>
		<li>
		  <h2>E-LIBRARY</h2>
		  <ul>
		  		<li><a href="UploadFile.php">Upload Document</a></li>
				<li><a href="ListFiles.php">Search/Download Document</a></li>
				<li><a href="ApproveFile.php">Approve Document</a></li>
		  </ul>
		</li></ul>
		<ul>
		<li>
		  <h2>F-SCHEDULE</h2>
		<ul>
			<li><a href="PlannedSche.php">Plan Schedule</a></li>
			<li><a href="actualsche.php">Actual Schedule</a></li>
		</ul>
		</li></ul>
		<ul>
		<li>
		  <h2>ATTENDANCE</h2>
		  <ul>
		  		<li><a href="Attendance.php">Add Attendance</a></li>
				<li><a href="Defaulters.php">Defaulters</a></li>

		</ul>
		</li></ul>
		<ul>
		<li>
		  <h2>TIMETABLE</h2>
		<ul>
				<li><a href="ViewTimetable1.php">View Timetable</a></li>
		</ul>
		</li>
		</ul>
		<ul>
		<li>
		  <h2>LOGOUT</h2>
		  <ul>
		  <li><a href="Login.php">LOGOUT </a></li>
		  </ul>	
		</li></ul>
		<ul>
		<li>
		  <h2>CHANGE PASSWORD</h2>
		  <ul>
		  <li><a href="ChangePwd1.php">CHANGE PASSWORD </a></li>
		  </ul>	
		</li></ul>';
	}
if($role=="hod")
	{
		echo '
		<ul>
		<li>
		  <h2>HOME</h2>
		  <ul>
		  <li><a href="HomePage.php">HOME </a></li>
		  </ul>	
		</li></ul>
		<ul>
		<li>
		  <h2>NOTICE</h2>
		  <ul>
				<li><a href="UploadNotice.php">Upload</a></li>
				<li><a href="ApproveNotice.php">Approve Notice</a></li>
		</ul>
		</li></ul>
		<ul>
		<li>
		  <h2>ATTENDANCE</h2>
		  <ul>
		  		<li><a href="Attendance.php">Add Attendance</a></li>
				<li><a href="Defaulters.php">Defaulters</a></li>

		</ul>
		</li></ul>
		<ul>
		<li>
		  <h2>E-LIBRARY</h2>
		  <ul>
		  		<li><a href="UploadFile.php">Upload Document</a></li>
				<li><a href="ListFiles.php">Search/Download Document</a></li>
				<li><a href="ApproveFile.php">Approve Document</a></li>
		  </ul>
		</li></ul>
		<ul>
		<li>
		  <h2>F-SCHEDULE</h2>
		<ul>
			<li><a href="PlannedSche.php">Plan Schedule</a></li>
			<li><a href="actualsche.php">Actual Schedule</a></li>
		</ul>
		</li></ul>
		<ul>
		<li>
		  <h2>TIMETABLE</h2>
		<ul>
				<li><a href="ViewTimetable1">View Timetable</a></li>
		</ul>
		</li></ul>
		<ul>
		<li>
		  <h2>FEEDBACK</h2>
		<ul>
				<li><a href="FeedbackReport.php">View Feedback Tabular Report</a></li>
				<li><a href="feedBar1.php">View Feedback Graphical Report</a></li>
		</ul>
		</li>
		</ul>
		
		<ul>
		<li>
		  <h2>LOGOUT</h2>
		  <ul>
		  <li><a href="Login.php">LOGOUT </a></li>
		  </ul>	
		</li></ul>
		<ul>
		<li>
		  <h2>CHANGE PASSWORD</h2>
		  <ul>
		  <li><a href="ChangePwd1.php">CHANGE PASSWORD </a></li>
		  </ul>	
		</li></ul>';
	}
	
	{
		echo '
		<ul>
		<li>
		 <h2>HOME</h2>
		  <ul>
		  <li><a href="HomePage.php">HOME </a></li>
		  </ul>
		  </li></ul>
		  <ul>
		<li>
		  <h2>NOTICE</h2>
		  	</li></ul>
		<ul>
		<li>
		  <h2>ATTENDANCE</h2>
		  </li>
		  </ul>
		<ul>
		<li>
			  <h2>E-LIBRARY</h2>
		  </li></ul>
		  <ul>
		<li>
		  <h2>F-SCHEDULE</h2>
		</li>
		</ul>
		<ul>
		<li>
		  <h2>E-EXAM</h2></li>
		</ul>
		<ul>
		<li>
		  <h2>FEEDBACK</h2>
		</li>
		</ul>';
	}
?>      
</td></tr>
<tr><td><div id="Message" style="display:none; text-align:center; border: #999 thin solid; padding:10px"></div>
<script type="text/javascript" src="jQueryLib/jquery-1.7.1.js"></script>

    <script type="text/javascript">
	$(document).ready(MsgLoad());
	function MsgLoad()
	{
		$msg=document.getElementById("msg").value;
		if($msg!="")
		{
			
			$("#Message").html($msg);
			$("#Message").fadeIn(500);	 	
			$("#Message").fadeOut(20000);
		}
	}
</script>
</td></tr>
</table>
</div>

</body></html>
<!--<tr><td><font size="+3" face="Arial"><center><b>SHAH AND ANCHOR KUTCHHI ENGINEERING COLLEGE</b></center></font></td></tr>-->