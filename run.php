<?php 
 session_start();
 
if(!isset($_SESSION['uname'])){
header("location:home.php");
}
?>
<html>
<head><title>Counselling Process</title>
</head>
<body>
<?php 
include "resource/adminheader.html";?>
<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
		  <div class="post">
      <h2 class="title" style="text-align:center">Counselling Process </h2>
	  <div class="extra">
	  <div id="extra1">
	  <a href="process.php"><h2>Start Counselling Process For 5th Semester</h2></a>
	    </div>
</div>
<div class="extra">
	  <div id="extra1">
	  <a href=""><h2>Start Counselling Process 8th Semester</h2></a>
	    </div>
</div>

		 <div class="extra2">
		 <div id="extra1">
		 <p1>IT WILL TAKE FEW MINUTES KEEP PATIENCE FOR SOME TIME... </p1><br />
		 <p1 style="color:#FF0000; font-size:18px;"> WARNING!!! YOU CAN RUN THE COUNSELLING PROCESS ONLY ONCE </p1>
		 <br />
		 <p1>IF YOU WANT TO RUN MORE THAN ONE TIME YOU HAVE TO CLICK ON CLEAR DELETE ALL THE SUBJECTS FROM SUBJECT LIST AND RESET IT </p1>
		 <p1>BE CAREFULL</p1>
		 </div>
		 </div>
		 <div class="extra">
	  <div id="extra1">
	  <a href="clear.php"><h2>Clear All</h2></a>
	    </div>
      </div>
	  <div class="extra2">
		 <div id="extra1">
		 <p1>IT WIL CLEAR ALL THE DATA LIKE SUBJECT LIST , SEAT MATRIX, RESULT. YOU HAVE TO AGAIN RESET ALL OF THEM </p1><br />
		 
	
		 <p1>BE CAREFULL</p1>
		 </div>
		 </div>
		 </div>
		 </div>
		 <?php include "resource/adminsidebar.html";?>
		 </div>
		 </div>
		 </div>
		 <?php include "resource/adminfooter.html"?>
		 </body>
		 </html>