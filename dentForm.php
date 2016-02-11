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
        
        case "Oral_Prophylaxis":
            showForm(1,$idNo);
        break;
        
        case "Rectoration":
            showForm(2,$idNo);
        break;
    
        case "Extraction":
            showForm(3,$idNo);
        break;
    
      
        case "Others":
            showForm(4,$idNo);
        break;
    
    }
    
}


// DISPLAY FORM
function showForm($formType,$idNo){
    
    if ($formType == 1){
        
        
        echo "
            
                <form method = 'POST' action = 'dentForm.php'>
                    <table class='labTable'>
                    
                        <tr>
                            <th >Oral prophylaxis </th><th>ID <input type = 'text' name = 'uid' value = ".$idNo." style = 'text-align:center;   'readonly></th>
                        </tr>
                        <th>TEST</th><th>RESULT</th>
                        
                        <tr>
                            <td>Tartar Removal</td>
                            <td>
                                <input type = 'radio' id='radio' name = 'TartarResult' value = 'Yes' required>YES
                                <input type = 'radio' id='radio' name = 'TartarResult' value = 'No'>NO
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Ginival Cleaning</td>
                            <td>
                                <input type = 'radio' id='radio' name = 'GinivalResult' value = 'Yes' required>YES
                                <input type = 'radio' id='radio' name = 'GinivalResult' value = 'No'>NO
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Piezon</td>
                            <td>
                                <input type = 'radio' id='radio' name = 'PiezonResult' value = 'Yes' required>YES
                                <input type = 'radio' id='radio' name = 'PiezonResult' value = 'No'>NO
                            </td>
                        </tr>
                        
                         <tr>
                            <td colspan=2><input type = 'submit' name = 'labSubmitBtn1'></td>
                        </tr>
                    </table>
                </form>
              ";    
        
        
    } else if ($formType == 2){
        
    
            echo "
            
                <form method = 'POST' action = 'dentForm.php'>
                    <table class='labTable'>
                  
              
                        <tr>
                           <th >RECTORATION</th><th>ID <input type = 'text' name = 'uid' value = ".$idNo." readonly></th>
                        </tr>
                        <th>TEST</th><th>RESULT</th>
                        <tr>
                            <td class = 'center'>
                                RECTORATION
                            </td>
                      
                            <td>
                                <input type = 'radio' id='radio' name = 'RectorationResult' value = 'Yes' required>YES
                                <input type = 'radio' id='radio' name = 'RectorationResult' value = 'No'>NO
                            </td> 
                        
                        <tr>
                            <td colspan=4><input type = 'submit' name = 'labSubmitBtn2'></td>
                        </tr>
                            
                    </table>  
                </form>
              ";
        
    } else if ($formType == 3){
        
            echo "
            
                <form method = 'POST' action = 'dentForm.php'>
                    <table class='labTable'>
                    
                        <tr>
                            <th colspan = 2>EXTRACTION</th>
                        </tr>
                        <tr>
                            <th >EXTRACTION </th><th>ID <input type = 'text' name = 'uid' value = ".$idNo." readonly></th>
                        </tr>
                        <th>TEST</th><th>RESULT</th>

      
                        <tr>
                            <td>EXTRACTION: </td>
                            <td>
                                <input type = 'radio' id='radio' name = 'ExtractionResult' value = 'Simple Extraction' required>Simple Extraction
                                <input type = 'radio' id='radio' name = 'ExtractionResult' value = 'Surgical Extraction'>Surgical Extraction
                            </td>
                        </tr>

                       
                        
                         <tr>
                            <td colspan=4><input type = 'submit' name = 'labSubmitBtn3'></td>
                        </tr>   
                    </table> 
                </form>
              ";
        
    } else {
        
            echo "
            
                <form method = 'POST' action = 'dentForm.php'>
                   <table class='labTable'>
                    
                        <tr>
                            <th colspan = 2>OTHERS</th>
                        </tr>
                        <tr>
                            <th >OTHERS </th><th>ID <input type = 'text' name = 'uid' value = ".$idNo." readonly></th>
                        </tr>
                        <th>TEST</th><th>RESULT</th>

      
                        <tr>
                            <td>(Specify)</td>
                            <td>
                                <textarea name = 'others' rows = '10' cols = '80' style = 'padding: 10px 10px 10px 10px; resize: none;'>
                                </textarea>
                            </td>
                        </tr>

                       
                        
                         <tr>
                            <td colspan=4><input type = 'submit' name = 'labSubmitBtn4'></td>
                        </tr>   
                    </table>  
                </form>
              ";
        
    } 
    
}


if(isset($_POST['labSubmitBtn1']) || isset($_POST['labSubmitBtn2']) || isset($_POST['labSubmitBtn3']) || isset($_POST['labSubmitBtn4']) ){
    
    include('connect.php');
    
	
	if(isset($_POST['labSubmitBtn1'])) {
            
            $userid  = $_POST['uid'];
            $TartarRslt = $_POST ['TartarResult'];
            $GinivalCleaningRslt = $_POST ['GinivalResult'];
            $PiezonRslt = $_POST ['PiezonResult'];
            
            $queryStr = "SELECT * FROM lab_procedure where uid = '$userid'";
            
            $checkIfExist = mysql_query($queryStr);
            
            if(mysql_num_rows($checkIfExist)>0){
                $queryStr = "UPDATE lab_procedure 
                             SET    OralProphylaxis = 1,
                                    TartarRemoval = '$TartarRslt',
                                    GinivalCleaning = '$GinivalCleaningRslt',
                                    Piezon = '$PiezonRslt'  
                             WHERE uid = '$userid'
                            ";
            } else {
                $queryStr = "INSERT INTO lab_procedure (uid,transDate,OralProphylaxis,TartarRemoval,GinivalCleaning,Piezon) VALUES('$userid',now(),1,'$TartarRslt','$GinivalCleaningRslt','$PiezonRslt')";
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
                            <td align = center  ><a href = 'dent.php'><input type = 'button' value = 'BACK'></a></td>
                        </tr>
        </table>";

        } elseif(isset($_POST['labSubmitBtn2'])) {
    
    
            
            $userid  = $_POST['uid'];
            $RectorationRslt = $_POST ['RectorationResult'];

            $queryStr = "SELECT * FROM lab_procedure where uid = '$userid'";
            
            $checkIfExist = mysql_query($queryStr);
            
            
            if(mysql_num_rows($checkIfExist)>0){
                
                $queryStr = "UPDATE lab_procedure 
                             SET    Rectoration = 1,
                                    RectorationRes = '$RectorationRslt'
                             WHERE uid = '$userid'
                            ";
            } else {
                
                $queryStr = "INSERT INTO lab_procedure (uid,transDate,Rectoration,RectorationRes) VALUES('$userid',now(),1,'$RectorationRslt')";
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
                            <td align = center  ><a href = 'dent.php'><input type = 'button' value = 'BACK'></a></td>
                        </tr>
        </table>";
            
        } elseif(isset($_POST['labSubmitBtn3'])) {
            
            $userid  = $_POST['uid'];
            $ExtractionRslt = $_POST ['ExtractionResult'];
   
            $queryStr = "SELECT * FROM lab_procedure where uid = '$userid'";
            
            $checkIfExist = mysql_query($queryStr);
            
            if(mysql_num_rows($checkIfExist)>0){
                
                if($ExtractionRslt == "Simple Extraction"){
                $queryStr = "UPDATE lab_procedure 
                             SET    Extraction = 1,
                                    SimpleExtraction = 'Yes'
                             WHERE uid = '$userid'
                            ";
                } else {
                  $queryStr = "UPDATE lab_procedure 
                             SET    Extraction = 1,
                                    SurgicalExtraction = 'Yes'
                             WHERE uid = '$userid'
                            "; 
                }
                
            } else {
                
                if($ExtractionRslt == "Simple Extraction"){
                    $queryStr = "INSERT INTO lab_procedure (uid,transDate,Extraction,SimpleExtraction) VALUES('$userid',now(),1,'Yes')";
                } else {
                    $queryStr = "INSERT INTO lab_procedure (uid,transDate,Extraction,SurgicalExtraction) VALUES('$userid',now(),1,'Yes')";
                }
                
                
                
                                                                                          
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
                            <td align = center  ><a href = 'dent.php'><input type = 'button' value = 'BACK'></a></td>
                        </tr>
        </table>";
            
        } elseif(isset($_POST['labSubmitBtn4'])) {
            
            $userid  = $_POST['uid'];
            $OthersRslt = $_POST ['others'];
   
            $queryStr = "SELECT * FROM lab_procedure where uid = '$userid'";
            
            $checkIfExist = mysql_query($queryStr);
            
            if(mysql_num_rows($checkIfExist)>0){
                
                
                  $queryStr = "UPDATE lab_procedure 
                             SET    Others = 1,
                                    Specify = '$OthersRslt'
                             WHERE uid = '$userid'
                            "; 
                } else {
             
                   $queryStr = "INSERT INTO lab_procedure (uid,transDate,Others,Specify) VALUES('$userid',now(),1,'$OthersRslt')";
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
                            <td align = center  ><a href = 'dent.php'><input type = 'button' value = 'BACK'></a></td>
                        </tr>
        </table>";
            
        }
    
    
}