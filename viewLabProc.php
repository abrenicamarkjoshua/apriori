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

<form action='viewLabProc.php' method='GET' id="searchint">


<input type='text'  name='search' id='box' placeholder="Search ID / Name">
<input type='submit' name='submit' value='Search' id='create2' >
<a href="viewLabProc.php"><input type='button' value = 'Clear' id ='create2'></a>
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
                        
                        COALESCE(NULLIF(lp.Parasite, ''), 'No Record')'Parasite',
                        COALESCE(NULLIF(lp.Puscell, ''), 'No Record')'Puscell',
                        COALESCE(NULLIF(lp.rbc, ''), 'No Record') 'Rbc',
                        COALESCE(NULLIF(lp.Fbacteria, ''), 'No Record')'FBacteria',
                        COALESCE(NULLIF(lp.Macrophages, ''), 'No Record')'Macrophages',
                        COALESCE(NULLIF(lp.FatGlobules, ''), 'No Record')'FatGlobules',

                        COALESCE(NULLIF(lp.Color, ''), 'No Record')'Color',
                        COALESCE(NULLIF(lp.Appearance, ''), 'No Record')'Appearance',
                        COALESCE(NULLIF(lp.Glucose, ''), 'No Record') 'Glucose',
                        COALESCE(NULLIF(lp.Protein, ''), 'No Record')'Protein',
                        COALESCE(NULLIF(lp.UBacteria, ''), 'No Record')'UBacteria',
                        COALESCE(NULLIF(lp.Nitrite, ''), 'No Record')'Nitrite',
        
                        COALESCE(NULLIF(lp.RedBloodCell, ''), 'No Record')'RedBloodCell',
                        COALESCE(NULLIF(lp.WhiteBloodCell, ''), 'No Record') 'WhiteBloodCell',
                        COALESCE(NULLIF(lp.Hemoglobin, ''), 'No Record')'Hemoglobin',
                        COALESCE(NULLIF(lp.Hematocrit, ''), 'No Record')'Hematocrit',
                        COALESCE(NULLIF(lp.Platelets, ''), 'No Record')'Platelets'

                        
                        
            FROM	student s
                        INNER JOIN lab_procedure lp
                        ON s.student_id = lp.uid
                        
            WHERE       lp.uid = '$searchValue'
                        OR s.firstName like '%$searchValue%'
                        OR s.lastName  like '%$searchValue%'";
    
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
                        <B>FECALYSIS:</B><br>
                        <hr>
                        &nbsp&nbsp Parasite:&nbsp <i>$recordSet[Parasite]</i><br>
                        &nbsp&nbsp PussCell:&nbsp <i>$recordSet[Puscell]</i><br> 
                        &nbsp&nbsp RBC:&nbsp <i>$recordSet[Rbc]</i><br> 
                        &nbsp&nbsp Bacteria:&nbsp <i>$recordSet[FBacteria]</i><br>
                        &nbsp&nbsp Macrophages:&nbsp <i>$recordSet[Macrophages]</i><br> 
                        &nbsp&nbsp FatGlobules:&nbsp <i>$recordSet[FatGlobules]</i><br>
                            
                        <hr>
                            
                        <B>URINALYSIS:</B><br>
                        <hr>
                        &nbsp&nbsp Color:&nbsp <i>$recordSet[Color]</i><br>
                        &nbsp&nbsp Appearance:&nbsp <i>$recordSet[Appearance]</i><br>
                        &nbsp&nbsp Glucose:&nbsp <i>$recordSet[Glucose]</i><br>
                        &nbsp&nbsp Protein:&nbsp <i>$recordSet[Protein]</i><br>
                        &nbsp&nbsp Bacteria:&nbsp <i>$recordSet[UBacteria]</i><br>
                        &nbsp&nbsp Nitrate:&nbsp <i>$recordSet[Nitrite]</i><br>
                            
                        <hr>

                        <B>COMPLETE BLOOD COUNT:</B><br>
                        <hr>
                        &nbsp&nbsp Color:&nbsp <i>$recordSet[RedBloodCell]</i><br>
                        &nbsp&nbsp Appearance:&nbsp <i>$recordSet[WhiteBloodCell]</i><br>
                        &nbsp&nbsp Glucose:&nbsp <i>$recordSet[Hemoglobin]</i><br>
                        &nbsp&nbsp Protein:&nbsp <i>$recordSet[Hematocrit]</i><br>
                        &nbsp&nbsp Bacteria:&nbsp <i>$recordSet[Platelets]</i><br>
                        
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
}   else    {
    $queryStr = "SELECT	s.student_id 'Student_ID',
                        concat(s.firstName,' ',s.lastname) 'Full_Name',
                        lp.transDate,
                        
                        COALESCE(NULLIF(lp.Parasite, ''), 'No Record')'Parasite',
                        COALESCE(NULLIF(lp.Puscell, ''), 'No Record')'Puscell',
                        COALESCE(NULLIF(lp.rbc, ''), 'No Record') 'Rbc',
                        COALESCE(NULLIF(lp.Fbacteria, ''), 'No Record')'FBacteria',
                        COALESCE(NULLIF(lp.Macrophages, ''), 'No Record')'Macrophages',
                        COALESCE(NULLIF(lp.FatGlobules, ''), 'No Record')'FatGlobules',

                        COALESCE(NULLIF(lp.Color, ''), 'No Record')'Color',
                        COALESCE(NULLIF(lp.Appearance, ''), 'No Record')'Appearance',
                        COALESCE(NULLIF(lp.Glucose, ''), 'No Record') 'Glucose',
                        COALESCE(NULLIF(lp.Protein, ''), 'No Record')'Protein',
                        COALESCE(NULLIF(lp.UBacteria, ''), 'No Record')'UBacteria',
                        COALESCE(NULLIF(lp.Nitrite, ''), 'No Record')'Nitrite',
        
                        COALESCE(NULLIF(lp.RedBloodCell, ''), 'No Record')'RedBloodCell',
                        COALESCE(NULLIF(lp.WhiteBloodCell, ''), 'No Record') 'WhiteBloodCell',
                        COALESCE(NULLIF(lp.Hemoglobin, ''), 'No Record')'Hemoglobin',
                        COALESCE(NULLIF(lp.Hematocrit, ''), 'No Record')'Hematocrit',
                        COALESCE(NULLIF(lp.Platelets, ''), 'No Record')'Platelets'

                        
                        
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
                        <B>FECALYSIS:</B><br>
                        <hr>
                        &nbsp&nbsp Parasite:&nbsp <i>$recordSet[Parasite]</i><br>
                        &nbsp&nbsp PussCell:&nbsp <i>$recordSet[Puscell]</i><br> 
                        &nbsp&nbsp RBC:&nbsp <i>$recordSet[Rbc]</i><br> 
                        &nbsp&nbsp Bacteria:&nbsp <i>$recordSet[FBacteria]</i><br>
                        &nbsp&nbsp Macrophages:&nbsp <i>$recordSet[Macrophages]</i><br> 
                        &nbsp&nbsp FatGlobules:&nbsp <i>$recordSet[FatGlobules]</i><br>
                            
                        <hr>
                            
                        <B>URINALYSIS:</B><br>
                        <hr>
                        &nbsp&nbsp Color:&nbsp <i>$recordSet[Color]</i><br>
                        &nbsp&nbsp Appearance:&nbsp <i>$recordSet[Appearance]</i><br>
                        &nbsp&nbsp Glucose:&nbsp <i>$recordSet[Glucose]</i><br>
                        &nbsp&nbsp Protein:&nbsp <i>$recordSet[Protein]</i><br>
                        &nbsp&nbsp Bacteria:&nbsp <i>$recordSet[UBacteria]</i><br>
                        &nbsp&nbsp Nitrate:&nbsp <i>$recordSet[Nitrite]</i><br>
                            
                        <hr>

                        <B>COMPLETE BLOOD COUNT:</B><br>
                        <hr>
                        &nbsp&nbsp Color:&nbsp <i>$recordSet[RedBloodCell]</i><br>
                        &nbsp&nbsp Appearance:&nbsp <i>$recordSet[WhiteBloodCell]</i><br>
                        &nbsp&nbsp Glucose:&nbsp <i>$recordSet[Hemoglobin]</i><br>
                        &nbsp&nbsp Protein:&nbsp <i>$recordSet[Hematocrit]</i><br>
                        &nbsp&nbsp Bacteria:&nbsp <i>$recordSet[Platelets]</i><br>
                        
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