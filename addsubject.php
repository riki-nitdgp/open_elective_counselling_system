<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
session_start();
 
if(!isset($_SESSION['uname'])){
header("location:home.php");
}
?>
<head>
<style>
table {

}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
table#t01 tr:nth-child(even) {
    background-color:#eee;
	
	color:#000000;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;

   color:#000000;
   
}
table#t01 th	{
    background-color:  #13D96C;
	
    color: white;
}
</style>
<?php include "resource/adminheader.html";?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript" src="js/subject.js">

</script>

<title>Admin</title>
</head>

<body>
<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
		  <div class="post">
<h2 class="title" style="text-align:center">Add New Elective Subjects </h2>

<form action="addsub1.php" method="post" onsubmit="return check()" name="add">
  <table width="66%" id="t01">
    <tr>
      <th width="277" height="40" scope="row"><div align="left">Subject Code </div></th>
      <td width="608"><input type="text" name="subcode"  id="subcode"/></td>
    </tr>
    <tr>
      <th height="48" scope="row"><div align="left">Subject Name </div></th>
      <td><input type="text" name="subname"  id="subname"/></td>
    </tr>
	
	<tr>
      <th height="48" scope="row"><div align="left">Department</div></th>
      <td><select name="dept" required="select department">
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
									<option value="Mathemetics">Mathemetics</option>
									<option value="physics">physics</option>
									<option value="Management Studies">Management Studies</option>
									<option value="Humanities">Humanities</option>
		 						</select></td>
    </tr>
    <tr>
      <th height="55" scope="row"><div align="left">Biotechnolohy</div></th>
      <td><input type="text" name="bt"  id="bt"/></td>
    </tr>
    <tr>
      <th height="41" scope="row"><div align="left">Chemical Engineering </div></th>
      <td><input type="text" name="che"  id="che"/></td>
    </tr>
    <tr>
      <th height="36" scope="row"><div align="left">Civil Engineering </div></th>
      <td><input type="text" name="ce"  id="ce"/></td>
    </tr>
    <tr>
      <th height="36" scope="row"><div align="left">Computer Science </div></th>
      <td><input type="text" name="cse"  id="cse"/></td>
    </tr>
    <tr>
      <th height="41" scope="row"><div align="left">Electronics And Comm. </div></th>
      <td><input type="text" name="ece"  id="ece"/></td>
    </tr>
    <tr>
      <th height="43" scope="row"><div align="left">Electrical Engineering </div></th>
      <td><input type="text" name="ee"  id="ee"/></td>
    </tr>
    <tr>
      <th height="40" scope="row"><div align="left">Information Technology </div></th>
      <td><input type="text" name="it"  id="it"/></td>
    </tr>
    <tr>
      <th height="36" scope="row"><div align="left">Mechanical Engineering </div></th>
      <td><input type="text" name="me"  id="me"/></td>
    </tr>
    <tr>
      <th height="34" scope="row"><div align="left">MME</div></th>
      <td><input type="text" name="mme"  id="mme" /></td>
    </tr>
	<tr>
      <th scope="row"><div align="left">Total</div></th>
      <td><input type="text" name="total" onclick="sum()"  id="total" readonly="readonly"/></td>
    </tr>
	<tr>
	  <th><div align="left">
	    <input name="submit" type="submit" value="submit" />
	    </div></th>
	<tr>
  </table>
</form> 
</div>
</div>
<?php include "resource/adminsidebar.html";?>
</div>
</div>
</div>
<?php include "resource/adminfooter.html"?>
</body>
</html>
