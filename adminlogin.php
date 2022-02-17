<?php
ob_start();
// 
include 'connect.php';
   
    $uname = $_POST['name'];
	$pwd = $_POST['pwd']; 
	
	//$email = stripslashes($email);
	//$pass = stripslashes($pass);
	$uname = mysql_real_escape_string($uname);
	$pwd = mysql_real_escape_string($pwd);
      $sql="SELECT * from admin where username='$uname' and password='$pwd'";
      $result=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
		  
		  $uname=$row['username'];
		  $pass=$row['password'];
	  }
     // $active=$row['active'];
      $count=mysqli_num_rows($result);
      
		
      if($count==1)
      {
	     echo $count;
		  session_start();
		   $_SESSION['uname'] = "$uname";
		    $_SESSION['password'] = "$pass";
         
        // header("location: welcomeadmin.php");
      }
      else 
      {
         
		echo 'false';
      }
   ob_end_flush();
?>