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
        #formdeleteid{
            background-color:orange;
        }
        .btn{
            background-color:rgba(255, 165, 0,.4);
            width: 100px; height:30px;
        }
        html,body{
            width:100%;
            height:100%;
        }
        body{
            display:flex;
            flex-direction:column;
            background-color:#eee;
            /* justify-content:center; */
        }
        .header{
            /* background-color:#FFA500; */
            width:fit-content;
            margin:auto;
            justify-content:center;
            align-items:center;
            font-size:30px;
            font-family:'Helvetica';
        }
        .userdetails{
            width:300px;
            background-color:#fff;
            padding: 0px 0px 10px 0px;
        }
        .mainbody{
            display:flex;
            justify-content:space-around;
            padding: 20px 30px;
            flex-wrap:wrap;

        }
        .userdetails{
            /* padding:20px 30px; */
        }
        .usertop{
            background-color:#D7C9C8;
            padding: 20px 30px;
        }
        .userdown{
            background-color:#E4D7D5;
            padding: 20px 40px;
        }
    </style>
    
</head>
<body>
    <header class="header">Admin Panel</header>
    <section class="mainbody">
<?php        
        if( $query_run)
        {
            if(mysqli_num_rows($query_run)>0)
            {
                $formid=1;
                while($row=mysqli_fetch_assoc($query_run))
                {
                    echo "<div class='userdetails'>";
                    echo "<div class='usertop'>";
                    echo "</br>"."Username=$row[username]"."</br>";
                    echo "</br>";
                    echo "</br>"."First Name=$row[fname]"."</br>";
                    echo "</br>";
                    echo "</br>"."Last Name=$row[lname]"."</br>";
                    echo "</br>";
                    
                    echo "</br>"."Booking/Registration No=$row[Registerationno]";
                    echo "</br>";
                    echo "</div>";

                    

                    echo "<div class='userdown'>";
                    // echo "$formid";
                    echo "</br>"."No of Guests=$row[NoofGuests]";
                    $guestid="guest"."$formid";
                   

                    echo "<form method='post' id='formeditid'> 
                        <input type='button' value='edit' onclick='showbutton($guestid)' class='btn' />
                    </form>";
                    
                    echo "<form action='update.php?pid=$guestid&regno=$row[Registerationno]' method='post' style='display:none;' id='$guestid'  >";
                    
                    echo "<input type='text' name='value'/><button type='submit' >Update</button></form> ";
                    echo "</br>";
                    
                    $locationid="location"."$formid";
                    echo "</br>"."Location=$row[Location]";
                    echo '<form method="post" id="formeditid" >';
                    echo "<form method='post' id='formeditid'> 
                        <input type='button' value='edit' class='btn' onclick='showbutton($locationid)' />
                    </form>";
                    echo "<form action='update.php?pid=$locationid&regno=$row[Registerationno]' method='post' id='$locationid' style='display:none;'>";
                    echo '<select placeholder="Place name" name="value">
                        <option value="" disabled selected hidden>Place Name</option>
                        <option value="Mustang">Mustang</option>
                        <option value="Pokhara">Pokhara</option>
                        <option value="Lamjung">Lamjung</option>
                        <option value="Illam">Illam</option>
                        <option value="Tehrathum">Tehrathum</option>
                        <option value="Chitwan">Chitwan</option>
                    </select>
                    <button type="submit" >Update</button> </form>';
                    echo "</br>";
                    
                    $departureid="departure"."$formid";
                    
                    echo "</br>"."Departure Date=$row[DepartureDate]";

                   echo "<form method='post' id='formeditid'> 
                        <input type='button' value='edit' class='btn' onclick='showbutton($departureid)' />
                    </form>";
                    echo "<form action='update.php?pid=$departureid&regno=$row[Registerationno]' method='post' id='$departureid' style='display:none;'><input type='date' name='value' ><button type='submit' >Update</button> </form>";
                    echo "</br>";

                   $returnid="return"."$formid";
                    echo "</br>"."Date of Return=$row[DateofReturn]";
                    // echo '<form method="post" id="formeditid" >'.'<button type="button" class="btn" id="btn" style=" width: 100px; height:30px" value="Edit"  onclick="showbuton(`form4`)">'.'Edit'."</button>".'</form>';
                    echo "<form method='post' id='formeditid'> 
                        <input type='button' value='edit' onclick='showbutton($returnid)' class='btn' />
                    </form>";
                    echo "<form action='update.php?pid=$returnid&regno=$row[Registerationno]' method='post' id='$returnid' style='display:none;'><input type='date' name='value'><button type='submit' >Update</button> </form>";
                    echo "</br>";

                   
                    echo "</br>"."Travel Duration=$row[TravelDuration]";
                    echo "</br>";
                    echo "</br>";
                    
                   
                    echo '<form method="post" action="delete.php" >'.'<button type="submit" id="formdeleteid" style=" width: 200px; height:60px" value="Delete" >'.'Delete All Booking Details'."</button>".'</form>';

                   echo "</div>";
                   echo "</div>";
                   $formid=$formid+1;
                }
            }
            mysqli_free_result($query_run);
        }
        
?>
</section>
</body>
<script>
    showbutton=(d)=>
    {
        if(d.style.display=='none'){
            d.style.display='block';
        }else{
            d.style.display='none';
        }
        
        

        
    }
    

</script>