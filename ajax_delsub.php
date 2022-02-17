<?php 
include "connect.php";
$id1=$_POST['subcode'];
$sql="delete from subjects where subcode='$id1'";
$sql2="delete from subjectlist where subcode='$id1'";
mysqli_query($conn,$sql);
mysqli_query($conn,$sql2);

?>
