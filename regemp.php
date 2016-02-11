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
<div id="contentreg"><br>
	<form method = "post" action="insertemp.php" id="register">
		
	Username: <input type="text" id="box" name="empid"><br><br>
	Password: <input type="password" id="box" name="emp_pass"><br><br>
	Re-type Password: <input type="password" id="box" name="repasswords"><br><br>
	Lastname: <input type="text" id="box" name="lastname"><br><br>
	Firstname: <input type="text" id="box" name="firstname"><br><br>
	Middlename: <input type="text" id="box" name="middlename"><br><br>
	Birthday: <input type="date" id="box" name="birthday"><br><br>
	Address: <input type="text" id="box" name="address"><br><br>
	Department: <input type="text" id="box" name="department"><br><br>
	Gender:  <input type="radio" id="radio" name="gender" value="Male">Male
			 <input type="radio" id="radio" name="gender" value="Female">Female<br><br>
	Civil Status:<br><br> <input type="radio" id="radio" name="civilstat" value="Single">Single<br>
	<input type="radio" id="radio" name="civilstat" value="Married">Married<br>
	<input type="radio" id="radio" name="civilstat" value="Separated">Separated<br>
	<input type="radio" id="radio" name="civilstat" value="Divorced">Divorced<br>
	<input type="radio" id="radio" name="civilstat" value="Widowed">Widowed<br>
	<input type="radio" id="radio" name="civilstat" value="Preffered not to answer">Preffered not to answer<br><br>
	Contact Number: <input type="text" id="box" name="contact"><br><br>
	
	
	<p> <input type="submit" id="reg" value="Register"></p>
		</form>
		
		</div>
		<div  id="borderfooter" style="border">
	
		<div  id="footer" >
			
		</div>
		</div>

  </div>
</body>
</html>
<html>
<body>
		
		
		
</body>
</html>