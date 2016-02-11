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
            
                  <!--<li class="no-sub"><a class="top-heading" href="checkupstud.php">Check-up Summary</a></li>-->
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

<form action='checkupstud.php' method='GET' id="searchint">


<input type='text'  name='search' id='box' placeholder="Search ID / Name">
<input type='submit' name='submit' value='Search' id='create2' >
<a href="checkupstud.php"><input type='button' value = 'Clear' id ='create2'></a>
</br></br></br>

</form>

    
<?php
include('connect.php');
session_start();

$totalRows = mysql_query("SELECT * FROM lab_procedure "); //3
$totalLabRecords = mysql_num_rows($totalRows);



$FParasiteNumRows = mysql_query("SELECT Parasite FROM lab_procedure WHERE Parasite = 'Parasite Seen' ");
if(mysql_num_rows($FParasiteNumRows)>0){
    $totalParRes = mysql_num_rows($FParasiteNumRows);
    $FParasiteAbnormal = round(($totalFParasite = mysql_num_rows($FParasiteNumRows)/$totalLabRecords) * 100,2)."%";
    
    if( $totalFParasite*100 >= 10){
        $SugTempParasite = mysql_fetch_array(mysql_query("SELECT suggestion FROM mst_suggestion WHERE result_id = 'Fecal_Abnormal_Parasite' "));
        $SugParasite = $SugTempParasite['suggestion'];
        
    } else {
        $SugParasite = " N/A ";
    }
    
} else {
    $totalParRes = 0;
    $SugParasite = " N/A ";
    $FParasiteAbnormal = '0.00';
}

// PUSCELL
$PusCellNumRows = mysql_query("SELECT PusCell FROM lab_procedure WHERE PusCell >= 5 or PusCell < 0 ");
if(mysql_num_rows($PusCellNumRows)>0){
    $totalPcellRes = mysql_num_rows($PusCellNumRows);
    $PusCellAbnormal = round(($totalPuscell = mysql_num_rows($PusCellNumRows)/$totalLabRecords) * 100,2)."%";
    
    if( $totalPuscell*100 >= 10){
        $SugTempPuscell = mysql_fetch_array(mysql_query("SELECT suggestion FROM mst_suggestion WHERE result_id = 'Fecal_Abnormal_PusCell' "));
        $SugPuscell = $SugTempPuscell['suggestion'];
        
    } else {
        $SugPuscell = " N/A ";
    }
    
} else {
    $totalPcellRes = 0;
    $SugPuscell = " N/A ";
    $PusCellAbnormal = '0.00';
}

// BACTERIA
$FBacNumRows = mysql_query("SELECT FBacteria FROM lab_procedure WHERE FBacteria = 'Many' ");
if(mysql_num_rows($FBacNumRows)>0){
    $totalFBacRes = mysql_num_rows($FBacNumRows);
    $FBacAbnormal = ($totalFBac = mysql_num_rows($FBacNumRows)/$totalLabRecords) * 100;
    
    if( $totalFBac*100 >= 10){
        $SugTempFBac = mysql_fetch_array(mysql_query("SELECT suggestion FROM mst_suggestion WHERE result_id = 'Fecal_Abnormal_Bacteria' "));
        $SugFBac = $SugTempFBac['suggestion'];
        
    } else {
        $SugFBac = " N/A ";
    }
    
} else {
    $totalFBacRes = 0;
    $SugFBac = " N/A ";
    $FBacAbnormal = '0.00%';
}

//MACROPHAGES
$MacNumRows = mysql_query("SELECT Macrophages FROM lab_procedure WHERE Macrophages = 'Macrophages Seen' ");
if(mysql_num_rows($MacNumRows)>0){
    $totalMacRes = mysql_num_rows($MacNumRows);
    $MacAbnormal = ($totalMac = mysql_num_rows($MacNumRows)/$totalLabRecords) * 100;
    
    if( $totalMac*100 >= 10){
        $SugTempMac = mysql_fetch_array(mysql_query("SELECT suggestion FROM mst_suggestion WHERE result_id = 'Fecal_Abnormal_Macrophages' "));
        $SugMac = $SugTempMac['suggestion'];
        
    } else {
        $SugMac = " N/A ";
    }
    
} else {
    $totalMacRes = 0;
    $SugMac = " N/A ";
    $MacAbnormal = '0.00%';
}

//FATGLOBULES
$FatNumRows = mysql_query("SELECT FatGlobules FROM lab_procedure WHERE FatGlobules = 'Fat Globulse Seen' ");
if(mysql_num_rows($FatNumRows)>0){
    $totalFatRes = mysql_num_rows($FatNumRows);
    $FatAbnormal = ($totalFat = mysql_num_rows($FatNumRows)/$totalLabRecords) * 100;
    
    if( $totalFat*100 >= 10){
        $SugTempFat = mysql_fetch_array(mysql_query("SELECT suggestion FROM mst_suggestion WHERE result_id = 'Fecal_Abnormal_Macrophages' "));
        $SugFat = $SugTempFat['suggestion'];
        
    } else {
        $SugFat = " N/A ";
    }
    
} else {
    $totalFatRes = 0;
    $SugFat = " N/A ";
    $FatAbnormal = '0.00%';
}

echo "<table align='center' cellspacing='10' cellpadding='10' style = 'background-color: white; border-radius:10px; width:900px;'>
         <th>FECALYSIS ABNORMAL RESULT PERCENTAGE</th>
         <th>Total Record count: $totalLabRecords record/s</th>
         <th>SUGGESTION</th>
        
         <tr>
            <td>Fecalysis Parasite Seen</td>
            <td>$FParasiteAbnormal ($totalParRes out of $totalLabRecords)</td>
            <td>$SugParasite</td>
         </tr>
         
         <tr>
            <td>Puscell Above / Below Normal Range 0-4</td>
            <td>$PusCellAbnormal ($totalParRes out of $totalLabRecords)</td>
            <td>$SugPuscell</td>
         </tr>
         
         <tr>
            <td>Fecalysis Bacteria Seen</td>
            <td>$FBacAbnormal ($totalFBacRes out of $totalLabRecords)</td>
            <td>$SugFBac</td>
         </tr>
         
         <tr>
            <td>Macrophages Seen</td>
            <td>$MacAbnormal ($totalMacRes out of $totalLabRecords)</td>
            <td>$SugMac</td>
         </tr>
         
         <tr>
            <td>Fat Globules Seen</td>
            <td>$FatAbnormal ($totalFatRes out of $totalLabRecords)</td>
            <td>$SugFat</td>
         </tr>
      
      </table>
    <br>
    ";

// URINALYSIS URINALYSIS  URINALYSIS  URINALYSIS  URINALYSIS  URINALYSIS  URINALYSIS  URINALYSIS  URINALYSIS 

// COLOR
$UColorNumRows = mysql_query("SELECT Color FROM lab_procedure WHERE Color = 'Abnormal' ");
if(mysql_num_rows($UColorNumRows)>0){
    $totalColorRes = mysql_num_rows($UColorNumRows);
    $UColorAbnormal = round(($totalColorRes/$totalLabRecords) * 100,2)."%";
    
    if(round(($totalColorRes/$totalLabRecords) * 100,2) >= 10){
        $SugTempUColor = mysql_fetch_array(mysql_query("SELECT suggestion FROM mst_suggestion WHERE result_id = 'URI_Abnormal_Color' "));
        $SugUColor = $SugTempUColor['suggestion'];
        
    } else {
        $SugUColor = " N/A ";
    }
    
} else {
    $totalColorRes = 0;
    $SugUColor = " N/A ";
    $UColorAbnormal = '0.00%';
}

// APPEARANCE
$UAppearanceNumRows = mysql_query("SELECT Appearance FROM lab_procedure WHERE Appearance = 'Abnormal'");
if(mysql_num_rows($UAppearanceNumRows)>0){
    $totalUAppearanceRes = mysql_num_rows($UAppearanceNumRows);
    $UAppearanceAbnormal = round(($totalUAppearanceRes/$totalLabRecords) * 100,2)."%";
    
    if(round(($totalUAppearanceRes/$totalLabRecords) * 100,2) >= 10){
        $SugTempUAppearance = mysql_fetch_array(mysql_query("SELECT suggestion FROM mst_suggestion WHERE result_id = 'URI_Abnormal_Appearance' "));
        $SugUAppearance = $SugTempUAppearance['suggestion'];
        
    } else {
        $SugUAppearance = " N/A ";
    }
    
} else {
    $totalUAppearanceRes = 0;
    $SugUAppearance = " N/A ";
    $UAppearanceAbnormal = '0.00%';
}

// GLUCOSE
$UGlucoseNumRows = mysql_query("SELECT Glucose FROM lab_procedure WHERE Glucose = 'Abnormal' ");
if(mysql_num_rows($UGlucoseNumRows)>0){
    $totalUGlucoseRes = mysql_num_rows($UGlucoseNumRows);
    $UGlucoseAbnormal = round(($totalUGlucoseRes/$totalLabRecords) * 100,2)."%";
    
    if(round(($totalUGlucoseRes/$totalLabRecords) * 100,2) >= 10){
        $SugTempUGlucose = mysql_fetch_array(mysql_query("SELECT suggestion FROM mst_suggestion WHERE result_id = 'URI_Abnormal_Glucose' "));
        $SugUGlucose = $SugTempUGlucose['suggestion'];
        
    } else {
        $SugUGlucose = " N/A ";
    }
    
} else {
    $totalUGlucoseRes = 0;
    $SugUGlucose = " N/A ";
    $UGlucoseAbnormal = '0.00%';
}

// PROTEIN
$UProteinNumRows = mysql_query("SELECT Protein FROM lab_procedure WHERE Protein = 'Abnormal' ");
if(mysql_num_rows($UProteinNumRows)>0){
    $totalUProteinRes = mysql_num_rows($UProteinNumRows);         
    $UProteinAbnormal = round(($totalUProteinRes/$totalLabRecords) * 100,2)."%";
    
    if(round(($totalUGlucoseRes/$totalLabRecords) * 100,2) >= 10){
        $SugTempUProtein = mysql_fetch_array(mysql_query("SELECT suggestion FROM mst_suggestion WHERE result_id = 'URI_Abnormal_Protein' "));
        $SugUProtein = $SugTempUProtein['suggestion'];
        
    } else {
        $SugUProtein = " N/A ";
    }
    
    
} else {
    $totalUProteinRes = 0;
    $SugUProtein = " N/A ";
    $UProteinAbnormal = '0.00%';
}
 
// UBACTERIA
$UBacteriaNumRows = mysql_query("SELECT UBacteria FROM lab_procedure WHERE UBacteria = 'Many' ");
if(mysql_num_rows($UBacteriaNumRows)>0){
    $totalUBacteriaRes = mysql_num_rows($UBacteriaNumRows);
    $UBacteriaAbnormal = round(($totalUBacteriaRes/$totalLabRecords) * 100,2)."%";
    
    if(round(($totalUBacteriaRes/$totalLabRecords) * 100,2) >= 10){
        $SugTempUBacteria = mysql_fetch_array(mysql_query("SELECT suggestion FROM mst_suggestion WHERE result_id = 'URI_Abnormal_Bacteria' "));
        $SugUBacteria = $SugTempUBacteria['suggestion'];
        
    } else {
        $SugUBacteria = " N/A ";
    }
    
} else {
    $totalUBacteriaRes = 0;
    $SugUBacteria = " N/A ";
    $UBacteriaAbnormal = '0.00%';
}

// NITRATE
$UNitriteNumRows = mysql_query("SELECT Nitrite FROM lab_procedure WHERE Nitrite = 'Abnormal' ");
if(mysql_num_rows($UNitriteNumRows)>0){
    $totalUNitriteRes = mysql_num_rows($UNitriteNumRows);
    $UNitriteAbnormal = round(($totalUNitriteRes/$totalLabRecords) * 100,2)."%";
    
    if(round(($totalUNitriteRes/$totalLabRecords) * 100,2) >= 10){
        $SugTempUNitrite = mysql_fetch_array(mysql_query("SELECT suggestion FROM mst_suggestion WHERE result_id = 'URI_Abnormal_Nitrate' "));
        $SugUNitrite = $SugTempUNitrite['suggestion'];
        
    } else {
        $SugUNitrite = " N/A ";
    }
    
} else {
    $totalUNitriteRes = 0;
    $SugUNitrite = " N/A ";
    $UNitriteAbnormal = '0.00%';
}

echo "<table align='center' cellspacing='10' cellpadding='10' style = 'background-color: white; border-radius:10px; width:900px;'>
         <th>URINALYSIS ABNORMAL RESULT PERCENTAGE</th><th>Total Record count: $totalLabRecords record/s</th>
         <th>SUGGESTION</th>

         <tr>
            <td>Color</td>
            <td>$UColorAbnormal ($totalColorRes out of $totalLabRecords)</td>
            <td>$SugUColor</td>
         </tr>
         
         <tr>
            <td>Appearance</td>
            <td>$UAppearanceAbnormal ($totalUAppearanceRes out of $totalLabRecords)</td>
            <td>$SugUAppearance</td>
         </tr>
         
         <tr>
            <td>Glucose</td>
            <td>$UGlucoseAbnormal ($totalUGlucoseRes out of $totalLabRecords)</td>
            <td>$SugUGlucose</td>
         </tr>
         
         <tr>
            <td>Protein</td>
            <td>$UProteinAbnormal ($totalUProteinRes out of $totalLabRecords)</td>
            <td>$SugUProtein</td>
         </tr>
         
         <tr>
            <td>Bacteria</td>
            <td>$UBacteriaAbnormal ($totalUBacteriaRes out of $totalLabRecords)</td>
            <td>$SugUBacteria</td>
         </tr>
         
         <tr>
            <td>Nitrate</td>
            <td>$UNitriteAbnormal ($totalUNitriteRes out of $totalLabRecords)</td>
            <td>$SugUNitrite</td>
         </tr>
      
      </table>
    <br>
    ";

//// COMPLETE BLOOD COUNT

// RBC
$CBCRedBloodNumRows = mysql_query(" SELECT	RedBloodCell 
                                    FROM 	lab_procedure 
                                    WHERE 	RedBloodCell NOT BETWEEN 4.7 AND 6.1 
                                                AND RedBloodCell <> 0.00
                                  " );
if(mysql_num_rows($CBCRedBloodNumRows)>0){
    $totalCBCRedBloodRes = mysql_num_rows($CBCRedBloodNumRows);
    $CBCRedBloodAbnormal = round(($totalCBCRedBloodRes/$totalLabRecords) * 100,2)."%";
    
    if(round(($totalCBCRedBloodRes/$totalLabRecords) * 100,2) >= 10){
        $SugTempCBCRedBlood = mysql_fetch_array(mysql_query("SELECT suggestion FROM mst_suggestion WHERE result_id = 'CBC_Abnormal_RBC' "));
        $SugCBCRedBlood = $SugTempCBCRedBlood['suggestion'];
        
    } else {
        $SugCBCRedBlood = " N/A ";
    }
    
} else {
    $SugCBCRedBlood = " N/A ";
    $totalCBCRedBloodRes = 0;
    $CBCRedBloodAbnormal = '0.00%';
}

// WBC
$CBCWhiteBloodNumRows = mysql_query("
                                    SELECT	WhiteBloodCell 
                                    FROM 	lab_procedure 
                                    WHERE 	WhiteBloodCell NOT BETWEEN 4500 AND 10000 
                                                AND WhiteBloodCell <> 0.00
                                  ");
if(mysql_num_rows($CBCWhiteBloodNumRows)>0){
    $totalCBCWhiteBloodRes = mysql_num_rows($CBCWhiteBloodNumRows);
    $CBCWhiteBloodAbnormal = round(($totalCBCWhiteBloodRes/$totalLabRecords) * 100,2)."%";

    if(round(($totalCBCWhiteBloodRes/$totalLabRecords) * 100,2) >= 10){
        $SugTempCBCWhiteBlood = mysql_fetch_array(mysql_query("SELECT suggestion FROM mst_suggestion WHERE result_id = 'CBC_Abnormal_WBC' "));
        $SugCBCWhiteBlood = $SugTempCBCWhiteBlood['suggestion'];
        
    } else {
        $SugCBCWhiteBlood = " N/A ";
    }
    
    
} else {
    $SugCBCWhiteBlood = " N/A ";
    $totalCBCWhiteBloodRes = 0;
    $CBCWhiteBloodAbnormal = '0.00%';
}

// HEMC
$CBCHEMCNumRows = mysql_query("
                                    SELECT	Hemoglobin 
                                    FROM 	lab_procedure 
                                    WHERE 	Hemoglobin NOT BETWEEN 120 AND 160 
                                                AND Hemoglobin <> 0.00
                                  ");
if(mysql_num_rows($CBCHEMCNumRows)>0){
    $totalCBCHEMCRes = mysql_num_rows($CBCHEMCNumRows);
    $CBCHEMCAbnormal = round(($totalCBCHEMCRes/$totalLabRecords) * 100,2)."%";

    if(round(($totalCBCHEMCRes/$totalLabRecords) * 100,2) >= 10){
        $SugTempCBCHEMC = mysql_fetch_array(mysql_query("SELECT suggestion FROM mst_suggestion WHERE result_id = 'CBC_Abnormal_HEMO' "));
        $SugCBCHEMC = $SugTempCBCHEMC['suggestion'];
        
    } else {
        $SugCBCHEMC = " N/A ";
    }
    
    
} else {
    $SugCBCHEMC = " N/A ";
    $totalCBCHEMCRes = 0;
    $CBCHEMCAbnormal = '0.00%';
}

// HEMATOCRIT
$CBCHEMANumRows = mysql_query("
                                    SELECT	Hematocrit 
                                    FROM 	lab_procedure 
                                    WHERE 	Hematocrit NOT BETWEEN 38.8 AND 50 
                                                AND Hematocrit <> 0.00
                                  ");
if(mysql_num_rows($CBCHEMANumRows)>0){
    $totalCBCHEMARes = mysql_num_rows($CBCHEMANumRows);
    $CBCHEMAAbnormal = round(($totalCBCHEMARes/$totalLabRecords) * 100,2)."%";

    if(round(($totalCBCHEMARes/$totalLabRecords) * 100,2) >= 10){
        $SugTempCBCHEMA = mysql_fetch_array(mysql_query("SELECT suggestion FROM mst_suggestion WHERE result_id = 'CBC_Abnormal_HEMA' "));
        $SugCBCHEMA = $SugTempCBCHEMA['suggestion'];
        
    } else {
        $SugCBCHEMA = " N/A ";
    }
    
    
} else {
    $SugCBCHEMA = " N/A ";
    $totalCBCHEMARes = 0;
    $CBCHEMAAbnormal = '0.00%';
}

// PLATELET COUNT
$CBCPlateletsNumRows = mysql_query("
                                    SELECT	Platelets 
                                    FROM 	lab_procedure 
                                    WHERE 	Platelets NOT BETWEEN 150 AND 450 
                                                AND Platelets <> 0.00
                                  ");
if(mysql_num_rows($CBCPlateletsNumRows)>0){
    $totalCBCPlateletsRes = mysql_num_rows($CBCPlateletsNumRows);
    $CBCPlateletsAbnormal = round(($totalCBCPlateletsRes/$totalLabRecords) * 100,2)."%";

    if(round(($totalCBCPlateletsRes/$totalLabRecords) * 100,2) >= 10){
        $SugTempCBCPlatelets = mysql_fetch_array(mysql_query("SELECT suggestion FROM mst_suggestion WHERE result_id = 'CBC_Abnormal_Platelets' "));
        $SugCBCPlatelets = $SugTempCBCPlatelets['suggestion'];
        
    } else {
        $SugCBCPlatelets = " N/A ";
    }
    
    
} else {
    $SugCBCPlatelets = " N/A ";
    $totalCBCPlateletsRes = 0;
    $CBCPlateletsAbnormal = '0.00%';
}

echo "<table align='center' cellspacing='10' cellpadding='10' style = 'background-color: white; border-radius:10px; width:900px;'>
         <th>COMPLETE BLOOD COUNT ABNORMAL RESULT PERCENTAGE</th><th>Total Record count: $totalLabRecords record/s</th>
         <th>SUGGESTION</th>

         <tr>
            <td>Red Blood Count</td>
            <td>$CBCRedBloodAbnormal ($totalCBCRedBloodRes out of $totalLabRecords)</td>
            <td>$SugCBCRedBlood</td>
         </tr>
         
         <tr>
            <td>White Blood Count</td>
            <td>$CBCWhiteBloodAbnormal ($totalCBCWhiteBloodRes out of $totalLabRecords)</td>
            <td>$SugCBCWhiteBlood</td>    
         </tr>
         
         <tr>
            <td>Hemoglobin Count</td>
            <td>$CBCHEMCAbnormal ($totalCBCHEMCRes out of $totalLabRecords)</td>
            <td>$SugCBCHEMC</td>
         </tr>
         
         <tr>
            <td>Hemotocrit</td>
            <td>$CBCHEMAAbnormal ($totalCBCHEMARes out of $totalLabRecords)</td>
            <td>$SugCBCHEMA</td>
         </tr>
         
         <tr>
            <td>Platelet Count</td>
            <td>$CBCPlateletsAbnormal ($totalCBCPlateletsRes out of $totalLabRecords)</td>
            <td>$SugCBCPlatelets</td>
         </tr>

      
      </table>
    <br>
    ";

?>
			  
			  
		
		
		</div><br><br>
		
		
		<div  id="borderfooter" style="border">
		
		<div  id="footer" >
			
		</div>
		</div>
</div>
  
</body>
</html>