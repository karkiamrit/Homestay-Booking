<?php
    session_start();
?>
    <head>
        <link rel="stylesheet" href="check.css">
    </head>

    <body style="background-image:url('https://cdn.wallpapersafari.com/28/71/7KwMbp.jpg'); background-size:cointain;)">
       
        <div class="search__container">
        <?php
            if(isset($_SESSION['regid'])){
                $regid=$_SESSION['regid'];
            }    
            if(isset($_SESSION['error']))
            {
                if($_SESSION['error']==" ")
                {
                    echo "<p style=' font-size: 22px;
                    font-weight: 900;
                    text-align: center;
                    color:ffa500;'>"
                    ."You Have Booked your homestay with Nest. Enjoy your Travel"
                    ."</p>";
                    
                    echo "<p style=' font-size: 22px;
                    font-weight: 900;
                    text-align: center;
                    color:#ffa500;'>"
                    ."Your Booking Key is ".$regid."</p>";
                }
            }
            else{
                echo "";
            }    
            
        ?>  
            <p class="search__title">
                Enter your Registeration ID to check your status
            </p>
            <form method="post" action="profile.php">
                <input class="search__input" type="text" id="userdetail" name="userdetail" placeholder="Check Profile And Status">
            </form>
        </div>



    </body>

