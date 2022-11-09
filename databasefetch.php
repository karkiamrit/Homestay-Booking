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
            background-color:orange;
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
                    echo "</br>"."Username=$row[username]"."</br>";
                    echo "</br>";
                    echo "</br>"."First Name=$row[fname]"."</br>";
                    echo "</br>";
                    echo "</br>"."Last Name=$row[lname]"."</br>";
                    echo "</br>";

                    $_SESSION['Regno']=$row['Registerationno'];
                    
                    echo "</br>"."Booking/Registration No=$row[Registerationno]";
                    echo "</br>";

                    echo "</br>"."No of Guests=$row[NoofGuests]";
                    echo '<form method="post" id="formeditid" >'.'<button type="button" class="btn" id="btn" style=" width: 100px; height:30px" value="Edit"  onclick="showbuton(`form1`)">'.'Edit'."</button>".'</form>';
                    echo '<form action="update.php" method="post" id="form1" style="display:none;"><input type="text"><button type="submit" ">Update</button></form> ';
                    echo "</br>";
                    
                    echo "</br>"."Location=$row[Location]";
                    echo '<form method="post" id="formeditid" >'.'<button type="button" class="btn" id="btn" style=" width: 100px; height:30px" value="Edit"  onclick="showbuton(`form2`)">'.'Edit'."</button>".'</form>';
                    echo '<form action="update.php" method="post" id="form2" style="display:none;">
                    <select placeholder="Place name" >
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
                    
                    echo "</br>"."Departure Date=$row[DepartureDate]";
                    echo '<form method="post" id="formeditid" >'.'<button type="button" class="btn" id="btn" style=" width: 100px; height:30px" value="Edit"  onclick="showbuton(`form3`)">'.'Edit'."</button>".'</form>';
                    echo '<form action="update.php" method="post" id="form3" style="display:none;"><input type="text" ><button type="submit" >Update</button> </form>';
                    echo "</br>";

                    echo "</br>"."Date of Return=$row[DateofReturn]";
                    echo '<form method="post" id="formeditid" >'.'<button type="button" class="btn" id="btn" style=" width: 100px; height:30px" value="Edit"  onclick="showbuton(`form4`)">'.'Edit'."</button>".'</form>';
                    echo '<form action="update.php" method="post" id="form4" style="display:none;"><input type="text" ><button type="submit" >Update</button> </form>';
                    echo "</br>";

                    echo "</br>"."Travel Duration=$row[TravelDuration]";
                    echo "</br>";
                    echo "</br>";
                    
                   
                    echo '<form method="post" action="delete.php" >'.'<button type="submit" id="formdeleteid" style=" width: 200px; height:60px" value="Delete" >'.'Delete All Booking Details'."</button>".'</form>';
                }
            }
            mysqli_free_result($query_run);
        }
        
?>
<script>
    showbuton=(e)=>
    {
        var form=document.getElementById(e);
        form.style.display='';

    }

</script>
