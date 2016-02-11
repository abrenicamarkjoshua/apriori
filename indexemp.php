<html>
<title>Index</title>
<body>

	<?php
	include('iemp.php');
	
	?>

<div id="content">
<form action='indexemp1.php' method='GET' id="searchint">


<input type='text'  name='search' id='box' placeholder="Search ID">
<input type='submit' name='submit' value='Search' id='create2' ></br></br></br>

</form>

<?php

	include('connect.php');
	
	
session_start();
	
$userid=['userid'];

						{
						
						
						
	
							echo "
							
							
              <table align='center' cellspacing='4' cellpadding='8'>
				
				
					<th>Last Name</th>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Birthday</th>
					<th>Gender</th>
					<th>Address</th>
					<th>Contact No.</th>
					<th>Dpartment</th>
					<th>Civil Status</th>";
					
$result=mysql_query("select * from employee");
while($user = mysql_fetch_assoc($result))

			echo"	<tr>
                  <td>$user[lastname]</td>
                  <td>$user[firstname]</td>
                  <td>$user[middlename]</td>
                  <td>$user[birthday]</td>
                  <td>$user[gender]</td>
                  <td>$user[address]</td>
                  <td>$user[contact]</td>
                  <td>$user[department]</td>
                  <td>$user[civilstat]</td>
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