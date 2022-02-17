<html>

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
<script type="text/javascript" src="jquery-1.2.6.min.js"></script>
<SCRIPT type="text/javascript">
$(document).ready(function(){
	//$("#add_err").css('display', 'none', 'important');
	 $("#login").click(function(){	
		 var username=$("#name").val();
		 var password=$("#word").val();
		  $.ajax({
		   type: "POST",
		   url: "login.php",
			data: "name="+username+"&pwd="+password,
			
		   success: function(data){
		   //alert(data);    
			if(data==1)    {
			 //$("#add_err").html("right username or password");
			 window.location="welcomeuser.php";
			}
			else    {
			//$("#add_err").css('display', 'inline', 'important');
			 $("#add_err").html("Wrong username or password");
			}
		   },
		   beforeSend:function()
		   {
			//$("#add_err").css('display', 'inline', 'important');
			$("#add_err").html("<img src='images/loader.gif' /> Loading...")
		   }
		  });
		return false;
	});
});

</script>
</head>
<body>

<div id="sidebar">
			<ul>
				<li> 
					<h2 align="left"><strong>Student Login</strong></h2>
					<br>
					<form name="./" method="post" action="login.php" onSubmit="return validate1()">
					<span class="style2"><strong>Email</strong> :    &nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="text" name="email" id="name" /><br />
					  <br />
				    <span class="style4">Password:  </span>
				     <input type="password" name="pass" id="word" />
				  <br />
				  <input type="submit" value="LOGIN" class="links" text align="center" id="login" name="login" value="Login" class="loginbutton"/>
					  </p>
					 <div class="err" id="add_err" style="color:#FF0000; font-weight:bold"></div> <br>
					  </form>
				<li>
					<h2 align="left"><strong>Information </strong></h2>
					<ul>
						<li><strong><a href="#">Notice</a></strong></li>
						<li><strong><a href="#">Seats Information </a></strong></li>
						<li><strong><a href="#">Subject List </a></strong></li>
						<li><strong><a href="#">About Us </a></strong></li>
						<li><strong><a href="#">Departments</a></strong></li>
				    </ul>
				</li>
				<li>
					<h2>&nbsp;</h2>
				</li>
		  </ul>
		</div>
		</body>
		</html>