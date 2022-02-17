
<?php
   
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname='student';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   
//mysql_select_db("student", $conn);



?>