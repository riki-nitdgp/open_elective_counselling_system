<?php
ob_start();
include 'connect.php';
   	
    $email = $_POST['name'];
	$pass = $_POST['pwd'];
	$email = mysql_real_escape_string($email);
	$pass = mysql_real_escape_string($pass);
      
      $sql="SELECT * from registration where email='$email' and password='$pass' and valid=1";
      $result=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
		  
		  $name=$row['Name'];
		  $regn=$row['reg_no'];
		  $roll=$row['roll_no'];
		  $dept=$row['department'];
		  $dob=$row['dob'];
		  $email1=$row['email'];
		  $pass1=$row['password'];
		  $cgpa=$row['gpa'];
		  $sem=$row['semester'];
		  $status=$row['status'];
		  
	  }
     // $active=$row['active'];
      $count=mysqli_num_rows($result);
     
      if($count==1)
      {
	    echo $count;
		  session_start();
		   $_SESSION['email'] = "$email";
		   $_SESSION['pass'] = "$pass";
		   $_SESSION['Name'] ="$name";
		   $_SESSION['roll_no']="$roll";
		   $_SESSION['department']="$dept";
		   $_SESSION['reg_no']="$regn";
		   $_SESSION['gpa']="$cgpa";
		   $_SESSION['dob']="$dob";
		   $_SESSION['status']="$status";
		   $_SESSION['semester']="$sem";
           $_SESSION['password']="$pass1";
     //    header("location: welcomeuser.php");
      }
      else 
      {
	  echo 'false';
         
		//  header("location: home.html");
		  //echo'<h1>INCORRECT USERNAME OR PASSWORD</h1>';
      }
   ob_end_flush();
?>