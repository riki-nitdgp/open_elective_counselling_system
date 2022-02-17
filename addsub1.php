<?php 
 session_start();
 
if(!isset($_SESSION['uname'])){
header("location:home.php");
}
?>

<?php
include "connect.php";

$subcode=   $_POST['subcode'];
$subname=  $_POST['subname'];
$dept=  $_POST['dept'];
$bt= $_POST['bt'];
$che= $_POST['che'];
$ce=$_POST['ce'];
$cse= $_POST['cse'];
$ece= $_POST['ece'];
$ee=$_POST['ee'];
$it=$_POST['it'];
$mm=$_POST['me'];
$mme= $_POST['mme'];
$total=$_POST['total'];
$subcode = mysql_real_escape_string($subcode);
$subname = mysql_real_escape_string($subname);
$dept = mysql_real_escape_string($dept);
$bt = mysql_real_escape_string($bt);
$che = mysql_real_escape_string($che);
$ce = mysql_real_escape_string($ce);
$cse = mysql_real_escape_string($cse);
$ece = mysql_real_escape_string($ece);
$ee = mysql_real_escape_string($ee);
$it = mysql_real_escape_string($it);
$mm = mysql_real_escape_string($mm);
$mme = mysql_real_escape_string($mme);
$total = mysql_real_escape_string($total);
//$sql="insert into subjectlist values('11','$subcode','$subname','$dept','$bt','$che','$ce','$cse','$ece','$ee','$it','$mm','$mme','$total')";
$sql="insert into subjectlist(subcode,subject,department,BT,CH,CE,CS,EC,EE,IT,ME,MM,Total)VALUES('$subcode','$subname','$dept','$bt','$che','$ce','$cse','$ece','$ee','$it','$mm','$mme','$total')";
mysqli_query($conn,$sql);
$sql1="INSERT INTO subjects (subcode,subject,department,capacity) VALUES('$subcode','$subname','$dept','$total')";

mysqli_query($conn,$sql1);
 header("location: subject.php");
 echo"<h2>Sucessfully Added</h2>";
?>