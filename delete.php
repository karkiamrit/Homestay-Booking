<?php
    session_start();
    $con=mysqli_connect('localhost','root','');
    $db=mysqli_select_db($con,'project');
    $regno=$_SESSION['Regno'];
    echo $regno;
    $var="Delete usertravel,travelbooking From travelbooking 
    Inner Join usertravel
    on travelbooking.Registerationno=usertravel.Registerationno
    where travelbooking.Registerationno='$regno'";
    mysqli_query($con,$var);
    header('location:databasefetch.php');

?>