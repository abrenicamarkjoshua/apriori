<html>
<body>
	<?php
	$aydi = $_GET['id'];
	include('iemp.php');
	
	?>	

	<form method = "post"  id="register" action = "labformemp.php" >
	
	
<?php include("insertlabemp.php"); $id = $_GET['id']; ?>
            
            <input type="radio" id="radio" name="procedure" value="Fecalysis" required>Fecalysis<br>
            <input type="radio" id="radio" name="procedure" value="Urinalysis" required>Urinalysis<br>
            <input type="radio" id="radio" name="procedure" value="Complete Blood Count" required>Complete Blood Count<br>
            <!--<input type="radio" id="radio" name="procedure" value="Hb Shy Screening" required>Hb Shy Screenings<br>-->
            <input type="text"  id="create2" name="userId" hidden = "true" value = "<?php echo $id; ?>" readonly/>
                 
        <br>
	
	
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