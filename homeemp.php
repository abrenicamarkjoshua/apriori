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
	include('connect.php');
	session_start();
$logid=$_SESSION['empid'];
if($logid)	{

	$userid=$logid;
	$result=mysql_query("select * from employee where empid = '$userid'");
	while($user = mysql_fetch_assoc($result))
	
	echo"$user[firstname]";
	}
	echo"
	 <li><a href='joshuaemp.php?id=$logid'><span style='font-size:15px; color:white;'>Update Info</span></a></li>
   <li><span  style='font-size:15px; color:white;'><a href='logout.php?id=$user[empid]'>Logout</a></span></li>
	";
	
	?></p></center></span></li>
  
   
</ul>
</div>
<div id="loob">
        
        
	
	
	<nav id="ddmenu">
	
	
	
	<div class="menu-icon"></div>

	
        <div  id="border" style="border-style: hidden; height: 8% margin=10%">
        <div id="header" style>
	<center><p>
	<ul>
		
			
		 <li class="no-sub"><a class="top-heading" href="homeemp.php">Employee Information</a></li>
		 <li class="no-sub"><a class="top-heading" href="checkupstudhomeemp.php">Check-up Summary</a></li>
		  <li class="no-sub"><a class="top-heading" href="viewrefferalhomeemp.php">Refferal</a></li>
		 </ul> 
			
			
			
			
	</p></center>
	</div>
        </div>


</nav>

<div id="content">
<?php
include('connect.php');



$logid=$_SESSION['empid'];
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
					<th>Department</th>
					<th>Civil Status</th>";
					
$result=mysql_query("select * from employee where empid = '$userid'");
while($user = mysql_fetch_assoc($result))

			echo"	<tr>
                  <td>$user[empid]</td>
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
				  <td><a href='updateinfo.php?id=$user[empid]'></a></td>

                
				                  
				
             
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