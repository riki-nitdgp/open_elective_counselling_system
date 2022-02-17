<?php
include "connect.php";


    $name = $_POST['name'];
	$regn = $_POST['regn']; 
	$roll = $_POST['roll'];
	$dept = $_POST['dept'];
	$sem = $_POST['sem'];
	$dob =  $_POST['dob'];
	$gpa = $_POST['gpa'];
	$email = $_POST['email1'];
	$pwd = $_POST['pwd'];
	
	$name = mysql_real_escape_string($name);
	$regn = mysql_real_escape_string($regn);
	$roll = mysql_real_escape_string($roll);
	$dept = mysql_real_escape_string($dept);
	$sem = mysql_real_escape_string($sem);
	$dob = mysql_real_escape_string($dob);
	$gpa = mysql_real_escape_string($gpa);
	$email = mysql_real_escape_string($email);
	$pwd = mysql_real_escape_string($pwd);
	
	
	if(!empty($name)&&!empty($regn)&&!empty($roll)&&!empty($dob)&&!empty($pwd)&&!empty($sem)&&!empty($email)){
		$sql="insert into registration values('$name','$regn','$roll','$dept','$sem','$gpa','$dob','$email','$pwd',0,0)";
		$result=mysqli_query($conn,$sql);
		header("location: regrd.php");
	}
	else
			{
			   header("location: home.php");
				echo'<h1>you forgot to enter all the fields of the form.please enter everything and then submit</h1>';
			}
?>



