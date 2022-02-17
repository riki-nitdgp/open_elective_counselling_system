<?php 
include "connect.php";
 session_start();
 
if(!isset($_SESSION['email'])){
header("location:home.php");
}
?>
<html>
<head>
<title>Result</title>
</script>
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
</style>
</head>
<body>
<?php include "resource/userheader.php";

$roll=$_SESSION['roll_no'];
$sql="select * from elective where rollno='$roll'";
$result=mysqli_query($conn,$sql);
?>
<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
		  <div class="post">
      <h2 class="title" style="text-align:center">Result</h2>
<table id="t01">
         <tr>
		 	<th>Name</th>
			<th>Roll No</th>
			<th>Subject Code</th>
			</tr>
			<?php while($row=mysqli_fetch_array($result)){?>
			<tr>
				<td><?php echo $row['Name'];?></td>
				<td><?php echo $row['rollno'];?></td>
				<td><?php echo $row['subcode'];?></td>
				</tr>
			<?php }?>
			</table>
			<br />
			<br />
</div>
</div>
</div>
</div>
</div>
<?php include "resource/usersidebar.php";?>
<div id="footer">
  <div id="footer-content">
    <div id="footer-right"> <a href="welcomeuser.php">Home</a></div>
    <div id="footer-left"><strong> NIT Durgapur </strong><span class="style2">&nbsp; <span class="style1">Design by: Souvik Bera , Riki Mondal and Atindra Nath Pal</span></span></div>
  </div>
	</div>
</body>
</html>

</body>
