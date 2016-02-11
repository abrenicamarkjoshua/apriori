<html>
<body>
		
	<script src="ddmenu.js" type="text/javascript"></script>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<div id="contain">
	<img src="images/lpu.png" width="150" height="150" alt="logo"/>
	 
	</div>
	<div id='side'>
	
<ul>
<br><br><br><br><br><br><br><br><br><br>
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
		
			
		 <li class="no-sub"><a class="top-heading" href="index.php">Students Information</a></li>
		 <li class="no-sub"><a class="top-heading" href="index.php">Check-up Summary</a></li>
		  <li class="no-sub"><a class="top-heading" href="refferal.php">Refferal</a></li>
		 </ul> 
			
			
			
			
	</p></center>
	</div>
        </div>


</nav>

<div id="content">
<?php
include('connect.php');
session_start();


$logid=$_SESSION['student_id'];
if($logid)	{
$userid=$logid;
						{
						
				echo "
							
							
              "
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