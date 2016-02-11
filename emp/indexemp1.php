<html>
<title>Index</title>
<body>

	<?php
	include('iemp.php');
	
	?>
<div id="content">


<?php
include('connect.php');
$a=$_GET['search'];
$b=mysql_query("select*from employee where empid Like '%$a%' OR firstname Like '%$a%' OR lastname Like '%$a%' OR middlename Like '%$a%' OR birthday Like '%$a%' OR gender Like '%$a%' OR address Like '%$a%' OR contact Like '%$a%' OR department Like '%$a%' OR course Like '%$a%' OR civilstat Like '%$a%'");
	
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