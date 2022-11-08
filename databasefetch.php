<?php
    session_start();
    $con=mysqli_connect('localhost','root','');
    $db=mysqli_select_db($con,'project');
    if($db)
    {   
        $query="select * from user
        Inner Join usertravel
        on user.username=usertravel.username
        Inner Join travelbooking
        on travelbooking.Registerationno=usertravel.Registerationno";
        $query_run=mysqli_query($con,$query);

    }
?>  
<head>
    <style>
        #formid{
            background-color:red;
        }
    </style>
</head>
<?php        
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
                    $_SESSION['Regno']=$row['Registerationno'];
                    echo '<form method="post" action="delete.php" >'.'<button type="submit" id="formid" style=" width: 100px; height:30px" value="Delete" >'.'Delete'."</button>".'</form>';
                }
            }
            mysqli_free_result($query_run);
        }
?>
