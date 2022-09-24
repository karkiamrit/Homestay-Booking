<?php
 session_start();
 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'project');
 $pass=$_POST['pass'];
 $username=$_POST['username'];

 $s="select * from user where username='$username' and pass='$pass'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num == 1)
{
    $_SESSION['username']=$username;
   header('location:index.php');
}
else{
  header('registeration.php');
}
?>