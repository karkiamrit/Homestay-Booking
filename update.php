<?php
    session_start();
    $con=mysqli_connect('localhost','root','');
    $db=mysqli_select_db($con,'project');
    $value=$_POST['value'];   
    $bookno=$_SESSION['Registerationno'];
    $regno=$_GET["regno"];
   echo $bookno;
    if(isset($_GET['pid'])){
     
    if(strpos($_GET['pid'], 'departure') !== false  )
    {
        $dateofreturn="Select DateofReturn from travelbooking where Registerationno='$regno'";
        $query_run=mysqli_query($con,$dateofreturn);         
        $row = mysqli_fetch_array($query_run);
        $return=$row['DateofReturn'];
        $departure = date("Y-m-d", strtotime($value)); 

        $query="Update travelbooking Set TravelDuration=DATEDIFF('$return','$departure') where Registerationno='$regno'  ";
        mysqli_query($con,$query); 

        $reg="Update travelbooking Set DepartureDate='$value' where Registerationno='$regno' ";
        mysqli_query($con,$reg); 
    }
   
    else if(strpos($_GET['pid'], 'return') !== false )
    {
        $departuredate="Select DepartureDate from travelbooking where Registerationno='$regno'";
        $query_run=mysqli_query($con,$departuredate);         
        $row = mysqli_fetch_array($query_run);
        $departure=$row['DepartureDate'];
        

        $return = date("Y-m-d", strtotime($value)); 

        $query="Update travelbooking Set TravelDuration=DATEDIFF('$return','$departure')  where Registerationno='$regno' ";
        mysqli_query($con,$query); 

        $reg="Update travelbooking Set DateofReturn='$value' where Registerationno='$regno'";
        mysqli_query($con,$reg); 
    }
    
    
    else if(strpos($_GET['pid'], 'location') !== false ){
         $query="Update travelbooking Set Location='$value' where Registerationno='$regno' ";
        mysqli_query($con,$query); 
    }

    else if(strpos($_GET['pid'], 'guest') !== false ){
        $query="Update travelbooking Set NoofGuests='$value' where Registerationno='$regno'";
       mysqli_query($con,$query); 
   }

    header('location:databasefetch.php');
}

?>