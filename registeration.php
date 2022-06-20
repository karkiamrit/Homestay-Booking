<?php
 session_start();
 header('location:index.php');
 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'project');
 $firstname=$_POST['fname'];
 $lastname=$_POST['lname'];
 $pass=$_POST['pass'];
 $username=$_POST['username'];

 $s="select * from person where username='$username' ";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num == 1)
{
    echo "You have previously used this username to sign up. Please, Log In Instead.";
}
else{
    $reg="Insert into person(fname,lname,username,pass)values('$firstname','$lastname','$username','$pass')";
    mysqli_query($con,$reg);
    echo "Registeration Successful";
}
?>