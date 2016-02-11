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
				
				<th>Student No.</th>
					<th>Name</th>					
					<th>Record</th>";
					
$result=mysql_query("select * from student");
while($user = mysql_fetch_assoc($result))

			echo"	<tr>
                  <td>$user[student_id]</td>
                  <td>$user[lastname],$user[firstname]&nbsp; $user[middlename]</td>
				  
				   <td>$user[phy_vat]<br> $user[phy_htta]<br> $user[phy_vs]<br> $user[phy_fmh]<br> $user[phy_fm]</td>
				  <td><a href='delete.php?id=$user[student_id]'></a></td>

                
				                  
				
             
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