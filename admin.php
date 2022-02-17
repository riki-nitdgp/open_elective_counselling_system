<?php 
 session_start();
 
if(!isset($_SESSION['uname'])){
header("location:home.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>NIT DURGAPUR</title>
<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
 <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<?php
?> 
<body>
<?php 
include "resource/adminheader.html";
?>
<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
		  <div class="post">
      <h2 class="title" style="text-align:center">Welcome Admin </h2>
      <div class="extra">
	  <div id="extra1">
	  <a href="v_student.php"><h2>Student Verification</h2></a>
		  </div>
		  </div>
		  <div class="extra">
		  <div id="extra1">
	  <a href="studentdetails.php" ><h2>Student Details</h2></a>
		  </div>
		  </div>
		  <div class="extra">
		  <div id="extra1">
	  <a href="subject.php"><h2>Elective Subjects</h2></a>
		  </div>
		  </div>
		  <div class="extra">
		  <div id="extra1">
	  <a href="addsubject.php"><h2>Add New Elective Subjects</h2></a>
		  </div>
		  </div>
		  <div class="extra">
		  <div id="extra1">
	  <a href="schedule.php"><h2>Set Last Date </h2></a>
		  </div>
		  </div>
		   <div class="extra">
		  <div id="extra1">
	  <a href="unlock.php"><h2>Unlock Choice </h2></a>
		  </div>
		  </div>
		  
	</div>
	
	</div>
	<?php include "resource/adminsidebar.html";?>
	</div>
</div>
	
<p>&nbsp;</p>
<?php include "resource/adminfooter.html"?>
</body>

</html>
