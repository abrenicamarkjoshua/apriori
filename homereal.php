<html>
<body>
		
	<script src="ddmenu.js" type="text/javascript"></script>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<div id="contain">
	<img src="images/lpucc.png" width="1200" height="130" alt="logo"/>
	 
	</div>
	<div id='side'>
	
<ul>
<br><br><br><br><br><br><br><br><br><br>
	<li><span><center><p style="color:white">Welcome<br><?php
	mysql_connect("localhost", "root", "") or die ("");
	mysql_select_db("clinic");
	session_start();
$logid=$_SESSION['student_id'];
if($logid)	{

	$userid=$logid;
	$result=mysql_query("select * from student where student_id = '$userid'");
	while($user = mysql_fetch_assoc($result))
	
	echo"$user[firstname]";
	}
	?></p></center></span></li>
   <li><a href='joshua.php?id=$user[student_id]'><span>Update Info</span></a></li>
   <li><a href='logout.php?id=$user[student_id]'>Logout</a></li>
   
</ul>
</div>
<div id="loob">
        
        
	
	
	<nav id="ddmenu">
	
	
	
	<div class="menu-icon"></div>

	
        <div  id="border" style="border-style: hidden; height: 8% margin=10%">
        <div id="header" style>
	<center><p>
	<ul>
		
			
		 <li class="no-sub"><a class="top-heading" href="home.php">Students Information</a></li>
		 <li class="no-sub"><a class="top-heading" href="checkupstudhome.php">Check-up Summary</a></li>
		  <li class="no-sub"><a class="top-heading" href="viewrefferalhome.php">Refferal</a></li>
		 </ul> 
			
			
			
			
	</p></center>
	</div>
        </div>


</nav>

<div id="content">
<?php
mysql_connect("localhost", "root", "") or die ("");
		mysql_select_db("clinic");



$logid=$_SESSION['student_id'];
if($logid)	{
$userid=$logid;
						{
						
				echo "
							
							
              <table align='center' cellspacing='1' cellpadding='4'>
				
				<th>Student No.</th>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Birthday</th>
					<th>Gender</th>
					<th>Address</th>
					<th>Contact No.</th>
					<th>Guardian No.</th>
					<th>Course</th>
					<th>Civil Status</th>";
					
$result=mysql_query("select * from student where student_id = '$userid'");
while($user = mysql_fetch_assoc($result))

			echo"	<tr>
                  <td>$user[student_id]</td>
                  <td>$user[lastname]</td>
                  <td>$user[firstname]</td>
                  <td>$user[middlename]</td>
                  <td>$user[birthday]</td>
                  <td>$user[gender]</td>
                  <td>$user[address]</td>
                  <td>$user[studentno]</td>
                  <td>$user[guardianno]</td>
                  <td>$user[course]</td>
                  <td>$user[civilstat]</td>
				  <td><a href='delete.php?id=$user[student_id]'></a></td>
				  <td><a href='updateinfo.php?id=$user[student_id]'></a></td>

                
				                  
				
             
			  ";}
			 echo"</table>";
			 }
			 
			 else
			 {
			 echo "No data detected";
			 }
			  ?>
			  
		</div>
		
		</div><br><br>
			  

		
		
		</div>
		
		
		<div  id="borderfooter" style="border">
	
		<div  id="footer" >
			
		</div>
		</div>

  
</body>
</html>