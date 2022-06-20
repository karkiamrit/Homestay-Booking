<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up
        </title>
        <style>
            .sign{
                width: 400px;
                height: 500px;
                margin-left: 38%;
                margin-top: 20%;
            }
        </style>
        </head>
    <body>
        <div class="sign">
        <form method="post" action="registeration.php">
            <label for="fname" >Firstname</label>
            <input type="text" placeholder="Firstname" name="fname" id="fname"/>
            <label for="lname" >Lastname</label>
            <input type="text" placeholder="Lastname" name="lname" id="lname"/>
            <label for="Email" >Email</label>
            <input type="email" placeholder="Enter your email" name="email" id="email">
            <label for="pass" >Password</label>
            <input type="password" placeholder="Password" name="pass" id="pass">
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">

        </form>
        </div>
    </body>
</html>