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
require_once 'header.php';
require_once 'Apriori-Algorithm/class.apriori.php';

$dataset = array();
$students = $db->rawQuery("SELECT * FROM lab_procedure");

foreach($students as $student){
	$set = array();
	
//	if($student['lab_f'] <> ""){
//		array_push($set, $student['lab_f']);
//	}
//	if($student['lab_u'] <> ""){
//		array_push($set, $student['lab_u']);
//	}
//	if($student['lab_cbc'] <> ""){
//		array_push($set, $student['lab_cbc']);
//	}
//	if($student['lab_hsc'] <> ""){
//		array_push($set, $student['lab_hsc']);
//	}
        
        if($student['Fecalysis'] <> 0){
		array_push($set, 'Fecalysis');
	}
	if($student['Urinalysis'] <> 0){
		array_push($set, 'Urinalysis');
	}
        if($student['CBC'] <> 0){
		array_push($set, 'CBC');
	}
        if($student['OralProphylaxis'] <> 0){
		array_push($set, 'OralProphylaxis');
	}
         if($student['Rectoration'] <> 0){
		array_push($set, 'Rectoration');
	}
         if($student['Extraction'] <> 0){
		array_push($set, 'Extraction');
	}
        if($student['Others'] <> ""){
		array_push($set, 'Others');
	}
        if($student['VisualAcuityTest'] <> 0){
		array_push($set, 'VisualAcuityTest');
	}
        if($student['HeadToToeAssessment'] <> 0){
		array_push($set, 'HeadToToeAssessment');
	}
        if($student['VitalSigns'] <> 0){
		array_push($set, 'VitalSigns');
	}
        if($student['FamilyMedicalRecord'] <> 0){
		array_push($set, 'FamilyMedicalRecord');
	}
        if($student['MedicalRecord'] <> 0){
		array_push($set, 'MedicalRecord');
	}

	
	if(count($set) <> 0){
		array_push($dataset, $set);
	}

}

if(isset($_POST['submitParameters'])){
$Apriori = new Apriori();
	$Apriori->setMaxScan($_POST['maximumScan']);       //Scan 2, 3, ...
	$Apriori->setMinSup($_POST['minimumSupport']);         //Minimum support 1, 2, 3, ...
	$Apriori->setDelimiter(',');    //Delimiter
	$Apriori->process($dataset);

}else{
	$Apriori = new Apriori();
	//default values
	$Apriori->setMaxScan(100);       //Scan 2, 3, ...
	$Apriori->setMinSup(3);         //Minimum support 1, 2, 3, ...
	$Apriori->setMinConf(75);       //Minimum confidence - Percent 1, 2, ..., 100
	$Apriori->setDelimiter(',');    //Delimiter
	$Apriori->process($dataset);
}

?>
<pre>
<?php

?>
	</pre>
<center>
	<div style = "height: 20px"></div>
<h3>Parameters</h3>
<table>
	<form action= '' method = 'post'>
		<tr><td>Maximum records: </td>
                    <td><input value = <?php echo (isset($_POST['maximumScan'])) ? $_POST['maximumScan'] : "100";?> type = 'text' name = 'maximumScan' />
                    </td>
                </tr>
		<tr><td>Minimum number of occurrence <br>of set of procedures: </td>
                    <td><input value = <?php echo (isset($_POST['minimumSupport']))  ? $_POST['minimumSupport'] : "3";?> type = 'text' name = 'minimumSupport' /></td></tr>
		
		<tr><td colspan = '2'><input type = 'submit' name = 'submitParameters' value = 'submit parameters'/></td></tr>
		</form>
</table>
</center>
<?php
require_once 'aprioriTable.php';
require_once 'footer.php';
?>
			  
			  
		
		
		</div><br><br>
		
		
		
		<div  id="borderfooter" style="border">
		
		<div  id="footer" >
			
		</div>
		</div>
</div>
  
</body>
</html>