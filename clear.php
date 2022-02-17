<?php include "connect.php";
 session_start();
 
if(!isset($_SESSION['uname'])){
header("location:home.php");
}

mysqli_query($conn,"DELETE from elective ");
mysqli_query($conn,"DELETE from subjectlist");
mysqli_query($conn,"DELETE from subjects" );
header("location: admin.php");


?>