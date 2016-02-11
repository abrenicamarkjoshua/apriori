<html>
<title>Index</title>
<body>

	<script src="ddmenu.js" type="text/javascript"></script>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<div id="contain">
	<img src="images/lpucc.png" width="1200" height="130" alt="logo"/>
	 
	</div>
	<div id='side'>
	
<ul>
<br><br><br><br><br><br><br><br><br><br>
   <li><a href='index.php'><span>Students</span></a></li>
   <li><a href='indexemp.php'><span>Faculty</span></a></li>
   <li><a href='admin.php'><span>Admin</span></a></li>
   <li><a href='logout.php?id=$user[admin_id]'>Logout</a></li>
   
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
		 			<li>
            <a class="top-heading" href="#">Examination</a>
			<i class="caret"></i>           
            <div class="dropdown">
                <div class="dd-inner">
                    <div class="column">
                        <h3>Physical</h3>
                        <a href="viewphysical.php">View</a>
                        <a href="physical.php">Add</a>
                        
                        
                    </div>
					 <div class="column">
                        <h3>Dental</h3>
                        <a href="viewdent.php">View</a>
                        <a href="dent.php">Add</a>
                        
                        
                    </div>
                </div>
            </div>
        </li>
		<li>
            <a class="top-heading" href="#">Procedures</a>
			<i class="caret"></i>           
            <div class="dropdown">
                <div class="dd-inner">
                    <div class="column">
                        <h3>Laboratory</h3>
                        <a href="#">View</a>
                        <a href="labproc.php">Add</a>
                        
                        
                    </div>
					 
                </div>
            </div>
        </li>
		 <li class="no-sub"><a class="top-heading" href="checkupstud.php">Check-up Summary</a></li>
		  <li>
            <a class="top-heading" href="">Referral</a>
			<i class="caret"></i>           
            <div class="dropdown">
                <div class="dd-inner">
                    <div class="column">
                        <h3></h3>
                        <a href="#">View</a>
                        <a href="refferal.php">Add</a>
                        
                        
                    </div>
					
                </div>
            </div>
        </li>
		 </ul> 
			
			
			
			
	</p></center>
	</div>
        </div>


</nav>

<div id="content">
<?php
$connect = mysql_connect("localhost", "root", "")or die ("not connected");
$db = mysql_select_db("clinic");
$a=$_GET['search'];
$b=mysql_query("select*from student where student_id Like '%$a%' OR firstname Like '%$a%' OR lastname Like '%$a%' OR middlename Like '%$a%' OR birthday Like '%$a%' OR gender Like '%$a%' OR address Like '%$a%' OR studentno Like '%$a%' OR guardianno Like '%$a%' OR course Like '%$a%' OR civilstat Like '%$a%'");


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
                  <td><a href='physicalad.php?id=$user[student_id]'>a</a></td>


</tr>
";
}



echo"</table>";


?>
		</div>
<br><br>
		
		
		<div  id="borderfooter" style="border">
		
		<div  id="footer" >
			
		</div>
		</div>
</div>
  
</body>
</html>