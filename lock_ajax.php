<?php include "connect.php";
$roll=$_POST['id1'];
$sql="update registration set status='1' where roll_no='$roll'";
$result=mysqli_query($conn,$sql);
session_start();
$_SESSION['status'] ='1';

?>