<html>
<head>
<?php 
 session_start();
 
if(!isset($_SESSION['uname'])){
header("location:home.php");
}
?>
<script
<title>Subject</title>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/work.js"></script>
<script>
function deletesubject(Objdel){
var subcode=Objdel.value;
//alert(Objdel.value);
//alert(subcode);

$.ajax({
type: "POST",
url: "ajax_delsub.php",
data:{subcode: subcode},
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
    background-color: #13D96C;
	text-align:center;
    color: white;
	width:100px;
}

</style>
<?php 
 include "resource/adminheader.html";

include "connect.php";
 $sql="SELECT * FROM `subjects`  ";
 $result=mysqli_query($conn,$sql);
 ?>
 </head>
 <body>
  <div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
		  <div class="post">
      <h2 class="title" style="text-align:center">Open Elective Subjects</h2>
	  <div id="ex">
	  <table id="t01">
	  <tr>
	     
		 <th>Suject Code</th>
		 <th>Subject</th>
		 <th>Department</th>
		 <th>Total Seats</th>
		 <th>Delete</th>
	<?php
	while($row=mysqli_fetch_array($result,MYSQLI_BOTH)){ ?>
	  
	  <tr>
	  <td><?php echo $row['subcode'];?></td>
	  <td><?php echo $row['subject'];?></td>
	  <td><?php echo $row['department'];?></td>
	  <td><?php echo $row['capacity'];?></td>
	 <?php echo '<td ><button type="button" onClick="deletesubject(this)" style="background:url(images/Delete.png) no-repeat;cursor:pointer;border: none;width:32px;height:32px; class="DelButton" name="del1[]" value='.$row['subcode'].' ></button>';?>
	  </tr>
	  <?php
	  }
	  ?>
	     
	   </table><br />
	   <br />
	   </div>
	  <div class="extra">
	  <div id="extra1">
	  <a href="subdetails.php"><h2>Subject Details</h2></a>
		  </div>
		  </div>
		  <div class="extra">
	  <div id="extra1">
	  <a href="addsubject.php"><h2>Add Elective Subjects</h2></a>
		  </div>
		  </div>
	  </div>
	  </div>
	  <?php  include "resource/adminsidebar.html"; ?>
	  </div>
	  </div>
	  </div>
	  <?php include "resource/adminfooter.html"?>
	  </body>
	  </html>
 