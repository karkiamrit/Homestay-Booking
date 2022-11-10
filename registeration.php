<?php
 session_start();
 header('location:index.php');
 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'project');
 $firstname=$_POST['fname'];
 $lastname=$_POST['lname'];
 $pass=$_POST['pass'];
 $username=$_POST['username'];
 $msg=$_SESSION['msg'];

 $s="select * from user where username='$username' ";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num == 1)
{
    $_SESSION['errormsg']= "You have previously used this username to sign up. Please, Log In Instead.";
    header('location:signup.php');
}
else{
    $reg="Insert into user(fname,lname,username,pass)values('$firstname','$lastname','$username','$pass')";
    mysqli_query($con,$reg);
    $_SESSION['new']="Registeration Successful";
   header('location:index.php');
    
}
?>