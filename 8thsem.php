<?php 
 session_start();
 
if(!isset($_SESSION['uname'])){
header("location:home.php");
}
?>

<?php
include "connect.php";

$bt_sql="SELECT * from registration WHERE valid=1 and semester='eight' and roll_no like '%bt%' ORDER BY gpa desc";
$bt_result1=mysqli_query($conn,$bt_sql);
while ($row = mysqli_fetch_array($bt_result1))
{
    $bt_name=$row['Name'];
    echo $bt_name;
    $bt_student1=$row['roll_no'];
    echo $bt_student1;
    echo '</br>';
    $bt_sql1="SELECT * from choice WHERE roll='$bt_student1' ORDER BY choiceno";
    $bt_result2=mysqli_query($conn,$bt_sql1);
    while($row1 =mysqli_fetch_array($bt_result2))
    {
      $bt_choice=$row1['subcode'];
      echo '  ';
      $bt_sql2="SELECT * from subjectlist WHERE subcode='$bt_choice'";
      $bt_result3=mysqli_query($conn,$bt_sql2);
      $bt_flag=0;
      while($row2 =mysqli_fetch_array($bt_result3))
      {
          $bt_allot=$row2['BT'];
          if($bt_allot>0)
          {
            $bt_flag=1;
            echo' has been alloted ';
            echo $bt_choice;
            echo'</br>';
            echo $bt_allot;
            echo'</br>';
            $bt_allot=$bt_allot-1;
            $bt_sql4="UPDATE subjectlist SET BT='$bt_allot' WHERE subcode='$bt_choice'";
            $bt_result4=mysqli_query($conn,$bt_sql4);
            $bt_sql5="INSERT into elective values('$bt_name','$bt_student1','$bt_choice')";
            $bt_result5=mysqli_query($conn,$bt_sql5);
            break;
          }
        echo ' ';
      }
      if($bt_flag==1)
      {
        $bt_flag=0;
        break;
      }
    }
}


$ce_sql="SELECT * from registration WHERE valid=1 and semester='eight' and roll_no like '%ce%' ORDER BY gpa desc";
$ce_result1=mysqli_query($conn,$ce_sql);
while ($row = mysqli_fetch_array($ce_result1))
{
    $ce_name=$row['Name'];
    echo $ce_name;
    $ce_student1=$row['roll_no'];
    echo $ce_student1;
    echo '</br>';
    $ce_sql1="SELECT * from choice WHERE roll='$ce_student1' ORDER BY choiceno";
    $ce_result2=mysqli_query($conn,$ce_sql1);
    while($row1 =mysqli_fetch_array($ce_result2))
    {
      $ce_choice=$row1['subcode'];
      echo '  ';
      $ce_sql2="SELECT * from subjectlist WHERE subcode='$ce_choice'";
      $ce_result3=mysqli_query($conn,$ce_sql2);
      $ce_flag=0;
      while($row2 =mysqli_fetch_array($ce_result3))
      {
          $ce_allot=$row2['CE'];
          if($ce_allot>0)
          {
            $ce_flag=1;
            echo' has been alloted ';
            echo $ce_choice;
            echo'</br>';
            echo $ce_allot;
            echo'</br>';
            $ce_allot=$ce_allot-1;
            $ce_sql4="UPDATE subjectlist SET CE='$ce_allot' WHERE subcode='$ce_choice'";
            $ce_result4=mysqli_query($conn,$ce_sql4);
            $ce_sql5="INSERT into elective values('$ce_name','$ce_student1','$ce_choice')";
            $ce_result5=mysqli_query($conn,$ce_sql5);
            break;
          }
        echo ' ';
      }
      if($ce_flag==1)
      {
        $ce_flag=0;
        break;
      }
    }
}


$che_sql="SELECT * from registration WHERE valid=1 and semester='eight' and roll_no like '%ch%' ORDER BY gpa desc";
$che_result1=mysqli_query($conn,$che_sql);
while ($row = mysqli_fetch_array($che_result1))
{
    $che_name=$row['Name'];
    echo $che_name;
    $che_student1=$row['roll_no'];
    echo $che_student1;
    echo '</br>';
    $che_sql1="SELECT * from choice WHERE roll='$che_student1' ORDER BY choiceno";
    $che_result2=mysqli_query($conn,$che_sql1);
    while($row1 =mysqli_fetch_array($che_result2))
    {
      $che_choice=$row1['subcode'];
      echo '  ';
      $che_sql2="SELECT * from subjectlist WHERE subcode='$che_choice'";
      $che_result3=mysqli_query($conn,$che_sql2);
      $che_flag=0;
      while($row2 =mysqli_fetch_array($che_result3))
      {
          $che_allot=$row2['CH'];
          if($che_allot>0)
          {
            $che_flag=1;
            echo' has been alloted ';
            echo $che_choice;
            echo'</br>';
            echo $che_allot;
            echo'</br>';
            $che_allot=$che_allot-1;
            $che_sql4="UPDATE subjectlist SET CH='$che_allot' WHERE subcode='$che_choice'";
            $che_result4=mysqli_query($conn,$che_sql4);
            $che_sql5="INSERT into elective values('$che_name','$che_student1','$che_choice')";
            $che_result5=mysqli_query($conn,$che_sql5);
            break;
          }
        echo ' ';
      }
      if($che_flag==1)
      {
        $che_flag=0;
        break;
      }
    }
}


$cse_sql="SELECT * from registration WHERE valid=1 and semester='eight' and roll_no like '%cs%' ORDER BY gpa desc";
$cse_result1=mysqli_query($conn,$cse_sql);
while ($row = mysqli_fetch_array($cse_result1))
{
    $cse_name=$row['Name'];
    echo $cse_name;
    $cse_student1=$row['roll_no'];
    echo $cse_student1;
    echo '</br>';
    $cse_sql1="SELECT * from choice WHERE roll='$cse_student1' ORDER BY choiceno";
    $cse_result2=mysqli_query($conn,$cse_sql1);
    while($row1 =mysqli_fetch_array($cse_result2))
    {
      $cse_choice=$row1['subcode'];
      echo '  ';
      $cse_sql2="SELECT * from subjectlist WHERE subcode='$cse_choice'";
      $cse_result3=mysqli_query($conn,$cse_sql2);
      $cse_flag=0;
      while($row2 =mysqli_fetch_array($cse_result3))
      {
          $cse_allot=$row2['CS'];
          if($cse_allot>0)
          {
            $cse_flag=1;
            echo' has been alloted ';
            echo $cse_choice;
            echo'</br>';
            echo $cse_allot;
            echo'</br>';
            $cse_allot=$cse_allot-1;
            $cse_sql4="UPDATE subjectlist SET CS='$cse_allot' WHERE subcode='$cse_choice'";
            $cse_result4=mysqli_query($conn,$cse_sql4);
            $cse_sql5="INSERT into elective values('$cse_name','$cse_student1','$cse_choice')";
            $cse_result5=mysqli_query($conn,$cse_sql5);
            break;
          }
        echo ' ';
      }
      if($cse_flag==1)
      {
        $cse_flag=0;
        break;
      }
    }
}


$ee_sql="SELECT * from registration WHERE valid=1 and semester='eight' and roll_no like '%ee%' ORDER BY gpa desc";
$ee_result1=mysqli_query($conn,$ee_sql);
while ($row = mysqli_fetch_array($ee_result1))
{
    $ee_name=$row['Name'];
    echo $ee_name;
    $ee_student1=$row['roll_no'];
    echo $ee_student1;
    echo '</br>';
    $ee_sql1="SELECT * from choice WHERE roll='$ee_student1' ORDER BY choiceno";
    $ee_result2=mysqli_query($conn,$ee_sql1);
    while($row1 =mysqli_fetch_array($ee_result2))
    {
      $ee_choice=$row1['subcode'];
      echo '  ';
      $ee_sql2="SELECT * from subjectlist WHERE subcode='$ee_choice'";
      $ee_result3=mysqli_query($conn,$ee_sql2);
      $ee_flag=0;
      while($row2 =mysqli_fetch_array($ee_result3))
      {
          $ee_allot=$row2['EE'];
          if($ee_allot>0)
          {
            $ee_flag=1;
            echo' has been alloted ';
            echo $ee_choice;
            echo'</br>';
            echo $ee_allot;
            echo'</br>';
            $ee_allot=$ee_allot-1;

            $ee_sql4="UPDATE subjectlist SET EE='$ee_allot' WHERE subcode='$ee_choice'";
            $ee_result4=mysqli_query($conn,$ee_sql4);
            $ee_sql5="INSERT into elective values('$ee_name','$ee_student1','$ee_choice')";
            $ee_result5=mysqli_query($conn,$ee_sql5);
            break;
          }
        echo ' ';
      }
      if($ee_flag==1)
      {
        $ee_flag=0;
        break;
      }
    }
}


$ece_sql="SELECT * from registration WHERE valid=1 and semester='eight' and roll_no like '%ec%' ORDER BY gpa desc";
$ece_result1=mysqli_query($conn,$ece_sql);
while ($row = mysqli_fetch_array($ece_result1))
{
    $ece_name=$row['Name'];
    echo $ece_name;
    $ece_student1=$row['roll_no'];
    echo $ece_student1;
    echo '</br>';
    $ece_sql1="SELECT * from choice WHERE roll='$ece_student1' ORDER BY choiceno";
    $ece_result2=mysqli_query($conn,$ece_sql1);
    while($row1 =mysqli_fetch_array($ece_result2))
    {
      $ece_choice=$row1['subcode'];
      echo '  ';
      $ece_sql2="SELECT * from subjectlist WHERE subcode='$ece_choice'";
      $ece_result3=mysqli_query($conn,$ece_sql2);
      $ece_flag=0;
      while($row2 =mysqli_fetch_array($ece_result3))
      {
          $ece_allot=$row2['EC'];
          if($ece_allot>0)
          {
            $ece_flag=1;
            echo $ece_choice;
            echo'</br>';
            echo $ece_allot;
            echo'</br>';
            $ece_allot=$ece_allot-1;
            $ece_sql4="UPDATE subjectlist SET EC='$ece_allot' WHERE subcode='$ece_choice'";
            $ece_result4=mysqli_query($conn,$ece_sql4);
            $ece_sql5="INSERT into elective values('$ece_name','$ece_student1','$ece_choice')";
            $ece_result5=mysqli_query($conn,$ece_sql5);
            break;
          }
        echo ' ';
      }
      if($ece_flag==1)
      {
        $ece_flag=0;
        break;
      }
    }
}


$it_sql="SELECT * from registration WHERE valid=1 and semester='eight' and roll_no like '%it%' ORDER BY gpa desc";
$it_result1=mysqli_query($conn,$it_sql);
while ($row = mysqli_fetch_array($it_result1))
{
    $it_name=$row['Name'];
    echo $it_name;
    $it_student1=$row['roll_no'];
    echo $it_student1;
    echo '</br>';
    $it_sql1="SELECT * from choice WHERE roll='$it_student1' ORDER BY choiceno";
    $it_result2=mysqli_query($conn,$it_sql1);
    while($row1 =mysqli_fetch_array($it_result2))
    {
      $it_choice=$row1['subcode'];
      echo '  ';
      $it_sql2="SELECT * from subjectlist WHERE subcode='$it_choice'";
      $it_result3=mysqli_query($conn,$it_sql2);
      $it_flag=0;
      while($row2 =mysqli_fetch_array($it_result3))
      {
          $it_allot=$row2['IT'];
          if($it_allot>0)
          {
            $it_flag=1;
            echo' has been alloted ';
            echo $it_choice;
            echo'</br>';
            echo $it_allot;
            echo'</br>';
            $it_allot=$it_allot-1;
            $it_sql4="UPDATE subjectlist SET IT='$it_allot' WHERE subcode='$it_choice'";
            $it_result4=mysqli_query($conn,$it_sql4);
            $it_sql5="INSERT into elective values('$it_name','$it_student1','$it_choice')";
            $it_result5=mysqli_query($conn,$it_sql5);
            break;
          }
        echo ' ';
      }
      if($it_flag==1)
      {
        $it_flag=0;
        break;
      }
    }
}


$me_sql="SELECT * from registration WHERE valid=1 and semester='eight' and roll_no like '%me%' ORDER BY gpa desc";
$me_result1=mysqli_query($conn,$me_sql);
while ($row = mysqli_fetch_array($me_result1))
{
    $me_name=$row['Name'];
    echo $me_name;
    $me_student1=$row['roll_no'];
    echo $me_student1;
    echo '</br>';
    $me_sql1="SELECT * from choice WHERE roll='$me_student1' ORDER BY choiceno";
    $me_result2=mysqli_query($conn,$me_sql1);
    while($row1 =mysqli_fetch_array($me_result2))
    {
      $me_choice=$row1['subcode'];
      echo '  ';
      $me_sql2="SELECT * from subjectlist WHERE subcode='$me_choice'";
      $me_result3=mysqli_query($conn,$me_sql2);
      $me_flag=0;
      while($row2 =mysqli_fetch_array($me_result3))
      {
          $me_allot=$row2['ME'];
          if($me_allot>0)
          {
            $me_flag=1;
            echo' has been alloted ';
            echo $me_choice;
            echo'</br>';
            echo $me_allot;
            echo'</br>';
            $me_allot=$me_allot-1;
            $me_sql4="UPDATE subjectlist SET ME='$me_allot' WHERE subcode='$me_choice'";
            $me_result4=mysqli_query($conn,$me_sql4);
            $me_sql5="INSERT into elective values('$me_name','$me_student1','$me_choice')";
            $me_result5=mysqli_query($conn,$me_sql5);
            break;
          }
        echo ' ';
      }
      if($me_flag==1)
      {
        $me_flag=0;
        break;
      }
    }
}


$mme_sql="SELECT * from registration WHERE valid=1 and semester='eight' and roll_no like '%mm%' ORDER BY gpa desc";
$mme_result1=mysqli_query($conn,$mme_sql);
while ($row = mysqli_fetch_array($mme_result1))
{
    $mme_name=$row['Name'];
    echo $mme_name;
    $mme_student1=$row['roll_no'];
    echo $mme_student1;
    echo '</br>';
    $mme_sql1="SELECT * from choice WHERE roll='$mme_student1' ORDER BY choiceno";
    $mme_result2=mysqli_query($conn,$mme_sql1);
    while($row1 =mysqli_fetch_array($mme_result2))
    {
      $mme_choice=$row1['subcode'];
      echo '  ';
      $mme_sql2="SELECT * from subjectlist WHERE subcode='$mme_choice'";
      $mme_result3=mysqli_query($conn,$mme_sql2);
      $mme_flag=0;
      while($row2 =mysqli_fetch_array($mme_result3))
      {
          $mme_allot=$row2['MM'];
          if($mme_allot>0)
          {
            $mme_flag=1;
            echo' has been alloted ';
            echo $mme_choice;
            echo'</br>';
            echo $mme_allot;
            echo'</br>';
            $mme_allot=$mme_allot-1;
            $mme_sql4="UPDATE subjectlist SET MM='$mme_allot' WHERE subcode='$mme_choice'";
            $mme_result4=mysqli_query($conn,$mme_sql4);
            $mme_sql5="INSERT into elective values('$mme_name','$mme_student1','$mme_choice')";
            $mme_result5=mysqli_query($conn,$mme_sql5);
            break;
          }
        echo ' ';
      }
      if($mme_flag==1)
      {
        $mme_flag=0;
        break;
      }
    }
}
header("location: result.php");
?>
