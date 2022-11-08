<?php
 session_start();
 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'project');
 $location=$_POST['location'];
 $noofguests=$_POST['noofguests'];
 $departure = date("Y-m-d", strtotime($_POST['departure'])); 
 $username=$_SESSION['username'];
 $return = date("Y-m-d", strtotime($_POST['return'])); 

function RandStr($length, $encrypt = 10){
    $reg_id = '';
    for($i=0;$i<$encrypt;$i++){
        $reg_id = base64_encode(md5(microtime(true)));}
    return substr($reg_id, 0, $length);
}
$regid=RandStr(10);
if($username){
    $reg="Insert into travelbooking(Registerationno,NoofGuests,DepartureDate,DateofReturn,Location,TravelDuration)values('$regid',$noofguests,'$departure','$return','$location',DATEDIFF('$return','$departure'))";
    $_SESSION['error']=' ';
    $_SESSION['regid']=$regid;
    mysqli_query($con,$reg);
    $query="Insert into usertravel(Registerationno,username)values('$regid','$username')";
    mysqli_query($con,$query);
    header('location:check.php');
} 
else{  
    $error='Please Login First!';
    $_SESSION['error']=$error;
    header('location:index.php#book');
}

?>