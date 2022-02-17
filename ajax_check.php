<?php
	include 'connect.php';	
	$username 		= $conn->real_escape_string($_POST['username']);
	$sqlUser='SELECT reg_no FROM registration WHERE reg_no = "'.$username.'"';
	$resUser=$conn->query($sqlUser);
	if($resUser === false) {
		trigger_error('Error: ' . $conn->error, E_USER_ERROR);
	} else {
		echo $rows_returned = $resUser->num_rows;
	}
	
?>