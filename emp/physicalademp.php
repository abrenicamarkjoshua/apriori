<html>
<body>
	<?php
	$id = $_GET['id'];
	
	include('iemp.php');
	
	?>	

	
	<form method = "post"  id="register" action ="physicalFormemp.php">
	
	<?php //include("insertphysicalemp.php");?>
	<input type="radio" id="radio" name="procedure" value="VAT">Visual Activity Test<br>
	<input type="radio" id="radio" name="procedure" value="HTTA">Head to toe assessment<br>
	<input type="radio" id="radio" name="procedure" value="VS">Vital Signs<br>
        <input type="radio" id="radio" name="procedure" value="FMH">Family Medical History<br>
        <input type="radio" id="radio" name="procedure" value="MH">Medical History<br>
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