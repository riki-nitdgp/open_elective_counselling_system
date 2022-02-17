<!DOCTYPE html>
<head>
<?php 
 session_start();
 
if(!isset($_SESSION['uname'])){
header("location:home.php");
}
include "connect.php";
$sql="select Lastdate from schedule";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
$ldate=$row['Lastdate'];
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
      <h2 class="title" style="text-align:center">Set Last Date of E-Counselling </h2>
	  <form action="setdate.php" method="post" name="" >
	  <p align="center" style="font-size:20px">Last Date:
	    <input name="date" type="date"  />
	    </p>
	  <p align="center">
	    <input name="submit" type="submit" class="links" value="Set" />
	    </p>
		<p align="center" style="color:#FF0000; font-size:15px; font-weight:bold"> Please Use Chrome Browser</p>
		<p align="center" style="color:#FF0000; font-size:15px; font-weight:bold">Last Date:<?php echo $ldate?></p>
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
