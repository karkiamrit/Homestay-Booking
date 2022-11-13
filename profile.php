<head>
    <style>
        .header{
            /* background-color:#FFA500; */
            /* width:fit-content; */
            /* margin:auto; */
            /* justify-content:center; */
            /* align-items:center; */
            font-size:30px;
            font-family:'Helvetica';
            display:flex;
            box-shadow: 0 4px 2px -2px orange;
        }
        h1{
            margin:auto;
            font-size:40px;
            /* background-color:red; */

        }
        body{
            width:100%;
            height:100%;
            display:flex;
            flex-direction:column;
            background-color:#eee;
            
            
        }
        section{
            display:flex;
            padding: 20px 40px;
        }
        div{
            display:flex;
            padding:20px 40px;
            background-color:#fff;
            width:fit-content;
            font-size:20px;
            font-family:'Helvetica';
            flex-direction:column;
            justify-content:space-evenly;
            margin-left:37%

        }
        </style>
</head>
<body >
<header class="header">
    <h1>
    Your Booking Details
    </h1>
</header>
<section >
<?php
    session_start();
    $con=mysqli_connect('localhost','root','');
    $db=mysqli_select_db($con,'project');
    $userdetail=$_POST['userdetail'];

    if($db)
    {   
        $query="select * from user
        Inner Join usertravel
        on user.username=usertravel.username
        Inner Join travelbooking
        on travelbooking.Registerationno=usertravel.Registerationno
        where usertravel.Registerationno='$userdetail' ";
        $query_run=mysqli_query($con,$query);
        {
        if( $query_run)
        {
            if(mysqli_num_rows($query_run)>0)
            {
                while($row=mysqli_fetch_assoc($query_run))
                {   
                    echo "<div>";
                    echo "<p>"."Regid: $row[Registerationno]"."</p>";
                    echo "<p>"."Firstname: $row[fname]"."</p>";
                    echo "<p>"."Lastname: $row[lname]"."</p>";
                    echo "<p>"."Location: $row[Location]"."</p>";
                    echo "<p>"."Date of Departure: $row[DepartureDate]"."</p>";
                    echo "<p>"."Date of Arrival: $row[DateofReturn]"."</p>";
                    echo "<p>"."Travel Duration: $row[TravelDuration]"."</p>";
                    echo "</div>";
                }
            }
            mysqli_free_result($query_run);
        }
       
        }  
    } 
?>
</section>
</body>