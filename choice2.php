<?php
include "connect.php";
$x=session_start();

//session_start();
$rollno=$_SESSION['roll_no'];
if(!isset($_SESSION['email'])){
header("location:home.php");
}
$sql="select Lastdate from schedule";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
$ldate=$row['Lastdate'];
}
$date1 = date("d-m-Y");
$today = strtotime($date1);
$date2=date($ldate);
$last= strtotime($date2);
if($last<$today){
header("location: lock_c.php");
}
$status=$_SESSION['status'];
if($status==1){
header("location:lock_c.php");
}

?>

<!DOCTYPE html!>


<head>
<style>
table {
  border-collapse: collapse;
}

td, th {
  border: 1px solid #999;
  padding: 0.5rem;
  text-align: center;
}
</style>

<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>


<script type="text/javascript">
$(document).ready(function()
{
$(".AddButton").click(function() {
	
var counter = $('#TextBox').val();
                    counter++ ;
                    $('#TextBox').val(counter);
var val=$('#TextBox').val();
var textboxes = $('button[name="col[]"]');
var id3= $('#roll').val();
var index = textboxes.index( this );
var val1=this.value;
var id1=val;
var id2=val1;
//alert(id3);
//alert(val);

$('#'+val1+'').hide();
console.log(id1);
console.log(id2);

$.ajax
({
type: "POST",
url: "./ajax_c.php",
data:"id2="+id2+"&id1="+id1+"&id3="+id3,
//data: {choiceno: 'id1'},
cache: false,
success: function(html)
{
$("#department").html(html);
 
window.location.reload();

} 
});

});
});
</script>



<script type="text/javascript">
$(document).ready(function()
{
$(".DelButton").click(function() {
var delb = $('button[name="del[]"]');

var index = delb.index( this );
var val1=this.value;
var id1=$('#roll').val();;
var id2=val1;
//alert(val1);
//$('#'+val1+'').hide();
//alert(id1);

$.ajax
({
type: "POST",
url: "ajax_del.php",
data:"id1="+id1+"&id2="+id2,
cache: false,
success: function(html)
{
$("#department").html(html);
window.location.reload();
} 
});

});
});
</script>



<script type="text/javascript">
$(document).ready(function()
{
$(".UpButton").click(function() {
var upb = $('button[name="up[]"]');

var index = upb.index( this );
var val1=this.value;
var id1= $('#roll').val();
var id2=val1;
//alert(val1);
//$('#'+val1+'').hide();

$.ajax
({
type: "POST",
url: "ajax_up.php",
data:"id1="+id1+"&id2="+id2,
cache: false,
success: function(html)
{
$("#department").html(html);
window.location.reload();
} 
});

});
});
</script>



<script type="text/javascript">
$(document).ready(function()
{
$(".DButton").click(function() {
var downb = $('button[name="down[]"]');

var index = downb.index( this );
var val1=this.value;
var id1= $('#roll').val();
var id2=val1;
//alert(val1);
//$('#'+val1+'').hide();

$.ajax
({
type: "POST",
url: "ajax_down.php",
data:"id1="+id1+"&id2="+id2,
cache: false,
success: function(html)
{
$("#department").html(html);
window.location.reload();
} 
});

});
});
</script>
<script>
function lock(){

var id1= $('#roll').val();
//alert(id1);
$.ajax
({
type: "POST",
url: "lock_ajax.php",
data:"id1="+id1,
cache: false,
success: function(html)
{
window.location="lock_c.php";
} 
});
}

</script>
</head>
<body>
<?php include 'resource/userheader.php';?>
	<!-- end #menu -->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
		  <div class="post">
<h2 class="title" style="text-align:center">Welcome:<?php echo $_SESSION['Name'];?> </h2>
			  
				  </p><div id="sliderFrame">
				  <h1 align="center" style="color:#00CCCC"><marquee> WELCOME TO E-COUNSELLING</marquee></h1>
				  </div>
		  </div>
			
		  <div class="post" style="width:">
		  <h2 class="style6" style="text-align:center;">Please Select Your Choice </h2>
		 <marquee style="color:#FF0000; font-size:14px; font-weight:bold"> <p style="text-align:center;">You Must Need To Fill All The Given Choices Otherwise You Donot Get The Lock Option </p></marquee>
		  <p class="style6" style="text-align:center;"><input type="hidden" id="roll" value="<?php echo $rollno;?>">
<?php
include "connect.php";
$sql=mysqli_query($conn,"select * from subjects where subcode NOT IN(select subcode from choice where choice.roll='$rollno')");
$sqlc=mysqli_query($conn,"select MAX(choiceno) as c from choice where roll='$rollno'");
$rowc=mysqli_fetch_array($sqlc);
$num1=mysqli_num_rows($sql);

?>
    <table width=90% align=center style="font-family: Verdana;border-collapse: collapse;
;" >
        <tr>
            <td width=40% valign=top>
                <table width=100% >

 <tr bgcolor="#696969">
                        <td style="width: 100px" align=center>
                         <font color=white size=2> <b>                     Add</b></font></td>
                        <td style="width: 100px" align=center>
                         <font color=white size=2> <b>                   Subject </b></font></td>
                        <td style="width: 100px" align=center>
                        <font color=white size=2> <b>                       Department </b></font></td>
                            <td style="width: 100px" align=center>
                        <font color=white size=2> <b>                      Capacity </b></font></td>
                  </tr>
<input type="hidden"  id="TextBox" value="<?php print $rowc['c'];?>" />
<?php

$i=0;

while($row=mysqli_fetch_array($sql))
{
$i++;

?>
                    <tr id="<?php print $row['subcode'];?>">
                        <td style="width: 100px" align=center>


                            <button type="button" name="col[]" style="background: url(images/add.png) no-repeat;cursor:pointer;border: none;width:32px;height:32px;" class='AddButton' id="" value="<?php print $row['subcode'];?>" /></button>
				

</td>
                        <td style="width: 100px" ><font size=2>
<?php print $row['subject'];?></font>
                        </td>
                        <td style="width: 100px"><font size=2>
<?php print $row['department'];?></font>
                        </td>
 <td style="width: 100px" align=center><font size=2>
<?php print $row['capacity'];?></font>
                      </td>

                    </tr>
<?php
}
?>
                </table>
            
            
            </td>
            <td width=60% valign=top>
  <div id="department">
<?php
$sql=mysqli_query($conn,"select subjects.subject as sub,subjects.department as dept,choice.choiceno as cno,choice.subcode as subcode from  subjects,choice where subjects.subcode=choice.subcode and choice.roll='$rollno' order by choice.choiceno");
$num=mysqli_num_rows($sql);

if($num!=0)
{

  echo ' <table width=100%>';
 echo'<tr bgcolor="#696969">';
                      echo ' <td style="width: 100px;text-align:center;" align="center"> <font color=white size=2> <b> Choice No </b></font></td>';
                        echo '  <td style="width: 100px;text-align:center;" align=center>  <font color=white size=2> <b> Delete </b></font></td>';
                        echo '  <td style="width: 100px;text-align:center;" align=center> <font color=white size=2> <b> UP/Down </b></font></td>';
                         echo ' <td style="width: 100px;text-align:center;" align=center>  <font color=white size=2> <b>  Subject </b></font></td>';
                         echo ' <td style="width: 100px;text-align:center;" align=center>  <font color=white size=2> <b>  Department</b></font></td>';
                    echo '  </tr>';               

     $i=0;           
while($row=mysqli_fetch_array($sql))
{
$i++;
echo '<tr ><td style="text-align:center;"><font size=2>'.$i.'</td></font>';
echo '<td style="text-align:center;"><font size=2><button type="button" style="background: url(images/Delete.png) no-repeat;cursor:pointer;border: none;width:32px;height:32px;" name="del[]" class="DelButton" value='.$row['subcode'].'></button></font>';
echo '<td style="text-align:center;"><font size=2><button type="button" style="background: url(images/up_arrow.png) no-repeat;cursor:pointer;border: none;width:32px;height:32px;" name="up[]" class="UpButton" value='.$row['subcode'].'></button> &nbsp;&nbsp;<button type="button" style="background: url(images/down_arrow.png) no-repeat;cursor:pointer;border: none;width:32px;height:32px;" name="down[]" class="DButton" value='.$row['subcode'].'></button></font>';
 echo  '<td  style="width: 166px" valign=top><font size=2>'.$row['sub'].'</font></td>';
     echo '<td valign=top class="uquestion" style="text-align: justify;"><font  size=2>'.$row['dept'].'</font></td></tr>';
}


echo '</table>';
}
?>
 
 </div>
       
            </td>
        </tr>
      
        <tr>
            <td style="width: 100px">
            </td>
            <td style="width: 100px">
            </td>
        </tr>
    </table>
&nbsp;</p>

		 
		  <?php
		  if($num1==0){
		  
		  echo'<div><p align="center"> <input type="submit" class="links" name="Lock" value="Lock" onClick="lock()"></p></div>';
		  }
		  ?>
		  <p align="justify"></p>
		  <h2 align="center" class="title"><a href="#">Design &nbsp; Developed by Dept. of IT, NITDGP</a></h2>
		  </div>
		  <div style="clear: both;"></div>
		</div>
		<?php include 'resource/usersidebar.php';?>
		
		<div style="clear: both;">
		
		</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
</div>
	<div id="footer">
  <div id="footer-content">
    <div id="footer-right"> <a href="welcomeuser.php">Home</a></div>
    <div id="footer-left"><strong> NIT Durgapur </strong>&nbsp; <span class="style1">Design by: Souvik Bera , Riki Mondal and Atindra Nath Pal</span></div>
  </div>
	</div>
</body>
</html>


