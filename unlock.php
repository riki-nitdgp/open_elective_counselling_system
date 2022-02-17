<!DOCTYPE html>
<head>
<script>
function check(){
flag=true;
if(set.regno.value==""){
alert("Enter Registration Number");
flag=false;
}

return flag;
}

</script>
<?php 
 session_start();
 
if(!isset($_SESSION['uname'])){
header("location:home.php");
}

?>

</head>
<body>
<?php include "resource/adminheader.html";?>
<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
		  <div class="post">
      <h2 class="title" style="text-align:center">Unlock Choice On Request </h2>
	  <form action="un_lock.php" method="post" name="set" onsubmit="return check()" >
	  <p align="center" style="font-size:20px">Enter Registration No
	    <input name="regno" type="text" maxlength="8"   />
	    </p>
	  <p align="center">
	    <input name="submit" type="submit" class="links" value="Unlock" />
	    </p>
		<p align="center" style="color:#FF0000; font-size:15px; font-weight:bold"> Please Use Chrome Browser</p>
	  </form>
	  </div>
	  </div>
	  </div>
	  <?php include "resource/adminsidebar.html";?>
	  </div>
	  </div>
	  <?php include "resource/adminfooter.html";?>
	  </body>
</html>
