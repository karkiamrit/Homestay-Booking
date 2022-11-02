<?php
session_start();
$uname=$_POST['username'];
$usrmail=$_POST['usermail'];
$usrphone=$_POST['userphone'];
$subject=$_POST['usersubject'];
$message=$_POST['usermsg'];

$to = "amrit.191503@ncit.edu.np";
$message="Name:".$uname."\nEmail:".$usrmail."\nPhone:".$usrphone."\nSubject:".$subject."\nMessage:".$message;
$header="From:".$usrmail." please review the comments";
echo $message;
mail($to,$subject,$message,$header);
?>