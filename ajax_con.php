<?php 
include "connect.php";
$roll=mysql_real_escape_string($_POST['roll']);
$sql="update registration set valid='1' where roll_no='$roll'";
mysqli_query($conn,$sql);

?>
