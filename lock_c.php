
<!DOCTYPE html!>
<?php 
session_start();
$rollno=$_SESSION['roll_no'];
if(!isset($_SESSION['email'])){
header("location:home.php");
}
?>
<head>
<title>Lock</title>
<?php include "resource/userheader.php";?>

</head>


</head>
<body>

	<!-- end #menu -->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
<h2 class="title" style="text-align:center">YOU HAVE SUCESFULLY LOCK YOUR CHOICES!!! </h2>
			  
				  </p><div id="sliderFrame">
				  <h1 align="center">CHOICE FILLING COMPLETED </h1>
				  <p align="center" color="red"><span class="style5">
				    
				  </span></p>
				  
				</div>
		  </div>
			
		  <div class="post">
		  <h1>Please Wait for The Result ....</h1><br>
		  <h1>Have A Nice Day & Best Of Luck!!</h1><br>
		  <a href="welcomeuser.php" class="style1">Click Here</a>
		  
		  <br>
					 
		  <br>
		  <br>
		  <br>
		     <br>
		  <br>
		  <br>
		  <br>
		     <br>
		  <br>
		  <br>
		  <br>
		     <br>
		  <br>
		  <br>
		  <br>
		     <br>
		  <br>
		  <br>
			  <h2 align="center" class="title"><a href="#">Design &nbsp; Developed by Dept. of IT, NITDGP</a></h2>
		  </div>
		  <div style="clear: both;"></div>
		</div>
		<!-- end #content -->
		<?php include "resource/usersidebar.php";?>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
</div>
	<div id="footer">
  <div id="footer-content">
    <div id="footer-right"> <a href="welcomeuser.php">Home</a></div>
    <div id="footer-left"><strong> NIT Durgapur </strong>&nbsp; <span class="style1">Design by: Souvik Bera , Riki Mondal and Atindra Nath Pal</span></div>
  </div>
	</div>
</body>
</html>


