<?php
session_start();
 
if(!isset($_SESSION['uname'])){
header("location:home.php");
} 
include "connect.php";

$regno=$_POST['regno'];
$sql="update registration set status='0' where reg_no='$regno'";
mysqli_query($conn,$sql);
header("location:admin.php");
?>