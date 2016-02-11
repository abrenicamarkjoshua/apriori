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
$logid=$_SESSION['empid'];
if($logid)	{

	$userid=$logid;
	$result=mysql_query("select * from employee where empid = '$userid'");
	while($user = mysql_fetch_assoc($result))
	
	echo"$user[firstname]";
	}
	?></p></center></span></li>
   <li><a href='joshuaemp.php?id=$user[empid]'><span>Update Info</span></a></li>
   <li><a href='logoutemp.php?id=$user[empid]'>Logout</a></li>
   
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
							
							
              				
              <table align='center' cellspacing='10' cellpadding='10'>
				
				<th>Student No.</th>
					<th>Name</th>					
					<th>Record</th>";
					
$result=mysql_query("select * from employee where empid = '$userid'");
while($user = mysql_fetch_assoc($result))

			echo"	<tr>
                  <td>$user[empid]</td>
                  <td>$user[lastname],$user[firstname]&nbsp; $user[middlename]</td>
				  
				  <td>$user[ref_p]<br> $user[ref_im]<br>  $user[ref_fm]<br> $user[ref_o]<br> $user[ref_ent]<br> $user[ref_or]<br> $user[ref_s]<br> $user[ref_g] <br> $user[ref_com] </td>
				  <td><a href='delete.php?id=$user[empid]'></a></td>

                
				                  
				
             
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