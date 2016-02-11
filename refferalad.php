<html>
<body>
	<?php
	$aydi = $_GET['id'];
	
	
	?>	
		
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

<form method = "POST" action="insertrefferal.php" id="register">
	
	
	
	<input type="checkbox" id="radio" name="ref_p" value="Pedia">Pedia<br>
	<input type="checkbox" id="radio" name="ref_im" value="Internal Medicine">Internal Medicine<br>
	<input type="checkbox" id="radio" name="ref_fm" value="Family Medicine">Family Medicine<br>
	<input type="checkbox" id="radio" name="ref_o" value="Opthalmology">Opthalmology<br>
	<input type="checkbox" id="radio" name="ref_ent" value="ENT">ENT<br>
	<input type="checkbox" id="radio" name="ref_or" value="Orthopedic">Orthopedic<br>
	<input type="checkbox" id="radio" name="ref_s" value="Surgery">Surgery<br>
	<input type="checkbox" id="radio" name="ref_g" value="Gynecology">Gynecology<br><br><br><br>


<h3>Doctor's Comment</h3>	
	<textarea rows="4" cols="50" name="ref_com">

</textarea>
	
	<p> <input type="submit" id="reg" value="Proceed" name="haha"></p>
		</form>
	</div>
	
		
		<div  id="borderfooter" style="border">
	
		<div  id="footer" >
			
		</div>
		</div>

  
</body>
</html>
<html>
<body>
		
		
		
</body>
</html>