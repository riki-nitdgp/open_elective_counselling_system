<?php
session_start();
 
if(!isset($_SESSION['email'])){
header("location:home.php");
}
?>
<html>
<body>
<?php include "resource/userheader.php";?>

	<!-- end #menu -->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
<h2 class="title" style="text-align:center">Welcome:<?php echo $_SESSION['Name'];?> </h2>
			  
				  </p><div id="sliderFrame">
				  <h1 align="center" style="color:#00CCCC"><marquee> WELCOME TO E-COUNSELLING</marquee></h1>
				  <p align="center" color="red"><span class="style5">
				    
				  </span></p>
				  
				</div>
		  </div>
			
		  <div class="post">
		  
		  <br><h2 class="style6" style="text-align:center;">Personal Information</h2>
		  <p class="style6" style="text-align:center;">&nbsp;</p>
		  <TABLE align ="center"width=478 height="265"border=0 cellPadding=1 cellSpacing=1 id="table1" style="WIDTH: 499px; HEIGHT: 135px; background-color:#F7F7F7">
  
  <TR>
    <TD width="192"><p><span class="style8">Name</span></p>
      </TD>
    <TD width="300"><p class="style11"><?php echo $_SESSION['Name'];?>
      </p>      </TD>
  </TR>
	    <td height="65"><div align="left"><span class="style8">Registration No </span></div></td>
          <td><p class="style11"><?php echo $_SESSION['reg_no'];?>
		  
		  
          </p>  </td>
  </tr>
      <td height="61"><span class="style9">Roll Number </span> </td>
        <td><p class="style11"><?php echo $_SESSION['roll_no'];?>
        </p>  </td>
  </tr>
  <td height="61"><span class="style9">Department: </span> </td>
        <td><p class="style11"><?php echo $_SESSION['department'];?>
        </p>  </td>
  </tr>
  <td height="61"><span class="style9">CGPA: </span> </td>
        <td><p class="style11"><?php echo $_SESSION['gpa'];?>
        </p>  </td>
  </tr>
        <td height="61"><span class="style9">DATE OF BIRTH </span></td>
        <td><p class="style11"><?php echo $_SESSION['dob'];?>
        </p>  </td>
  </tr>
        <td height="61"><span class="style9">USERID </span></td>
        <td><p class="style11"><?php echo $_SESSION['email'];?>
        </p>  </td>
  </tr>
  <td height="61"><span class="style8">SEMESTER: </span> </td>
        <td><p class="style11"><?php echo $_SESSION['semester'];?>
        </p>  </td>
  </tr>
  
  </tr>
  </TABLE>
		  <p class="style6" style="text-align:center;">&nbsp;</p>
		  <p align="justify"></p>
		  <h2 align="center" class="title"><a href="#">Design &nbsp; Developed by Dept. of IT, NITDGP</a></h2>
		  </div>
		  <div style="clear: both;"></div>
		</div>
		<!-- end #content -->
		<?php include 'resource/usersidebar.php';?>
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
	<!-- end #footer -->
      
	<!-- end #footer -->
</body>
</html>


