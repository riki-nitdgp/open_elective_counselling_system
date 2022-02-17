<html>
<body>
<head>
<?php
include "connect.php";
 $sql="select Lastdate from schedule";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
$ldate=$row['Lastdate'];

}
?>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>NIT DURGAPUR</title>
<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
 <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<div id="sidebar">
		  <ul><li>
				<h2 align="left"><strong>Information </strong></h2>
				<ul>
					<li><strong><a href="#">Notice</a></strong></li>
					<li><strong><a href="seatinfo.php">Seats Information </a></strong></li>
					<li><strong><a href="sublist.php">Subject List </a></strong></li>
					<li><strong><a href="userresult.php">Counselling Result </a></strong></li>
					
			    </ul>
				</li>
          </ul>
		  
		  <ul>
		    <li>
		      <h2>Important Instruction </h2><br>
			   <p style="color:#FF0000; font-weight:bold; font-size:14px; font-weight:bold; ">Last Date For Choice Filling: <?php echo $ldate?></p>
			  <p style="color:#FF0000 "><strong> You Must Need To Fill All The Given Choices Otherwise You Donot get Lock Option</strong></p>
			  
            </li>
	      </ul>
		 
</div>
</body>
</html>