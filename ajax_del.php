	
<?php
include "connect.php";

$roll=mysql_real_escape_string($_POST['id1']);
$subcode=mysql_real_escape_string($_POST['id2']);
//$roll='14/IT/12';

$sqlc=mysqli_query($conn,"delete  from choice where subcode='$subcode' and roll='$roll'");

$sql=mysqli_query($conn,"select subjects.subject as sub,subjects.department as dept,choice.choiceno as cno,choice.subcode as subcode from subjects,choice where subjects.subcode=choice.subcode order by choice.choiceno");

  echo ' <table width=100% border=1>';
echo'<tr bgcolor="#696969">';
                      echo ' <td style="width: 100px;text-align:center;" align=center> <font color=white> Choice No</font></td>';
                        echo '  <td style="width: 100px;text-align:center;" align=center>  <font color=white> Delete</font></td>';
                        echo '  <td style="width: 100px;text-align:center;" align=center> <font color=white> UP/Down</font></td>';
                         echo ' <td style="width: 100px;text-align:center;" align=center>  <font color=white>  Subject</font></td>';
                         echo ' <td style="width: 100px;text-align:center;" align=center>  <font color=white>  Department</font></td>';
                    echo '  </tr>';                          

  $i=0;              
while($row=mysqli_fetch_array($sql))
{
$sub=$row['subcode'];
$i++;
//$sqlup=mysql_query("update choice set choiceno='$i' where roll='$roll' and subcode='$sub'");
echo '<tr ><td style="text-align:center;"><font size=2>'.$i.'</td></font>';
echo '<td style="text-align:center;"><font size=2><button type="button" name="del[]" class="DelButton" value='.$row['subcode'].'>DELETE</button></font>';
echo '<td style="text-align:center;"><font size=2><button type="button" name="up[]" class="UpButton" value='.$row['subcode'].'>UP</button>&nbsp;&nbsp;<button type="button" name="down[]" class="DButton" value='.$row['subcode'].'>DOWN</button></font>';
 echo  '<td  style="width: 166px" valign=top><font size=2>'.$row['sub'].'</font></td>';
     echo '<td valign=top class="uquestion" style="text-align: justify;"><font size=2>'.$row['dept'].'</font></td></tr>';
}


echo '</table>';
?>