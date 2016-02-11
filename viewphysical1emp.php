<html>
<title>Index</title>
<body>
<?php
include('iemp.php');
?>

<div id="content">

<form action='viewphysical1.php' method='GET' id="searchint">


<input type='text'  name='search' id='box' placeholder="Search ID">
<input type='submit' name='submit' value='Search' id='create2' ></br></br></br>

</form>
<?php
include('connect.php');
session_start();
	
$userid=['userid'];

						{
						
						
						
	
							echo "
							
							
              <table align='center' cellspacing='10' cellpadding='10'>
				
				<th>ID No.</th>
					<th>Name</th>					
					<th>Record</th>";
					
$result=mysql_query("select * from employee");
while($user = mysql_fetch_assoc($result))

			echo"	<tr>
                  <td>$user[student_id]</td>
                  <td>$user[lastname],$user[firstname]&nbsp; $user[middlename]</td>
				  
				   <td>$user[phy_vat]<br> $user[phy_htta]<br> $user[phy_vs]<br> $user[phy_fmh]<br> $user[phy_fm]</td>
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