<head>
    <link rel='stylesheet' href="adminlogin.css">
</head>
<body>

<div id="bg"></div>

<form action="processadmin.php" method='post'>
    
  <label for="adminemail"></label>
  <input type="text" name="adminemail" id="adminemail" placeholder="email" class="email">
    
  <label for="adminpass"></label>
  <input type="password" name="adminpass" id="adminpass" placeholder="password" class="pass">
    
  <button type="submit">login to your account</button>
  <?php
    session_start();    
    if(isset($_GET['error']))
    {
        echo "<p style='color:red;'>".$_GET['error'].'</p>';
        
    }      
?>
    
</form>

</body>