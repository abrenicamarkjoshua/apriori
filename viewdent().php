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
                        <a href="viewLabProc.php">View</a>
                        <a href="labproc.php">Add</a>
                        
                        
                    </div>
					 
                </div>
            </div>
        </li>
	<li>
            <a class="top-heading" href="#">Check-up Summary</a>
			<i class="caret"></i>           
            <div class="dropdown">
                <div class="dd-inner">
                    <div class="column">
                        <h3>Results</h3>
                        <a href="checkupstud.php">Summary of Records</a>
                        <a href="viewAbnormalResultPercentage.php">Records w/ Abnormal Results</a>
                    </div>
					 
                </div>
            </div>
        </li>
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

<form action='viewdent.php' method='GET' id="searchint">


<input type='text'  name='search' id='box' placeholder="Search ID / Name">
<input type='submit' name='submit' value='Search' id='create2' >
<a href="viewdent.php"><input type='button' value = 'Clear' id ='create2'></a>
</br></br></br>

</form>

    
<?php
include('connect.php');
session_start();


if(isset($_GET['search'])){

$searchValue = $_GET['search'];    
    
$queryStr = "SELECT	s.student_id 'Student_ID',
                        concat(s.firstName,' ',s.lastname) 'Full_Name',
                        lp.transDate,
                        
                        COALESCE(NULLIF(lp.TartarRemoval, ''), 'No Record')'TartarRemoval',
                        COALESCE(NULLIF(lp.GinivalCleaning, ''), 'No Record')'GinivalCleaning',
                        COALESCE(NULLIF(lp.Piezon, ''), 'No Record') 'Piezon',

                        COALESCE(NULLIF(lp.RectorationRes, ''), 'No Record')'RectorationRes',
                        
        
                        COALESCE(NULLIF(lp.SimpleExtraction, ''), 'No Record')'SimpleExtraction',
                        COALESCE(NULLIF(lp.SurgicalExtraction, ''), 'No Record') 'SurgicalExtraction',
                        
                        COALESCE(NULLIF(lp.Specify, ''), 'No Record')'Specify'

                        
                        
            FROM	student s
                        INNER JOIN lab_procedure lp
                        ON s.student_id = lp.uid
               
            WHERE       lp.uid = '$searchValue'
                        OR s.firstName like '%$searchValue%'
                        OR s.lastName  like '%$searchValue%'

            ";					
$result = mysql_query($queryStr);
//echo $queryStr;
if(mysql_num_rows($result)>0) {

echo "
							
							
              <table align='center' cellspacing='10' cellpadding='10' style = 'background-color: white; border-radius:10px'>
				
				<th>Student No.</th>
				<th>Name</th>					
				<th>Date</th>
                                <th>Medical Record</th>
                                <tr>
                                    <td colspan = 4>
                                        <hr style = 'height:5px; background-color: black;'>
                                    </td>
                                </tr>
     ";

    while($recordSet = mysql_fetch_assoc($result))

    
        
        
        
	echo"<tr>
                  <td>$recordSet[Student_ID]</td>
                  <td>$recordSet[Full_Name]</td>
                  <td>$recordSet[transDate]</td>
                  <td>  
                        <hr>
                        <B>ORAL PROPHYLAXIS:</B><br>
                        <hr>
                        &nbsp&nbsp Tartar Removal:&nbsp <i>$recordSet[TartarRemoval]</i><br>
                        &nbsp&nbsp Ginival Cleaning:&nbsp <i>$recordSet[GinivalCleaning]</i><br> 
                        &nbsp&nbsp Piezon:&nbsp <i>$recordSet[Piezon]</i><br> 
                     
                            
                        <hr>
                            
                        <B>RECTORATION:</B><br>
                        <hr>
                        &nbsp&nbsp Rectoration:&nbsp <i>$recordSet[RectorationRes]</i><br>
                        
                            
                        <hr>

                        <B>EXTRACTION:</B><br>
                        <hr>
                        &nbsp&nbsp Simple Extraction:&nbsp <i>$recordSet[SimpleExtraction]</i><br>
                        &nbsp&nbsp Surgical Extraction:&nbsp <i>$recordSet[SurgicalExtraction]</i><br>
                       
                        <hr>
                        
                        <B>OTHERS:</B><br>
                        <hr>
                        &nbsp&nbsp Ohers:&nbsp <i>$recordSet[Specify]</i><br>

                        <hr>

                  </td>
                  <tr>
                    <td colspan = 4>
                        <hr style = 'height:5px; background-color: black;'>
                    </td>
                  </tr>
                  <td><a href='delete.php?id=$recordSet[Student_ID]'></a></td>
                  
			  ";}
			 echo"</table>";  
    
  
    
} else {
							
$queryStr = "SELECT	s.student_id 'Student_ID',
                        concat(s.firstName,' ',s.lastname) 'Full_Name',
                        lp.transDate,
                        
                        COALESCE(NULLIF(lp.TartarRemoval, ''), 'No Record')'TartarRemoval',
                        COALESCE(NULLIF(lp.GinivalCleaning, ''), 'No Record')'GinivalCleaning',
                        COALESCE(NULLIF(lp.Piezon, ''), 'No Record') 'Piezon',

                        COALESCE(NULLIF(lp.RectorationRes, ''), 'No Record')'RectorationRes',
                        
        
                        COALESCE(NULLIF(lp.SimpleExtraction, ''), 'No Record')'SimpleExtraction',
                        COALESCE(NULLIF(lp.SurgicalExtraction, ''), 'No Record') 'SurgicalExtraction',
                        
                        COALESCE(NULLIF(lp.Specify, ''), 'No Record')'Specify'

                        
                        
            FROM	student s
                        INNER JOIN lab_procedure lp
                        ON s.student_id = lp.uid";					
$result = mysql_query($queryStr);
//echo $queryStr;
if(mysql_num_rows($result)>0) {

echo "
							
							
              <table align='center' cellspacing='10' cellpadding='10' style = 'background-color: white; border-radius:10px'>
				
				<th>Student No.</th>
				<th>Name</th>					
				<th>Date</th>
                                <th>Medical Record</th>
                                <tr>
                                    <td colspan = 4>
                                        <hr style = 'height:5px; background-color: black;'>
                                    </td>
                                </tr>
     ";

    while($recordSet = mysql_fetch_assoc($result))

    
        
        
        
	echo"<tr>
                  <td>$recordSet[Student_ID]</td>
                  <td>$recordSet[Full_Name]</td>
                  <td>$recordSet[transDate]</td>
                  <td>  
                        <hr>
                        <B>ORAL PROPHYLAXIS:</B><br>
                        <hr>
                        &nbsp&nbsp Tartar Removal:&nbsp <i>$recordSet[TartarRemoval]</i><br>
                        &nbsp&nbsp Ginival Cleaning:&nbsp <i>$recordSet[GinivalCleaning]</i><br> 
                        &nbsp&nbsp Piezon:&nbsp <i>$recordSet[Piezon]</i><br> 
                     
                            
                        <hr>
                            
                        <B>RECTORATION:</B><br>
                        <hr>
                        &nbsp&nbsp Rectoration:&nbsp <i>$recordSet[RectorationRes]</i><br>
                        
                            
                        <hr>

                        <B>EXTRACTION:</B><br>
                        <hr>
                        &nbsp&nbsp Simple Extraction:&nbsp <i>$recordSet[SimpleExtraction]</i><br>
                        &nbsp&nbsp Surgical Extraction:&nbsp <i>$recordSet[SurgicalExtraction]</i><br>
                       
                        <hr>
                        
                        <B>OTHERS:</B><br>
                        <hr>
                        &nbsp&nbsp Ohers:&nbsp <i>$recordSet[Specify]</i><br>

                        <hr>

                  </td>
                  <tr>
                    <td colspan = 4>
                        <hr style = 'height:5px; background-color: black;'>
                    </td>
                  </tr>
                  <td><a href='delete.php?id=$recordSet[Student_ID]'></a></td>
                  
			  ";}
			 echo"</table>";
}
?>
			  
			  
		
		
		</div><br><br>
		
		
		<div  id="borderfooter" style="border">
		
		<div  id="footer" >
			
		</div>
		</div>
</div>
  
</body>
</html>