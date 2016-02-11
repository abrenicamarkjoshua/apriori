<html>
<body>
	<?php
	$id = $_GET['id'];
	
	
	include('iemp.php');
?>	

	
	<form method = "post"  id="register" action ="dentFormemp.php">
	
	
        <?php //include("insertdental.php");?>
        
	<input type="radio" id="radio" name="procedure" value="Oral_Prophylaxis" required>Oral Prophylaxis <br>
	<input type="radio" id="radio" name="procedure" value="Rectoration" required>Rectoration<br>
	<input type="radio" id="radio" name="procedure" value="Extraction" required>Extraction<br>
	<input type="radio" id="radio" name="procedure" value ="Others" required>Others Specify<br>
        <input type="text"  id="create2" name="userId" hidden = "true" value = "<?php echo $id; ?>" readonly/>
	
	
	<p> <input type="submit" id="reg" name='haha'></p>
		</form>
		
		</div>
		<div  id="borderfooter" style="border">
	
		<div  id="footer" >
			
		</div>
		</div>

  </div>
</body>
</html>
<html>
<body>
		
		
		
</body>
</html>