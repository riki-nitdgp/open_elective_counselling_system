<html>
<?php
session_start();
 
if(!isset($_SESSION['email'])){
header("location:home.php");
}
?>
<head>
<title>Seat Information</title>
<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
table#t01 tr:nth-child(even) {
    background-color:#eee;
	width:100px;
	color:#000000;
	 text-align:center;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
   width:100px;
   color:#000000;
   text-align:center;
}
table#t01 th	{
    background-color: #0AC6E7;
	text-align:center;
    color: white;
	width:100px;
}
.style1 {
	font-size: 16px;
	color: #0AC6E7;
}
</style>
</head>
<?php
include 'connect.php';
$sql= "select * from subjects";
$result=mysqli_query($conn,$sql);
?>


<body>
<?php include 'resource/userheader.php';?>
 <div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
		  <div class="post">
      <h2 class="title" style="text-align:center">Subject List For Open Elective</h2>
<br><h2 class="style6" style="text-align:center;">Subject List For 5th Semester</h2><br>
	

<table id="t01">
           <TR>
                
               
                <TH > Subject Code</TH>
                <TH>Subject</TH>
                <TH>Department</TH>
				</TR>
				<?php while($row = mysqli_fetch_array($result)){?>
				<tr>
					<td><?php echo $row['subcode'];?></td>
					<td><?php echo $row['subject'];?></td>
					<td><?php echo $row['department'];?></td>
					
					</tr>
					<?php }?>
					</table>

					</div>
					</div>
					</div>
					<?php include 'resource/usersidebar.php';?>
					</div>
					</div>
					<div>
					
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
