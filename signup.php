<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up
        </title>
        <!-- <link rel="stylesheet" href="signup.css"> -->
        </head>
        <style>
            html,body{
                width:100%;
                height:100%;
                margin:0px;
            }
            body{
                display:flex;
                background:#eeeeee;
            }
            .container{
                margin:auto;
                width: 100%;
  /* border: 1px solid #2d2d2d; */
                display: flex;
                justify-content: center;
                /* background-color:red; */
            }
            .signup{
                background-color:#fff;
                padding: 20px 40px;
                align-items:space-around;
                display:flex;
                flex-direction:column;

            }
            .signup-heading{
                padding:0px 0px 5px 0px;
                margin:auto;
                font-size:28px;
                font-family: 'Courier New';
                box-shadow: 0 4px 2px -2px orange;
                
            }
            .signup-form{
                display:flex;
                padding: 30px 15px;
                flex-direction:column;
            }
            .formprop{
                padding:10px 2px;
            }
            .input-field{
                
				font-size: 1rem;
				font-weight: 400;
				line-height: inherit;
				width: 100%;
				height: auto;
				padding: 0.75rem 1.25rem;
				border: none;
				outline: none;
				border-radius: 2rem;
				
				background:#E8F0FE;
            }
            .formsubmit{
                display:flex;
                /* justify-content:center; */

            }
            .input-submit{
                
				font-size: 1rem;
				font-weight: 500;
				line-height: inherit;
				cursor: pointer;
				min-width: 40%;
				height: auto;
				padding: 0.65rem 1.25rem;
				border: none;
				outline: none;
				border-radius: 2rem;
                margin:auto;
                background-color:orange;
            }
            
            
        </style>

    <body>
    <section class="container" id="home">
    <div class="signup">
            
                <div class="signup-heading">Sign Up</div>
                <form method="post" action="registeration.php"  id="signform" class="signup-form">
                <div class="formprop">
                    
                    <input type="text" class="input-field" placeholder="Firstname" name="fname" id="fname" required/>
                </div>
                <div class="formprop">
                    
                    <input type="text" class="input-field" placeholder="Lastname" name="lname" id="lname" required/>
                    </div>
                <div class="formprop">  
                    
                    <input type="text" class="input-field" placeholder="User Name" name="username" id="username" value="" required>
                </div>  
                <div class="formprop">  
                    
                    <input type="password" class="input-field" placeholder="Password" name="pass" value="" autocomplete="off" id="pass">
                    </div>
                <div class="formprop formsubmit">  
                    <input type="submit" class="input-submit" id="btn" value="Submit" style="background-color:--orange;" autocomplete="off">
                    
                </div>
            </form>
        </div>
   
</section>
        
    </body>
</html>