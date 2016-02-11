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

<br>


<?php
include('connect.php');
session_start();


if(isset($_GET['freq'])){

$searchValue = $_GET['freq'];
$procedures = explode(",", $searchValue);

$totalItems =  sizeof($procedures);
$select = '';
$where = '';

for($ctr = 0; $ctr < $totalItems;$ctr++){
    
    
    $select = $select.$procedures[$ctr].',';
    $where = $where.$procedures[$ctr]." = 1 AND ";
    
}

$finalSelect =substr_replace($select, "", -1);
$finalWhere = substr_replace($where, "", -4);

    
$queryStr = "SELECT	s.student_id 'Student_ID',
                        concat(s.firstName,' ',s.lastname) 'Full_Name',
                        lp.transDate,
                        
                        COALESCE(NULLIF(lp.Snellen, ''), 'No Record')'Snellen',
                        COALESCE(NULLIF(lp.RandomE, ''), 'No Record')'RandomE',
                        COALESCE(NULLIF(lp.HTTARes, ''), 'No Record')'HTTARes',
                        COALESCE(NULLIF(lp.Height, ''), 'No Record')'Height',
                        COALESCE(NULLIF(lp.Weight, ''), 'No Record') 'Weight',
                        COALESCE(NULLIF(lp.Temperatue, ''), 'No Record') 'Temperatue',
                        COALESCE(NULLIF(lp.BloodPresure, ''), 'No Record') 'BloodPresure',
                        COALESCE(NULLIF(lp.Pulse, ''), 'No Record') 'Pulse',
                        COALESCE(NULLIF(lp.SpecifyFMR, ''), 'No Record')'SpecifyFMR',
                        COALESCE(NULLIF(lp.SpecifyMR, ''), 'No Record')'SpecifyMR',
						
                        COALESCE(NULLIF(lp.TartarRemoval, ''), 'No Record')'TartarRemoval',
                        COALESCE(NULLIF(lp.GinivalCleaning, ''), 'No Record')'GinivalCleaning',
                        COALESCE(NULLIF(lp.Piezon, ''), 'No Record') 'Piezon',
                        COALESCE(NULLIF(lp.RectorationRes, ''), 'No Record')'RectorationRes',
                        COALESCE(NULLIF(lp.SimpleExtraction, ''), 'No Record')'SimpleExtraction',
                        COALESCE(NULLIF(lp.SurgicalExtraction, ''), 'No Record') 'SurgicalExtraction',
                        COALESCE(NULLIF(lp.Specify, ''), 'No Record')'Specify',
                        
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
            WHERE       $finalWhere

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
                  <td valign = 'top'><b>$recordSet[Student_ID]</b></td>
                  <td valign = 'top'><b>$recordSet[Full_Name]</b></td>
                  <td valign = 'top'><b>$recordSet[transDate]</b></td>
                  <td>  
                        <hr>
                        <B><center><font size = '5' color = 'Maroon'>PHYSICAL EXAM</font></center></b>
                        <hr>
                        <B>VISUAL AQUITY:</B><br>
                        <hr>
                        &nbsp&nbsp Snellen:&nbsp <i>$recordSet[Snellen]</i><br>
                        &nbsp&nbsp RandomE:&nbsp <i>$recordSet[RandomE]</i><br> 
                 
                        
                        <hr>
                        <B>HEAD TO TOE ASSESSMENT:</B><br>
                        <hr>
                        &nbsp&nbsp Result:&nbsp <i>$recordSet[HTTARes]</i><br>
                            
                        <hr>
                        <B>VITAL SIGNS:</B><br>
                        <hr>
                        &nbsp&nbsp Height:&nbsp <i>$recordSet[Height]</i><br>
                        &nbsp&nbsp Weight:&nbsp <i>$recordSet[Weight]</i><br>
                        &nbsp&nbsp Temperatue:&nbsp <i>$recordSet[Temperatue]</i><br>
                        &nbsp&nbsp BloodPresure:&nbsp <i>$recordSet[BloodPresure]</i><br>
                        &nbsp&nbsp Pulse Rate:&nbsp <i>$recordSet[Pulse]</i><br>

                        <hr>
                        <B>FAMILY MEDICAL RECORD:</B><br>
                        <hr>
                        &nbsp&nbsp Records:&nbsp <i>$recordSet[SpecifyFMR]</i><br>

                        <hr>
                        
                        <B>MEDICAL RECORD:</B><br>
                        <hr>
                        &nbsp&nbsp Records:&nbsp <i>$recordSet[SpecifyMR]</i><br>

                        <hr>
                        <B><center><font size = '5' color = 'Maroon'>LABORATORY EXAM</font></center></b>
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
                        <B><center><font size = '5' color = 'Maroon'>DENTAL EXAM</font></center></b>
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