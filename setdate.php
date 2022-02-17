<?php
session_start();
 
if(!isset($_SESSION['uname'])){
header("location:home.php");
} 
include "connect.php";

$date1=$_POST['date'];
$date=date("d-m-Y",strtotime($date1));

$sql1="select Lastdate from schedule";
$result=mysqli_query($conn,$sql1);
$num=mysqli_num_rows($result);

if($num==0){
$sql2="insert into schedule values('$date')";
mysqli_query($conn,$sql2);
}

else{
$sql="update schedule set Lastdate='$date'";
mysqli_query($conn,$sql) or die(mysql_error());
}
header ("location: schedule.php");
?>
