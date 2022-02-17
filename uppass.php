<?php 
include 'connect.php';
$cpass=$_POST['cpass'];
$npass=$_POST['npass'];
$sespass=$_POST['sespass'];
$reg=$_POST['sesreg']; 
if($cpass===$sespass){
$sql="update registration set password='$npass' where reg_no='$reg'";
$result=mysqli_query($conn,$sql);
echo $result;
if($result==1);
{
session_start();
$_SESSION['password'] = "$npass";
header("location: welcomeuser.php");
}
}
else{
header("location: updatepass.php");
echo '<font color="red">Password Not Matched.</font>';
}
mysqli_close($conn);
?>