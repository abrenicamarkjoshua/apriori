<html>
<title>Index</title>
<body>

	<?php
	
	include('iemp.php');
	
	?>

<div id="content">
<br>
<form action='labprocad1emp.php' method='GET' id="searchint">


<input type='text'  name='search' id='box' placeholder="Search ID">
<input type='submit' name='submit' value='Search' id='create2' ></br></br></br>

</form>

<?php
include('connect.php');
session_start();
	


						{
						
						
						
	
							echo "
							
							
              <table align='' cellspacing='4' cellpadding='8'>
				
				<th>ID No.</th>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Middle Name</th>
					";
					
$result=mysql_query("select * from employee");
while($user = mysql_fetch_assoc($result))

			echo"	<tr>
                  <td>$user[student_id]</td>
                  <td>$user[lastname]</td>
                  <td>$user[firstname]</td>
                  <td>$user[middlename]</td>
				  <td><a href='delete.php?id=$user[empid]'></a></td>

                
				                  
				
             
			  ";}
			 echo"</table>";
			  ?>
			  
			  
		
		
		</div><br><br>
		
		
		<div  id="borderfooter" style="border">
		
		<div  id="footer" >
			
		</div>
		</div>
</div>
  
</body>
</html>