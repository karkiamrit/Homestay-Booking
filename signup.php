<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up
        </title>
        <link rel="stylesheet" href="signup.css">
        </head>
    <body>
    <section class="home" id="home">
    <div class="sign">
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
    <div class="controls">
        <span class="vid-btn active" data-src="img/dance.mp4"></span>
    </div>
    <div class="video-container">
        <video src="img/dance.mp4" id="video-slider" loop autoplay muted></video>
    </div>
</section>
        
    </body>
</html>