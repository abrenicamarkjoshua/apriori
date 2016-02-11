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
$logid=$_SESSION['student_id'];
if($logid)	{

	$userid=$logid;
	$result=mysql_query("select * from student where student_id = '$userid'");
	while($user = mysql_fetch_assoc($result))
	
	echo"$user[firstname]";
	}
	echo"
	 <li><a href='joshua.php?id=$logid'><span style='font-size:15px; color:white;'>Update Info</span></a></li>
   <li><span  style='font-size:15px; color:white;'><a href='logout.php?id=$user[student_id]'>Logout</a></span></li>
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
		
			
		 <li class="no-sub"><a class="top-heading" href="home.php">Students Information</a></li>
		 <li class="no-sub"><a class="top-heading" href="checkupstudhome.php">Check-up Summary</a></li>
		  <li class="no-sub"><a class="top-heading" href="viewrefferalhome.php">Refferal</a></li>
		 </ul> 
			
			
			
			
	</p></center>
	</div>
        </div>


</nav>

<div id="content">
<center>
<br>


<?php include('connect.php');
	
$stud_id=$_GET['id'];

						
						
						
						
	
							
					
$result=mysql_query("select * from student where student_id = $stud_id");

	$a=mysql_fetch_array($result);
			 ?>

<html>
<form method="post">

Contact Number:&nbsp;&nbsp;&nbsp;<input type="text" name="stud" value="<?php echo $a['studentno'];?>"><br><br>
Guardian Number:&nbsp;<input type="text" name="guard" value="<?php echo $a['guardianno']; ?>"><br>

<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="submit" value="Update" name="btn" />

</html>
<?php
	if($_POST){
	
	if($_POST['stud']==="" && $_POST['guard']==="" || $_POST['stud']===""  || $_POST['guard']==="" ){
	echo"
		<script>
		alert('Please Complete All Fields');
		</script>
	
	";
	
	}else{
	mysql_query("update student set studentno='$_POST[stud]', guardianno='$_POST[guard]' where student_id='$stud_id'");
	echo"
		<script>
		alert('Contact Updated');
		window.location.href ='home.php';
		</script>
	
	";
	}
	
	

}
?>
</center>
		</div>
		
		</div><br><br>
			  

		
		
		</div>
		
		
		<div  id="borderfooter" style="border">
	
		<div  id="footer" >
			
		</div>
		</div>

  
</body>
</html>

























