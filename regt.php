
<!DOCTYPE html!>


<head>



<?php include "resource/header.html";?>
<style type="text/css">
<!--
.style5 {color: #FF0000}
-->
</style>
<script type="text/javascript" src="js/validation.js"></script>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>

<SCRIPT type="text/javascript">

$(document).ready(function(){

$("#username").change(function() { 

var usr = $("#username").val();

if(usr.length >= 4)
{
$("#status").html('Checking availability...');

    $.ajax({  
    type: "POST",  
    url: "ajax_check.php",  
    data: "username="+ usr,  
    success: function(data){  
	if(data == 0){
	//$('#status').html('<span class="success">Username name available</span>');
	$('#status').html('&nbsp;<img src="images/tick.gif" align="absmiddle">');
	}
	else if(data > 0){
	$('#status').html('<span class="error" >Registration No already exist</span>');
	$("#username").val('');

	}
    else{
	alert('Problem with mysql query');
	}
	}
	});
	}else{
	$('#status').html('');
		}
	});
});
   
  
//-->
</SCRIPT>

<style type="text/css">
<!--
.style7 {
	color: #FFFFFF;
	font-size: 12px;
}
.style8 {
	color: #0AC6E7;
	font-weight: bold;
}
-->
</style>
</head>
<body>

	<!-- end #menu -->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
				<h2 class="title"><marquee>New Registration</marquee> </h2>
			  
				  </p><div id="sliderFrame">
				  <h1 align="center"> Student Information</h1>
				  <p align="center" color="red"><span class="style5">
				    <marquee>
				    <strong>All The Fields Are Mandatory&nbsp;</strong>
			      </marquee>
				  </span></p>
				  
				   <form name="regt" method="post" action="insert.php" onSubmit=" return validate()" >
				  <TABLE align ="center"width=530 height="450"border=0 cellPadding=1 cellSpacing=1 id="table1" style="WIDTH: 499px; HEIGHT: 135px; background-color:#F7F7F7">
  
  <TR>
    <TD width="130" height="33"><p><strong>Name</strong>:<FONT color=red>*&nbsp;&nbsp;</FONT><FONT color=red>&nbsp;</FONT></p>
      </TD>
    <TD width="263"><p><input name="name">
      </p>
      </TD></TR>
	    <td height="50"><div align="left"><strong>Registration No</strong>: <FONT color=red>*</FONT> </div></td>
          <td><p><input type="text" name="regn" maxlength="8" id="username"  onblur="checkAvailability()" /></p>
  </td>
  <td width="96" align="left"><div id="status" style="color:#FF0000"></div></td>
  </tr>
      <td height="34"><strong>Roll Number : <FONT color=red>*</FONT></strong> </td>
        <td><p>
  <input type="text" name="roll" placeholder="__/IT/__"  />
  </p>
  </td>
  </tr>
    
   <TR>
    <TD height="36"><p><strong>Department:<span class="style5">*&nbsp;</span></strong></p>
      </TD>
	   <TD>
	   <p><select name="dept" required="select department">
		 							<option>&nbsp;</option>
		 							<option value="Biotechnology">Biotechnology</option>
		 							<option value="Civil Engineering">Civil Engineering</option>
		 							<option value="Chemical Engineering">Chemical Engineering</option>
		 							<option value="Computer Science Engineering">Computer Science Engineering</option>
		 							<option value="Electronics And Communication Engi">Electronics And Communication Engi</option>
		 							<option value="Electrical Engineering">Electrical Engineering</option>
		 							<option value="Information Technology">Information Technology</option>
		 							<option value="Mechanical Engineering">Mechanical Engineering</option>
		 							<option value="Metallurgical And Materials Engineering">Metallurgical And Materials Engineering</option>
		 						</select>
      </select> </p>
        
        </td>
		</TR>
		 <TR>
    <TD height="34"><p><strong>Semester:<span class="style5">*&nbsp;</span></strong></p>
      </TD>
    <TD><p><select name="sem">
        <option>&nbsp;</option>
        <OPTION value=Fifth>Fifth Semester</OPTION>
        
        <OPTION value=Eight >Eighth Semester</OPTION>
      </select> </p>
        
        </td>
		</tr>
      
  <TR>
    <TD><p><strong>CGPA:<font color="red">*</font></strong></p>
      <p></p></TD>
    <TD><input type="text" name="gpa" />
      </TD></TR>
  <TR>
    <TD><p><strong>Date of Birth:<font color="red">*</font></strong></p>
      <p></p></TD>
    <TD><input type="date" name="dob" />
      </TD></TR>
	  <TR>
    <TD><p><strong>Email:<font color="red">*</font></strong></p>
      <p></p></TD>
    <TD><input type="email" name="email1"  onBlur="validateEmail()"/>
      </TD></TR>
	   <TR>
    <TD height="36">
      <p><strong>Password:<font color="red">*</font></strong></p>
      </TD>
    <TD><p><input type="password" name="pwd"  />
      </p>
      </TD></TR>
	  <TR>
    <TD height="31">
      <p><strong>ConfrimPassword:<font color="red">*</font></strong></p>
      </TD>
    <TD><p><input type="password" name="cpass" />
      </p>
      </TD></TR>
	       
<tr>
  <td> <div align="center">
    <p>&nbsp;      </p>
    <p>
      <input type="submit" name="Submit" value="Submit" class="links" align="center" id="mySubmit" onClick="check1()">
      </p>
  </div></td></tr>
  </TABLE>
</form>
</div>
			  </div>
			
		  <div class="post">
			  <h2 align="center" class="title"><a href="#">Design &nbsp; Developed by Dept. of IT, NITDGP</a></h2>
		  </div>
		  <div style="clear: both;"></div>
		</div>
		<!-- end #content -->
		<?php include "resource/sidebar.php";?> 
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
</div>
	<div id="footer">
  <div id="footer-content">
    <div id="footer-right"> <a href="home.php">Home</a></div>
    <div id="footer-left"><strong> NIT Durgapur </strong>&nbsp; Design by<span class="style7">:<span class="style8"> Souvik Bera , Riki Mondal and Atindra Nath Pal</span></span></div>
  </div>
	</div>
	<!-- end #footer -->
      
      
	<!-- end #footer -->
</body>

</html>


