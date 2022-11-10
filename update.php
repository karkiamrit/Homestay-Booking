<?php
    session_start();
    $con=mysqli_connect('localhost','root','');
    $db=mysqli_select_db($con,'project');
    $value=$_POST['value'];   
    $bookno=$_SESSION['Registerationno'];
    
    if(isset($_GET['pid'])){
    if($_GET['pid'] == 'DepartureDate')
    {
        $dateofreturn="Select DateofReturn from travelbooking where Registerationno='$bookno'";
        $query_run=mysqli_query($con,$dateofreturn);         
        $row = mysqli_fetch_array($query_run);
        $return=$row['DateofReturn'];
        

        $departure = date("Y-m-d", strtotime($value)); 

        $query="Update travelbooking Set TravelDuration=DATEDIFF('$return','$departure')   ";
        mysqli_query($con,$query); 

        $reg="Update travelbooking Set DepartureDate='$value'";
        mysqli_query($con,$reg); 
    }
    else if($_GET['pid'] == 'DateofReturn')
    {
        $departuredate="Select DepartureDate from travelbooking where Registerationno='$bookno'";
        $query_run=mysqli_query($con,$departuredate);         
        $row = mysqli_fetch_array($query_run);
        $departure=$row['DepartureDate'];
        

        $return = date("Y-m-d", strtotime($value)); 

        $query="Update travelbooking Set TravelDuration=DATEDIFF('$return','$departure')   ";
        mysqli_query($con,$query); 

        $reg="Update travelbooking Set DateofReturn='$value'";
        mysqli_query($con,$reg); 
    }
    
    else{
         $query="Update travelbooking Set $_GET[pid]='$value'";
        mysqli_query($con,$query); 
    }
      
    header('location:databasefetch.php');
}
?>