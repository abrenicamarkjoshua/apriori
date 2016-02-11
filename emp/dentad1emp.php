<html>
<title>Index</title>
<body>

	<?php
	include('iemp.php');
?>
</nav>
 
<div id="content">
<form action='dentad1emp.php' method='GET' id="searchint">


<input type='text'  name='search' id='box' placeholder="Search ID">
<input type='submit' name='submit' value='Search' id='create2' ></br></br></br>

</form>


<?php
$connect = mysql_connect("localhost", "root", "")or die ("not connected");
$db = mysql_select_db("clinic");
$a=$_GET['search'];
$b=mysql_query("select*from employee where empid Like '%$a%' OR firstname Like '%$a%' OR lastname Like '%$a%' OR middlename Like '%$a%' OR birthday Like '%$a%' OR gender Like '%$a%' OR address Like '%$a%' OR  civilstat Like '%$a%'");




echo"<table align='' cellspacing='4' cellpadding='8'>
<th>ID</th>
<th>Last Name</th>
<th>First Name</th>
<th>Middlename</th>

";



while($user=mysql_fetch_array($b)){
echo"

<tr>
				  <td>$user[student_id]</td>
                  <td>$user[lastname]</td>
                  <td>$user[firstname]</td>
                  <td>$user[middlename]</td>
				  <td><a href='dentademp.php?id=$user[student_id]'><input type='submit' name='submit' value='Add' id='create2' ></a></td> 


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