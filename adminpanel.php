
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login </title>
		<meta charset="utf-8">
		<link href="style2.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
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
		   url: "adminlogin.php",
			data: "name="+username+"&pwd="+password,
			
		   success: function(data){
		   //alert(data);    
			if(data==1)    {
			 //$("#add_err").html("right username or password");
			 window.location="admin.php";
			}
			else    {
			//$("#add_err").css('display', 'inline', 'important');
			 $("#add_err").html("Wrong username or password");
			}
		   },
		   beforeSend:function()
		   {
			//$("#add_err").css('display', 'inline', 'important');
			$("#add_err").html("<img src='loader.gif' /> Loading...")
		   }
		  });
		return false;
	});
});

</script>
		
</head>
<body>
	
	 <div class="main">
		<div class="login-form">
			<h1>Admin Login</h1>
					<div class="head">
						<img src="images/user.png" alt=""/>
					</div>
				<form action="./" >
						<input type="text" class="text" placeholder="USERNAME" name="uname" id="name"  >
						<input type="password" value="pwd"  placeholder="***********" id="word">
						<div class="submit">
							<input type="submit"  value="LOGIN" id="login" name="login">
					</div>	
					<p><a href="#">Forgot Password ?</a></p>
					 <div class="err" id="add_err" style="color:#FF0000; font-weight:bold"></div> <br>
				</form>
			</div>
			
   					<div class="copy-right">
						<p>Admin Login </a></p> 
					</div>
				
		</div>
			
		 		
</body>
</html>