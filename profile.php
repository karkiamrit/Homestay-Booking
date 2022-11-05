<body style="background-color:orange;">
<?php
    session_start();
    $con=mysqli_connect('localhost','root','');
    $db=mysqli_select_db($con,'project');
    $userdetail=$_POST['userdetail'];
    if($db)
    {   
        $query="select * from user
        Inner Join travelbooking
        on user.username=travelbooking.username
        where Registerationno='$userdetail' or user.username='$userdetail' ";
        $query_run=mysqli_query($con,$query);
        {
        if( $query_run)
        {
            if(mysqli_num_rows($query_run)>0)
            {
                while($row=mysqli_fetch_assoc($query_run))
                {
                    echo "</br>"."regid=$row[Registerationno]";
                    echo "</br>"."firstname=$row[fname]";
                    echo "</br>"."lastname=$row[lname]";
                    echo "</br>"."Location=$row[Location]";
                }
            }
        }
        mysqli_free_result($query_run);
        }  
    } 
?>
</body>