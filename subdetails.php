<html>
<?php
session_start();
 
if(!isset($_SESSION['uname'])){
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
<?php include 'resource/adminheader.html';
 
include 'connect.php';
$sql= "select * from subjectlist";
$result=mysqli_query($conn,$sql);
?>


<body>
 <div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
		  <div class="post">
      <h2 class="title" style="text-align:center">Seat Details</h2>
<br><h2 class="style6" style="text-align:center;">Seat Details For 5th Semester</h2><br>
	

<table id="t01">
           <TR>
                
               
                <TH > Subject Code</TH>
                <TH>Subject</TH>
                <TH>Department</TH>
                <TH>B.T</TH>
                <TH>CHE</TH>
				<th>CE</th>
                <TH>CSE</TH>
                <TH>ECE</TH>
				<th>IT</th>
				 <th>EE</th>
				<th>ME</th>
				<th>MME</th>
				<th>Total</th>
				</TR>
				<?php while($row = mysqli_fetch_array($result)){?>
				<tr>
					<td><?php echo $row['subcode'];?></td>
					<td><?php echo $row['subject'];?></td>
					<td><?php echo $row['department'];?></td>
					<td><?php echo $row['BT'];?></td>
					<td><?php echo $row['CH'];?></td>
					<td><?php echo $row['CE'];?></td>
					<td><?php echo $row['CS'];?></td>
					<td><?php echo $row['EC'];?></td>
					<td><?php echo $row['IT'];?></td>
					<td><?php echo $row['EE'];?></td>
					<td><?php echo $row['ME'];?></td>
					<td><?php echo $row['MM'];?></td>
					<td><?php echo $row['Total'];?></td>
					</tr>
					<?php }?>
					</table>

					</div>
					</div>
					</div>
					<?php include 'resource/adminsidebar.html';?>
					</div>
					</div>
					<div>
					
					</div>
	<?php include "resource/adminfooter.html"?>
	  
      
	<?php mysqli_close($conn);?>
</body>

</html>