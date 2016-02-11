<html>
<title>Index</title>
<body>

	<?php
	include('iemp.php');
?>
 
<div id="content">
<form action='physicalad1emp.php' method='GET' id="searchint">


<input type='text'  name='search' id='box' placeholder="Search ID">
<input type='submit' name='submit' value='Search' id='create2' ></br></br></br>

</form>


<?php
include('connect.php');
$a=$_GET['search'];
$b=mysql_query("select*from employee where empid Like '%$a%' OR firstname Like '%$a%' OR lastname Like '%$a%' OR middlename Like '%$a%' OR birthday Like '%$a%' OR gender Like '%$a%' OR address Like '%$a%'  OR civilstat Like '%$a%'");




echo"<table align='' cellspacing='4' cellpadding='8'>
<th>ID</th>
<th>Last Name</th>
<th>First Name</th>
<th>Middlename</th>

";



while($user=mysql_fetch_array($b)){
echo"

<tr>
				  <td>$user[empid]</td>
                  <td>$user[lastname]</td>
                  <td>$user[firstname]</td>
                  <td>$user[middlename]</td>
				  <td><a href='physicalademp.php?id=$user[empid]'><input type='submit' name='submit' value='Add' id='create2' ></a></td> 


</tr>
";
}




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