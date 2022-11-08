<?php
 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'project');
 $adminemail=$_POST['adminemail'];
 $adminpsw=$_POST['adminpass'];
$s="Select * from admin where email='$adminemail' and adminpassword='$adminpsw'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num == 1)
{
    header('location:databasefetch.php');
}
else{
  $_SESSION['adminmsg']="You are not registered as admin!";
  $adminerror=$_SESSION['adminmsg'];
   header("location:adminlogin.php?error=$adminerror");
}
?>