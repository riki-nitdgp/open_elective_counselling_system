<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php session_start();
 
if(!isset($_SESSION['email'])){
header("location:home.php");
$regt=$_SESSION['reg_no'];
}
?>
<head>
<title>Update Password</title>
<script>
function checkpass(){
flag = true;
if(updatepass.cpass.value==""){
alert("Please Enter Current Password")
flag=false;
updatepass.cpass.focus();
}
else if(updatepass.npass.value==""){
alert("Please Enter New Password")
flag=false;
updatepass.npass.focus();
}
else if(updatepass.cpwd.value==""){
alert("Please Enter New Password")
flag=false;
updatepass.cpass.focus();
}
else if(updatepass.cpwd.value!=updatepass.npass.value){
alert("Password Dosn't Match")
flag=false;
updatepass.cpwd.focus();
}
return flag;
}
</script>
<?php include 'connect.php';?> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-size: 16px}
.style2 {color: #0AC6E7}
-->
</style>
</head>

<body>
<?php include 'resource/userheader.php';?>
<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
<h2 class="title" style="text-align:center">Welcome:<?php echo $_SESSION['Name'];?> </h2>
			  
				  </p><div id="sliderFrame">
				  <p align="center" color="red"><span class="style5">
				    
				  </span></p>
				  
				</div>
		  </div>
			
		  <div class="post">
		  
		  <br><h2 class="style6" style="text-align:center;">Update Password</h2>
		  <p class="style6" style="text-align:center;">&nbsp;</p>
		   <form name="updatepass" method="post" action="uppass.php" onSubmit=" return checkpass()" >
				  <TABLE align ="center"width=590 height="450"border=0 cellPadding=1 cellSpacing=1 id="table1" style="WIDTH: 499px; HEIGHT: 135px; background-color:#F7F7F7">
  
  <TR>
    <TD width="130" height="33"><p><strong>Current Password</strong>:<FONT color=red>*&nbsp;&nbsp;</FONT><FONT color=red>&nbsp;</FONT></p>
      </TD>
    <TD width="263"><p><input name="cpass" type="password">
      </p>
      </TD></TR>
	    <td height="50"><div align="left"><strong>New Password</strong>: <FONT color=red>*</FONT> </div></td>
          <td><p><input type="password" name="npass"    /></p>
  </td>
  <td width="96" align="left"><div id="status"></div></td>
  </tr>
      <td height="34"><strong>Confrim New Password : <FONT color=red>*</FONT></strong> </td>
        <td><p>
  <input type="password" name="cpwd"  />
  <input type="hidden" name="sespass" value="<?php echo $_SESSION['password'];?>">
<input type="hidden" name="sesreg"value="<?php echo $_SESSION['reg_no']; ?>" />
  </p>
  </td>
  </tr>
  <td> <div align="center">
    <p>&nbsp;      </p>
    <p>
      <input type="submit" name="Submit" value="Submit" class="links" align="center" id="mySubmit">
      </p>
  </div></td></tr>
  </TABLE>
  </form>

</div>
</div>
<?php include 'resource/usersidebar.php';?>
</div>
</div>
</div>

<div id="footer">
  <div id="footer-content">
    <div id="footer-right"> <a href="welcomeuser.php">Home</a></div>
    <div id="footer-left"><strong> NIT Durgapur </strong><span class="style2">&nbsp; <span class="style1">Design by: Souvik Bera , Riki Mondal and Atindra Nath Pal</span></span></div>
  </div>
	</div>
</body>
</html>
