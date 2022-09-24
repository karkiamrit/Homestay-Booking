<?php
 session_start();
 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'project');
 $location=$_POST['location'];
 $noofguests=$_POST['noofguests'];
 $departure = date("Y-m-d", strtotime($_POST['departure'])); 

 $return = date("Y-m-d", strtotime($_POST['return'])); 

function RandStr($length, $encrypt = 10){
    $reg_id = '';
    for($i=0;$i<$encrypt;$i++){
        $reg_id = base64_encode(md5(microtime(true)));}
    return substr($reg_id, 0, $length);
}
$regid=RandStr(10);

$reg="Insert into travelbooking(Registerationno,NoofGuests,DepartureDate,DateofReturn,Location,TravelDuration)values('$regid',$noofguests,'$departure','$return','$location',DATEDIFF('$return','$departure'))";
mysqli_query($con,$reg);
header('location:index.php');
    

?>