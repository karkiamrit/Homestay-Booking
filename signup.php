<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up
        </title>
        <link rel="stylesheet" href="signup.css">
        </head>
    <body style="background-image:url('https://cdn.discordapp.com/attachments/989739723151007764/1038330493751533588/lethalamrit3_homestay_like_heaven_625b09dd-07d3-48a1-9687-730d1a065901.png');background-size:cover;">
    <section class="home" id="home">
    <div class="sign">
            <?php
                session_start();        
                if(isset($_SESSION['msg']))
                {
                    echo "<h1 style='color:red;'>".$_SESSION['msg'].'</h1>';
                    unset($_SESSION['msg']);
                }   
                if(isset($_SESSION['errormsg']))
                {
                    echo "<h1 style='color:red;'>".$_SESSION['errormsg'].'</h1>';
                    unset($_SESSION['errormsg']);
                }            
            ?>
            <form method="post" action="registeration.php" class="form" id="signform">
                <div class="formprop">
                    <label for="fname" ><span style="color:#ffa500;">F</span><span style="color:white;">irstname:</span></label>  
                    <input type="text" placeholder="Firstname" name="fname" id="fname"/>
                </div>
                <div class="formprop">
                    <label for="lname" ><span style="color:#ffa500;">L</span><span style="color:white;">astname:</span></label>
                    <input type="text" placeholder="Lastname" name="lname" id="lname"/>
                    </div>
                <div class="formprop">  
                    <label for="username" ><span style="color:#ffa500;">U</span><span style="color:white;">sername:</span></label>
                    <input type="text" placeholder="Username" name="username" id="username" required>
                </div>  
                <div class="formprop">  
                    <label for="pass" ><span style="color:#ffa500;">P</span><span style="color:white;">assword:</span></label>
                    <input type="password" placeholder="Password" name="pass" id="pass">
                    </div>
                <div class="formprop">  
                    <input type="submit" id="btn" value="Submit" style="background-color:--orange;">
                    <input type="reset" id="btn" value="Reset">
                </div>
            </form>
        </div>
   
</section>
        
    </body>
</html>