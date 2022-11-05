<?php
    session_start();
?>
    <head>
        <link rel="stylesheet" href="check.css">
    </head>

    <body>
       
        <div class="search__container">
        <?php
            if(isset($_SESSION['error']))
            {
                if($_SESSION['error']==" ")
                {
                    echo "<p style=' font-size: 22px;
                    font-weight: 900;
                    text-align: center;
                    margin-top:30%;
                    color:ff8b88;'>"
                    ."You Have Booked your homestay with Nest. Enjoy your Travel"
                    ."</p>";
                }
            }
            else{
                echo "";
            }    
            
        ?>
            <p class="search__title">
                Enter your Username or Registeration ID to check your status
            </p>
            <form method="post" action="profile.php">
                <input class="search__input" type="text" placeholder="Check Profile And Status">
            </form>
        </div>



    </body>

