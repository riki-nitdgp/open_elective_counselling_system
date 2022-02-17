<?php
session_start();
 
if(!isset($_SESSION['uname'])){
header("location:home.php");
}
?>
<!DOCTYPE html!>


<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>NIT DURGAPUR</title>
<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
 <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
<!--
.style5 {color: #FF0000}
.style6 {
	color: #0099FF;
	font-weight: bold;
}
.style8 {color: #0099FF; font-weight: bold; font-size: large; }
.style9 {
	font-size: large;
	font-weight: bold;
	color: #0099CC;
}
.style11 {
	font-size: 14;
	font-weight: bold;
}
-->
</style>
<script>
function validate1(){
 flag=true;
 if(login.email.value=="")
 {
 alert("Please Enter Your Username")
 flag=false;
login.email.focus()

}
else if(login.pass.value=="")
{
alert("Please Enter Your Password")
flag=false;
login.pass.focus()
}
return flag;
}
</script>
<script>
function validate(){
flag = true
if(regt.name.value==""){
alert("Pls Enter Your Name")
flag=false
regt.name.focus()
}
else if(regt.regn.value==""){
alert("Pls Enter Your Registration No. ")
flag=false
regt.regn.focus()
}
else if(regt.roll.value==""){
alert("Pls enter Your Roll No.")
flag=false
regt.regn.focus()
}
else if(regt.dob.value==""){
alert("Pls Enter Your DOB")
flag=false
regt.dob.focus()
}
else if (regt.sem.value==""){
alert("Select Semester")
flag =false
regt.sem.focus()
}
else if(regt.pwd.value==""){
alert("Please Enter Your Password")
flag=false;
regt.pwd.focus()
}
return flag;
}
</script>
</head>
<body>
<div class="page-content">
  <div class="row outterWrapper">
    <div class="columns twelve large-12">
      <div class="row header">
        <div class="columns twelve large-12">
          <div align="left">
            <p><a href="index.html"><img src="images/campus.png" alt="" width="1333" height="139" /></a>
          </div>
        </div>
      </div>
		
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="home.html">Home &nbsp;&nbsp;&nbsp;</a></li>
			<li><a href="regt.php">Student Info &nbsp;&nbsp;&nbsp;</a></li>
			<li><a href="#">Seat Infornation &nbsp;&nbsp;&nbsp;</a></li>
			<li><a href="logout.php">Logout&nbsp;&nbsp;&nbsp;</a>
			 
			
		
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
<h2 class="title" style="text-align:center">Welcome:<?php echo $_SESSION['username'];?> </h2>
			  
				  </p><div id="sliderFrame">
				  <h1 align="center" style="color:#00CCCC"><marquee> WELCOME TO E-COUNSELLING</marquee></h1>
				  <p align="center" color="red"><span class="style5">
				    
				  </span></p>
				  
				</div>
		  </div>
			
		  <div class="post">
		  <form>
		    <p class="style6" style="text-align:center;"><input type="button" value="PENDING APPROVAL" class="links" text align="center"/ href=""> 
		  <input type="button" value="STUDENT LIST" class="links" text align="center"/>
		  </p>
		  </form name="valid" action=">
		  <p align="justify"></p>
		  <h2 align="center" class="title"><a href="#">Design &nbsp; Developed by Dept. of IT, NITDGP</a></h2>
		  </div>
		  <div style="clear: both;"></div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
		  <ul><li>
				<h2 align="left"><strong>Information </strong></h2>
				<ul>
					<li><strong><a href="#">Notice</a></strong></li>
					<li><strong><a href="#">Seats Information </a></strong></li>
					<li><strong><a href="#">Subject List </a></strong></li>
					<li><strong><a href="#">About Us </a></strong></li>
					<li><strong><a href="#">Departments</a></strong></li>
			    </ul>
				</li>
			  <li></li>
	        <li></li>
	        <li></li>
	        <li></li>
	        <li></li>
	        <li></li>
	        <li></li>
	        <li></li>
	        <li></li>
	        <li></li>
	        <li></li>
	        <li></li>
	        <li></li>
	        <li></li>
          </ul>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <ul>
		    <li>
		      <h2>&nbsp;</h2>
            </li>
	      </ul>
	    </div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
</div>
	<div id="footer">
		<p>Design &amp; Developed by Dept. of IT, NITDGP 3rd year riki mondal </p>
</div>
	<!-- end #footer -->
      
	<!-- end #footer -->
</body>
</html>


