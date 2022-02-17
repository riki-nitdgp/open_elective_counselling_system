<html>
<head>
<title>Result</title>
<?php 
 session_start();
 
if(!isset($_SESSION['uname'])){
header("location:home.php");
}
?>
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
<?php 
include "connect.php";
include "resource/adminheader.html";

$sql="select * from elective where subcode like 'BT%'";
$bt=mysqli_query($conn,$sql);

?>
<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
		  <div class="post">
      <h2 class="title" style="text-align:center">Biotechnology</h2>
<table id="t01">
         <tr>
		 	<th>Name</th>
			<th>Roll No</th>
			<th>Subject Code</th>
			
			</tr>
			
			<?php while($row=mysqli_fetch_array($bt)){?>
			<tr>
				<td><?php echo $row['Name'];?></td>
				<td><?php echo $row['rollno'];?></td>
				<td><?php echo $row['subcode'];?></td>
				</tr>
			<?php }?>
			</table>
			<br />
			<br />
	 <h2 class="title" style="text-align:center">Civil Engineering</h2>	
	 <?php 
	 $sql2="select * from elective where subcode like 'CE%'";
	 $ce=mysqli_query($conn,$sql2);
	 ?>		
	 <table id="t01">
         <tr>
		 	<th>Name</th>
			<th>Roll No</th>
			<th>Subject Code</th>
			
			</tr>
			
			<?php while($row1=mysqli_fetch_array($ce)){?>
			<tr>
				<td><?php echo $row1['Name'];?></td>
				<td><?php echo $row1['rollno'];?></td>
				<td><?php echo $row1['subcode'];?></td>
				
				</tr>
			<?php }?>
			</table>
			<br />
			</br>
			
			<h2 class="title" style="text-align:center">Chemical Engineering</h2>	
	 <?php 
	 $sql3="select * from elective where subcode like 'CH%'";
	 $che=mysqli_query($conn,$sql3);
	 ?>		
	 <table id="t01">
         <tr>
		 	<th>Name</th>
			<th>Roll No</th>
			<th>Subject Code</th>
			
			</tr>
			
			<?php while($row2=mysqli_fetch_array($che)){?>
			<tr>
				<td><?php echo $row2['Name'];?></td>
				<td><?php echo $row2['rollno'];?></td>
				<td><?php echo $row2['subcode'];?></td>
				
				</tr>
			<?php }?>
			</table>
			<br />
			</br>
			<h2 class="title" style="text-align:center">Computer Science And Engineering</h2>	
	 <?php 
	 $sql4="select * from elective where subcode like 'CS%'";
	 $cse=mysqli_query($conn,$sql4);
	 ?>		
	 <table id="t01">
         <tr>
		 	<th>Name</th>
			<th>Roll No</th>
			<th>Subject Code</th>
			
			</tr>
			
			<?php while($row3=mysqli_fetch_array($cse)){?>
			<tr>
				<td><?php echo $row3['Name'];?></td>
				<td><?php echo $row3['rollno'];?></td>
				<td><?php echo $row3['subcode'];?></td>
				</tr>
			<?php }?>
			</table>
			<br />
			</br>
		<h2 class="title" style="text-align:center">Electronics And Communication Engineering</h2>		
			<?php 
	 $sql5="select * from elective where subcode like 'EC%'";
	 $ece=mysqli_query($conn,$sql5);
	 ?>		
	 <table id="t01">
         <tr>
		 	<th>Name</th>
			<th>Roll No</th>
			<th>Subject Code</th>
			
			</tr>
			
			<?php while($row4=mysqli_fetch_array($ece)){?>
			<tr>
				<td><?php echo $row4['Name'];?></td>
				<td><?php echo $row4['rollno'];?></td>
				<td><?php echo $row4['subcode'];?></td>
				
				</tr>
			<?php }?>
			</table>
			<br />
			</br>
			<h2 class="title" style="text-align:center">Electrical Engineering</h2>	
			<?php 
	 $sql6="select * from elective where subcode like 'EE%'";
	 $ee=mysqli_query($conn,$sql6);
	 ?>		
	 <table id="t01">
         <tr>
		 	<th>Name</th>
			<th>Roll No</th>
			<th>Subject Code</th>
			
			</tr>
			
			<?php while($row5=mysqli_fetch_array($ee)){?>
			<tr>
				<td><?php echo $row5['Name'];?></td>
				<td><?php echo $row5['rollno'];?></td>
				<td><?php echo $row5['subcode'];?></td>
				</tr>
			<?php }?>
			</table>
			<br />
			</br>
			<h2 class="title" style="text-align:center">Information Technology</h2>	
			<?php 
	 $sql7="select * from elective where subcode like 'IT%'";
	 $it=mysqli_query($conn,$sql7);
	 ?>		
	 <table id="t01">
         <tr>
		 	<th>Name</th>
			<th>Roll No</th>
			<th>Subject Code</th>
			
			</tr>
			
			<?php while($row6=mysqli_fetch_array($it)){?>
			<tr>
				<td><?php echo $row6['Name'];?></td>
				<td><?php echo $row6['rollno'];?></td>
				<td><?php echo $row6['subcode'];?></td>
				</tr>
			<?php }?>
			</table>
			<br />
			</br>
			<h2 class="title" style="text-align:center">Mechanical Engineering</h2>	
			<?php 
	 $sql8="select * from elective where subcode like 'ME%'";
	 $me=mysqli_query($conn,$sql8);
	 ?>		
	 <table id="t01">
         <tr>
		 	<th>Name</th>
			<th>Roll No</th>
			<th>Subject Code</th>
			
			</tr>
			
			<?php while($row7=mysqli_fetch_array($me)){?>
			<tr>
				<td><?php echo $row7['Name'];?></td>
				<td><?php echo $row7['rollno'];?></td>
				<td><?php echo $row7['subcode'];?></td>
				</tr>
			<?php }?>
			</table>
			<br />
			</br>
			<h2 class="title" style="text-align:center">Metallurgical And Material Science Engineering</h2>	
			<?php 
	 $sql9="select * from elective where subcode like 'MM%'";
	 $mme=mysqli_query($conn,$sql9);
	 ?>		
	 <table id="t01">
         <tr>
		 	<th>Name</th>
			<th>Roll No</th>
			<th>Subject Code</th>
			
			</tr>
			
			<?php while($row8=mysqli_fetch_array($mme)){?>
			<tr>
				<td><?php echo $row8['Name'];?></td>
				<td><?php echo $row8['rollno'];?></td>
				<td><?php echo $row8['subcode'];?></td>
				
				</tr>
			<?php }?>
			</table>
			<br />
			</br>
			
			<h2 class="title" style="text-align:center">Physics</h2>	
			<?php 
	 $sql10="select * from elective where subcode like 'PH%'";
	 $phy=mysqli_query($conn,$sql10);
	 ?>		
	 <table id="t01">
         <tr>
		 	<th>Name</th>
			<th>Roll No</th>
			<th>Subject Code</th>
			
			</tr>
			
			<?php while($row9=mysqli_fetch_array($phy)){?>
			<tr>
				<td><?php echo $row9['Name'];?></td>
				<td><?php echo $row9['rollno'];?></td>
				<td><?php echo $row9['subcode'];?></td>
				
				</tr>
			<?php }?>
			</table>
			<br />
			</br>
			<h2 class="title" style="text-align:center">Department Of Humanities </h2>	
			<?php 
	 $sql11="select * from elective where subcode like 'HS%'";
	 $hu=mysqli_query($conn,$sql11);
	 ?>		
	 <table id="t01">
         <tr>
		 	<th>Name</th>
			<th>Roll No</th>
			<th>Subject Code</th>
			
			</tr>
			
			<?php while($row10=mysqli_fetch_array($hu)){?>
			<tr>
				<td><?php echo $row10['Name'];?></td>
				<td><?php echo $row10['rollno'];?></td>
				<td><?php echo $row10['subcode'];?></td>

				</tr>
			<?php }?>
			</table>
			<br />
			</br>
				<h2 class="title" style="text-align:center">Department Of Management Studies </h2>	
			<?php 
	 $sql12="select * from elective where subcode like 'XE%'";
	 $mg=mysqli_query($conn,$sql12);
	 ?>		
	 <table id="t01">
         <tr>
		 	<th>Name</th>
			<th>Roll No</th>
			<th>Subject Code</th>
			
			</tr>
			
			<?php while($row11=mysqli_fetch_array($mg)){?>
			<tr>
				<td><?php echo $row11['Name'];?></td>
				<td><?php echo $row11['rollno'];?></td>
				<td><?php echo $row11['subcode'];?></td>
				</tr>
			<?php }?>
			</table>
			<h2 class="title" style="text-align:center">Mathematics </h2>	
			<?php 
	 $sql13="select * from elective where subcode like 'MA%'";
	 $ma=mysqli_query($conn,$sql13);
	 ?>		
	 <table id="t01">
         <tr>
		 	<th>Name</th>
			<th>Roll No</th>
			<th>Subject Code</th>
			
			</tr>
			
			<?php while($row12=mysqli_fetch_array($ma)){?>
			<tr>
				<td><?php echo $row12['Name'];?></td>
				<td><?php echo $row12['rollno'];?></td>
				<td><?php echo $row12['subcode'];?></td>
				</tr>
			<?php }?>
			</table>
			<br />
			</br>
			</div>
			</div>
			<?php include "resource/adminsidebar.html";?>
			</div>
			</div>
			</div>
		<?php include 'resource/adminfooter.html'?>
		</body>
		</html> 