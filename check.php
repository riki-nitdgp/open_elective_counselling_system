<?php
session_start();
 
if(!isset($_SESSION['email'])){
header("location:home.html");
}
?>

<html>
<body>
Login Successful
<?php echo $_SESSION['email'];?>
<?php echo $_SESSION['Name'];?>
</body>
</html>