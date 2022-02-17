<!DOCTYPE html! >
<head>

<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>NIT DURGAPUR</title>
<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
 <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script>
function validate1(){
flag=true;
if(login.email.value==""){
alert("Please Enter Your Email Address");
flag=false;
login.email.focus()
}
else if(login.pass.value==""){
alert("Please Enter Password ")
flag=false;
login.pass.focus()

}
return flag
}


</script>
<style type="text/css">

.style1 {
	font-size: 36px;
	font-weight: bold;
	color: #0000CC;
	font-family: "Times New Roman", Times, serif;
}
.style2 {color: #000000}
.style4 {color: #000000; font-weight: bold; }

</style>
</head>
<body>
<div class="page-content">
  <div class="row outterWrapper">
    <div class="columns twelve large-12">
      <div class="row header">
        <div class="columns twelve large-12">
          <div align="left">
            <p><a href="#"><img src="images/campus.png" alt="" width="1333" height="139" /></a>          </div>
        </div>
      </div>
		
	</div>
	
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="home.php">Home &nbsp;&nbsp;&nbsp;</a></li>
			<li><a href="#">About &nbsp;&nbsp;&nbsp;</a></li>
			<li><a href="regt.php">Student Registration &nbsp;&nbsp;&nbsp;</a></li>
			<li><a href="#">Seat Infornation &nbsp;&nbsp;&nbsp;</a></li>
			<li><a href="#">Login &nbsp;&nbsp;&nbsp;</a>
			 <ul>
			 <li><a href="adminpanel.php">Admin</a>
    
        </ul>
      </li>
    </ul>
			
		
		</ul>
	</div>
	
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
				<h2 class="title">Welcome To e-Counselling For Open &amp; Departemental Elective </h2>
			  
				  </p><div id="sliderFrame" align="right">
        <div id="slider">
            
                <img src="images/1.jpg" alt="Welcome" />
           
            <img src="images/2.jpg" alt="" />
			 <a href="" target="_blank">
            <img src="images/3.jpg" alt="About US." /></a></div>
      
        </div>
			  </div>
		  <div class="post">
			  <h2 align="center" class="title"><a href="#">Design &amp; Developed by Dept. Of IT, NITDGP</a></h2>
		  </div>
		  <div style="clear: both;"></div>
		</div>
		<!-- end #content -->
		<?php include 'resource/sidebar.php'?>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
</div>
	<?php include "resource/footer.html"?>
</body>
</html>
