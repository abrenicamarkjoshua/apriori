<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    
    
    
    	<?php include ('connect.php');
		
		$id = $_SESSION['admin_id'] ;
		
		?>
	<script src="ddmenu.js" type="text/javascript"></script>
	
	<link rel="stylesheet" href="css/style.css" type="text/css"/>

	<div id="contain">
	<img src="../images/lpucc.png" width="1200" height="130" alt="logo"/>
	 
	</div>
        
    
    
    
  </head>

  <body>

    <div class="container">

  <div id="login-form">

    <h3>Login</h3>

    <fieldset>

      
	  Password: <?php	echo"" ?>

    </fieldset>
	
  </div>

</div>
    
	
    
    
    
    
  </body>
</html>

