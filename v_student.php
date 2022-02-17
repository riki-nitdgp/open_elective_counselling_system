<html>
<head>
<?php 
 session_start();
 
if(!isset($_SESSION['uname'])){
header("location:home.php");
}
?>
<title>Student Verification</title>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/work.js"></script>
<script>
function confrim(objConfrim){
var roll=objConfrim.value;
//alert(roll);
//alert(id1);

$.ajax({
type: "POST",
url: "ajax_con.php",
data:{roll: roll},
cache: false,
success: function(html)
{
$("#ex").html(html);
window.location.reload();

} 
});

}

</script>
<script>
function rejected(objrej){
var roll=objrej.value;
//alert(roll);

$.ajax({
type: "POST",
url: "ajax_del2.php",
data:{roll: roll},
cache: false,
success: function(html)
{
$("#ex").html(html);
window.location.reload();

} 
});
}

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
<?php 
include "connect.php";
include "resource/adminheader.html";

 ?> 
 <?php 
 $sql="select * from registration where valid='0'";
 $result=mysqli_query($conn,$sql);
 /*while($row = mysqli_fetch_array($result)){
 $name=$row['Name'];
 $regt=$row['reg_no'];
 $roll=$row['roll_no'];
 $cgpa=$row['gpa'];
 $dob=$row['dob'];
 $email=$row['email'];
 $sem=$row['semester'];
 }*/
 ?>
 </head>
 <body>
 <div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
		  <div class="post">
      <h2 class="title" style="text-align:center">Student Verification</h2>
<div id="confrim">
	<?php

echo'<table id="t01">';
           echo '<TR>';
                
               
                echo'<TH > Name</TH>';
                echo'<TH>Registration No.</TH>';
                echo'<TH>Roll No.</TH>';
				 echo'<TH>Department</TH>';
                echo'<TH>C.G.P.A</TH>';
                echo'<TH>Semester</TH>';
                echo'<TH>Date Of Birth</TH>';
                echo'<TH>Email</TH>';
				 echo'<th>Verified</th>';
				echo'<th>Delete</th>';
				
				 
				
				
          echo'</TR> ';

while($row = mysqli_fetch_array($result)){
 		    
			echo '<tr ><td>'.$row['Name'].'</td>';
 		    echo  '<td>'.$row['reg_no'].'</td>';
			echo  '<td>'.$row['roll_no'].'</td>';
			echo  '<td>'.$row['department'].'</td>';
			echo  '<td>'.$row['gpa'].'</td>';
			echo  '<td>'.$row['semester'].'</td>';
			echo  '<td>'.$row['dob'].'</td>';
			echo  '<td>'.$row['email'].'</td>';
echo '<td ><button type="button" onClick="confrim(this)" style="background:url(images/Confrim.png) no-repeat;cursor:pointer;border: none;width:32px;height:32px; class="DelButton" name="del1[]" value='.$row['roll_no'].' ></button>';
echo '<td ><button type="button" onClick="rejected(this)" style="background:url(images/Delete.png) no-repeat;cursor:pointer;border: none;width:120px;height:40px; class="DetailsButton" name="del1[]" value='.$row['roll_no'].' ></button>';

			echo'</tr>';
     }
 echo'</table>';
 ?>
 </div>
	  </div>
	  </div>
	  <?php  include "resource/adminsidebar.html"; ?>
	  </div>
	  </div>
	  </div>
 <?php include "resource/adminfooter.html"?>
 </body>
 </head>
 </html>