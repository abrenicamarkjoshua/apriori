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
                        <a href="viewlabproc.php">View</a>
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


<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_POST['procedure'])){
    $procedure = $_POST['procedure'];
    $id = $_POST['userId'];
    selectForm($procedure,$id);
}



// CALL FUNCTION



// FUNCTION TO SHOW WHAT FORM
function selectForm($formType,$idNo){
    
    switch($formType){
        
        case "VAT":
            showForm(1,$idNo);
        break;
        
        case "HTTA":
            showForm(2,$idNo);
        break;
    
        case "VS":
            showForm(3,$idNo);
        break;
    
      
        case "FMH":
            showForm(4,$idNo);
        break;
    
        case "MH":
            showForm(5,$idNo);
        break;
    
    }
    
}


// DISPLAY FORM
function showForm($formType,$idNo){
    
    if ($formType == 1){
        
        
        echo "
            
                <form method = 'POST' action = 'physicalForm.php'>
                    <table class='labTable'>
                    
                        <tr>
                            <th >Visual Activity Test</th><th>ID <input type = 'text' name = 'uid' value = ".$idNo." style = 'text-align:center;   'readonly></th>
                        </tr>
                        <th>TEST</th><th>RESULT</th>
                        
                        <tr>
                            <td>Snellen Test</td>
                            <td>
                                <input type = 'textbox' style = 'width:100%; height: 100%;' id='radio' name = 'SnellenResult' >
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Random E's</td>
                            <td>
                               <input type = 'textbox' style = 'width:100% ; height: 100%;' id='radio' name = 'RandomEResult' >
                            </td>
                        </tr>
                      
                        
                         <tr>
                            <td colspan=2><input type = 'submit' style = 'width:100% ; height: 100%;' name = 'labSubmitBtn1'></td>
                        </tr>
                    </table>
                </form>
              ";    
        
        
    } else if ($formType == 2){
        
    
            echo "
            
                <form method = 'POST' action = 'physicalForm.php'>
                    <table class='labTable'>
                  
              
                        <tr>
                           <th>Head to Toe Assessment</th><th>ID <input type = 'text' name = 'uid' value = ".$idNo." readonly></th>
                        </tr>
                        <th>TEST</th><th>RESULT</th>
                        <tr>
                            <td class = 'center'>
                                REMARKS
                            </td>
                      
                            <td>
                                 <input type = 'textbox' style = 'width:100% ; height: 100%;' id='radio' name = 'HTTAResult' >
                            </td> 
                        
                        <tr>
                            <td colspan=4><input type = 'submit' style = 'width:100% ; height: 100%;' name = 'labSubmitBtn2'></td>
                        </tr>
                            
                    </table>  
                </form>
              ";
        
    } else if ($formType == 3){
                
        
            echo "
            
                <form method = 'POST' action = 'physicalForm.php'>
                    <table class='labTable'>
                    
                      
                        <tr>
                            <th>VITAL SIGNS</th><th>ID <input type = 'text' name = 'uid' value = ".$idNo." readonly></th>
                        </tr>
                        <th>TEST</th><th>RESULT</th>

      
                        <tr>
                            <td class = 'center'>
                                HEIGHT
                            </td>
                      
                            <td>
                                 <input type = 'textbox' style = 'width:100% ; height: 100%;' id='radio' name = 'HeightResult' >
                            </td> 
                        
                        <tr>
                        
                        <tr>
                            <td class = 'center'>
                                WEIGHT
                            </td>
                      
                            <td>
                                 <input type = 'textbox' style = 'width:100% ; height: 100%;' id='radio' name = 'WeightResult' >
                            </td> 
                        
                        <tr>
                        
                        <tr>
                            <td class = 'center'>
                                TEMPARATURE
                            </td>
                      
                            <td>
                                 <input type = 'textbox' style = 'width:100% ; height: 100%;' id='radio' name = 'TemparatureResult' >
                            </td> 
                        
                        <tr>
                        
                        <tr>
                            <td class = 'center'>
                                BLOOD PRESURE
                            </td>
                      
                            <td>
                                 <input type = 'textbox' style = 'width:100% ; height: 100%;' id='radio' name = 'BloodPresureResult' >
                            </td> 
                        
                        <tr>
                        
                        <tr>
                            <td class = 'center'>
                                PULSE RATE
                            </td>
                      
                            <td>
                                 <input type = 'textbox' style = 'width:100% ; height: 100%;' id='radio' name = 'PulseRResult' >
                            </td> 
                        
                        <tr>

                       
                        
                         <tr>
                            <td colspan=4><input type = 'submit' style = 'width:100% ; height: 100%;' name = 'labSubmitBtn3'></td>
                        </tr>   
                    </table> 
                </form>
              ";
        
    } else if ($formType == 4){
        
            echo "
            
                <form method = 'POST' action = 'physicalForm.php'>
                    <table class='labTable'>
                   
                        <tr>
                            <th >Family Medical History</th><th>ID <input type = 'text' name = 'uid' value = ".$idNo." readonly></th>
                        </tr>
                        <th>TEST</th><th>RESULT</th>

      
                        <tr>
                            <td>(Specify)</td>
                            <td>
                                <textarea name = 'FMR' rows = '10' cols = '80' style = 'padding: 10px 10px 10px 10px; resize: none;'>
                                </textarea>
                            </td>
                        </tr>

                       
                        
                         <tr>
                            <td colspan=4><input type = 'submit' name = 'labSubmitBtn4'></td>
                        </tr>   
                    </table> 
                </form>
              ";
    
    }  else {
        
            echo "
            
                <form method = 'POST' action = 'physicalForm.php'>
                   <table class='labTable'>
                    
                        <tr>
                            <th colspan = 2>Medical History</th>
                        </tr>
                        <tr>
                            <th colspan = 2>ID <input type = 'text' name = 'uid' value = ".$idNo." readonly></th>
                        </tr>
                        <th>TEST</th><th>RESULT</th>

      
                        <tr>
                            <td>(Specify)</td>
                            <td>
                                <textarea name = 'MR' rows = '10' cols = '80' style = 'padding: 10px 10px 10px 10px; resize: none;'>
                                </textarea>
                            </td>
                        </tr>

                       
                        
                         <tr>
                            <td colspan=4><input type = 'submit' name = 'labSubmitBtn5'></td>
                        </tr>   
                    </table>  
                </form>
              ";
        
    } 
    
}






// PROCESS ///////////////////////////////////////////////////////////////////////////////

if(isset($_POST['labSubmitBtn1']) || isset($_POST['labSubmitBtn2']) || isset($_POST['labSubmitBtn3']) || isset($_POST['labSubmitBtn4']) || isset($_POST['labSubmitBtn5']) ){
    
    include('connect.php');
    
	
	if(isset($_POST['labSubmitBtn1'])) {
            
            $userid  = $_POST['uid'];
            $SnellenRslt = $_POST ['SnellenResult'];
            $RandomERslt = $_POST ['RandomEResult'];

            
            $queryStr = "SELECT * FROM lab_procedure where uid = '$userid'";
            
            $checkIfExist = mysql_query($queryStr);
            
            if(mysql_num_rows($checkIfExist)>0){
                $queryStr = "UPDATE lab_procedure 
                             SET    VisualAcuityTest = 1,
                                    Snellen = '$SnellenRslt',
                                    RandomE = '$RandomERslt'
                             WHERE uid = '$userid'
                            ";
            } else {
                $queryStr = "INSERT INTO lab_procedure (uid,transDate,VisualAcuityTest,Snellen,RandomE) VALUES('$userid',now(),1,'$SnellenRslt','$RandomERslt')";
            }
            
            
        mysql_query($queryStr);
        
        $queryStr = "SELECT 	* 
                    FROM 	lab_procedure
                    WHERE 	ID in 	( 
                                        SELECT	MAX(ID)
                                        FROM	lab_procedure
                                        WHERE	uid = '$userid'
                                    )
                    ";
        $recordSet = mysql_query($queryStr);
        $recordArray = mysql_fetch_array($recordSet);

        echo "
        
        <table class = 'labtable'>
                    
                        <th >
                            RECORD SUCCESSFULLY UPDATED.
                        </th>
                    
    
                         <tr>
                            <td align = center  ><a href = 'physical.php'><input type = 'button' value = 'BACK'></a></td>
                        </tr>
        </table>";

        } elseif(isset($_POST['labSubmitBtn2'])) {
    
    
            
            $userid  = $_POST['uid'];
            $HTTARslt = $_POST ['HTTAResult'];

            $queryStr = "SELECT * FROM lab_procedure where uid = '$userid'";
            
            $checkIfExist = mysql_query($queryStr);
            
            
            if(mysql_num_rows($checkIfExist)>0){
                
                $queryStr = "UPDATE lab_procedure 
                             SET    HeadToToeAssessment = 1,
                                    HTTARes = '$HTTARslt'
                             WHERE uid = '$userid'
                            ";
            } else {
                
                $queryStr = "INSERT INTO lab_procedure (uid,transDate,HeadToToeAssessment,HTTARes) VALUES('$userid',now(),1,'$HTTARslt')";
            }
            
        //echo $queryStr;
        mysql_query($queryStr);
        
        $queryStr = "SELECT 	* 
                    FROM 	lab_procedure
                    WHERE 	ID in 	( 
                                        SELECT	MAX(ID)
                                        FROM	lab_procedure
                                        WHERE	uid = '$userid'
                                    )
                    ";
        $recordSet = mysql_query($queryStr);
        $recordArray = mysql_fetch_array($recordSet);
        
        //echo $recordArray['uid'],$recordArray['transDate'],$recordArray['Parasite'],$recordArray['PusCell'];
        echo "
        
        <table class = 'labtable'>
                    
                        <th >
                            RECORD SUCCESSFULLY UPDATED.
                        </th>
                    
    
                         <tr>
                            <td align = center  ><a href = 'physical.php'><input type = 'button' value = 'BACK'></a></td>
                        </tr>
        </table>";
            
        } elseif(isset($_POST['labSubmitBtn3'])) {
            
             $userid  = $_POST['uid'];
            $HeightRslt = $_POST ['HeightResult'];
            $WeightRslt = $_POST ['WeightResult'];
            $TemperatueRslt = $_POST ['TemparatureResult'];
            $BloodPresureRslt = $_POST ['BloodPresureResult'];
            $PulseRslt = $_POST ['PulseRResult'];
            
   
            $queryStr = "SELECT * FROM lab_procedure where uid = '$userid'";
            
            $checkIfExist = mysql_query($queryStr);
            
            if(mysql_num_rows($checkIfExist)>0){
                
                
                  $queryStr = "UPDATE lab_procedure 
                             SET    VitalSigns = 1,
                                    Height = '$HeightRslt',
                                    Weight = '$WeightRslt',
                                    Temperatue = '$TemperatueRslt',
                                    BloodPresure = '$BloodPresureRslt',
                                    Pulse = '$PulseRslt'
                             WHERE uid = '$userid'
                            "; 
                } else {
             
                   $queryStr = "INSERT INTO lab_procedure (uid,transDate,VitalSigns,Height,Weight,Temperatue,BloodPresure,Pulse) VALUES('$userid',now(),1,'$HeightRslt','$WeightRslt','$TemperatueRslt','$BloodPresureRslt','$PulseRslt')";
                }
                
                
                                                                                          
          
           
        //echo $queryStr;
        mysql_query($queryStr);
        
        $queryStr = "SELECT 	* 
                    FROM 	lab_procedure
                    WHERE 	ID in 	( 
                                        SELECT	MAX(ID)
                                        FROM	lab_procedure
                                        WHERE	uid = '$userid'
                                    )
                    ";
        $recordSet = mysql_query($queryStr);
        $recordArray = mysql_fetch_array($recordSet);
     
        echo "
        
        <table class = 'labtable'>
                    
                        <th >
                            RECORD SUCCESSFULLY UPDATED.
                        </th>
                    
    
                         <tr>
                            <td align = center  ><a href = 'physical.php'><input type = 'button' value = 'BACK'></a></td>
                        </tr>
        </table>";
            
        } elseif(isset($_POST['labSubmitBtn4'])) {
            
            $userid  = $_POST['uid'];
            $FMRRslt = $_POST ['FMR'];

            $queryStr = "SELECT * FROM lab_procedure where uid = '$userid'";
            
            $checkIfExist = mysql_query($queryStr);
            
            if(mysql_num_rows($checkIfExist)>0){
                
                
                  $queryStr = "UPDATE lab_procedure 
                             SET    FamilyMedicalRecord = 1,
                                    SpecifyFMR = '$FMRRslt'
                             WHERE uid = '$userid'
                            "; 
                } else {
             
                   $queryStr = "INSERT INTO lab_procedure (uid,transDate,FamilyMedicalRecord,SpecifyFMR) VALUES('$userid',now(),1,'$FMRRslt')";
                }
                                                                                    
            
        //echo $queryStr;
        mysql_query($queryStr);
        
        $queryStr = "SELECT 	* 
                    FROM 	lab_procedure
                    WHERE 	ID in 	( 
                                        SELECT	MAX(ID)
                                        FROM	lab_procedure
                                        WHERE	uid = '$userid'
                                    )
                    ";
        $recordSet = mysql_query($queryStr);
        $recordArray = mysql_fetch_array($recordSet);
     
        echo "
        
        <table class = 'labtable'>
                    
                        <th >
                            RECORD SUCCESSFULLY UPDATED.
                        </th>
                    
    
                         <tr>
                            <td align = center  ><a href = 'physical.php'><input type = 'button' value = 'BACK'></a></td>
                        </tr>
        </table>";
            
        }elseif(isset($_POST['labSubmitBtn5'])) {
            
            $userid  = $_POST['uid'];
            $MRRslt = $_POST ['MR'];

            $queryStr = "SELECT * FROM lab_procedure where uid = '$userid'";
            
            $checkIfExist = mysql_query($queryStr);
            
            if(mysql_num_rows($checkIfExist)>0){
                
                
                  $queryStr = "UPDATE lab_procedure 
                             SET    MedicalRecord = 1,
                                    SpecifyMR = '$MRRslt'
                             WHERE uid = '$userid'
                            "; 
                } else {
             
                   $queryStr = "INSERT INTO lab_procedure (uid,transDate,MedicalRecord,SpecifyMR) VALUES('$userid',now(),1,'$MRRslt')";
                }
                                                                                    
            
        //echo $queryStr;
        mysql_query($queryStr);
        
        $queryStr = "SELECT 	* 
                    FROM 	lab_procedure
                    WHERE 	ID in 	( 
                                        SELECT	MAX(ID)
                                        FROM	lab_procedure
                                        WHERE	uid = '$userid'
                                    )
                    ";
        $recordSet = mysql_query($queryStr);
        $recordArray = mysql_fetch_array($recordSet);
     
        echo "
        
        <table class = 'labtable'>
                    
                        <th >
                            RECORD SUCCESSFULLY UPDATED.
                        </th>
                    
    
                         <tr>
                            <td align = center  ><a href = 'physical.php'><input type = 'button' value = 'BACK'></a></td>
                        </tr>
        </table>";
            
        }
    
    
}