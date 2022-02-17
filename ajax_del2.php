<?php 
include "connect.php";

$roll=mysql_real_escape_string($_POST['roll']);
$sql="delete from registration where roll_no='$roll'";
mysqli_query($conn,$sql);

?>
