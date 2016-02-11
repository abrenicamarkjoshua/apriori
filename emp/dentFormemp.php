<html>
<body>	
<?php
	include('iemp.php');
?>


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
            
                <form method = 'POST' action = 'dentFormemp.php'>
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
            
                <form method = 'POST' action = 'dentFormemp.php'>
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
            
                <form method = 'POST' action = 'dentFormemp.php'>
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
            
                <form method = 'POST' action = 'dentFormemp.php'>
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
            
            $queryStr = "SELECT * FROM lab_procedureemp where uid = '$userid'";
            
            $checkIfExist = mysql_query($queryStr);
            
            if(mysql_num_rows($checkIfExist)>0){
                $queryStr = "UPDATE lab_procedureemp 
                             SET    OralProphylaxis = 1,
                                    TartarRemoval = '$TartarRslt',
                                    GinivalCleaning = '$GinivalCleaningRslt',
                                    Piezon = '$PiezonRslt'  
                             WHERE uid = '$userid'
                            ";
            } else {
                $queryStr = "INSERT INTO lab_procedureemp (uid,transDate,OralProphylaxis,TartarRemoval,GinivalCleaning,Piezon) VALUES('$userid',now(),1,'$TartarRslt','$GinivalCleaningRslt','$PiezonRslt')";
            }
            
            
        mysql_query($queryStr);
        
        $queryStr = "SELECT 	* 
                    FROM 	lab_procedureemp
                    WHERE 	ID in 	( 
                                        SELECT	MAX(ID)
                                        FROM	lab_procedureemp
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
                            <td align = center  ><a href = 'dentemp.php'><input type = 'button' value = 'BACK'></a></td>
                        </tr>
        </table>";

        } elseif(isset($_POST['labSubmitBtn2'])) {
    
    
            
            $userid  = $_POST['uid'];
            $RectorationRslt = $_POST ['RectorationResult'];

            $queryStr = "SELECT * FROM lab_procedureemp where uid = '$userid'";
            
            $checkIfExist = mysql_query($queryStr);
            
            
            if(mysql_num_rows($checkIfExist)>0){
                
                $queryStr = "UPDATE lab_procedureemp 
                             SET    Rectoration = 1,
                                    RectorationRes = '$RectorationRslt'
                             WHERE uid = '$userid'
                            ";
            } else {
                
                $queryStr = "INSERT INTO lab_procedureemp (uid,transDate,Rectoration,RectorationRes) VALUES('$userid',now(),1,'$RectorationRslt')";
            }
            
        //echo $queryStr;
        mysql_query($queryStr);
        
        $queryStr = "SELECT 	* 
                    FROM 	lab_procedureemp
                    WHERE 	ID in 	( 
                                        SELECT	MAX(ID)
                                        FROM	lab_procedureemp
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
                            <td align = center  ><a href = 'dentemp.php'><input type = 'button' value = 'BACK'></a></td>
                        </tr>
        </table>";
            
        } elseif(isset($_POST['labSubmitBtn3'])) {
            
            $userid  = $_POST['uid'];
            $ExtractionRslt = $_POST ['ExtractionResult'];
   
            $queryStr = "SELECT * FROM lab_procedureemp where uid = '$userid'";
            
            $checkIfExist = mysql_query($queryStr);
            
            if(mysql_num_rows($checkIfExist)>0){
                
                if($ExtractionRslt == "Simple Extraction"){
                $queryStr = "UPDATE lab_procedureemp 
                             SET    Extraction = 1,
                                    SimpleExtraction = 'Yes'
                             WHERE uid = '$userid'
                            ";
                } else {
                  $queryStr = "UPDATE lab_procedureemp 
                             SET    Extraction = 1,
                                    SurgicalExtraction = 'Yes'
                             WHERE uid = '$userid'
                            "; 
                }
                
            } else {
                
                if($ExtractionRslt == "Simple Extraction"){
                    $queryStr = "INSERT INTO lab_procedureemp (uid,transDate,Extraction,SimpleExtraction) VALUES('$userid',now(),1,'Yes')";
                } else {
                    $queryStr = "INSERT INTO lab_procedureemp (uid,transDate,Extraction,SurgicalExtraction) VALUES('$userid',now(),1,'Yes')";
                }
                
                
                
                                                                                          
            }
            
        //echo $queryStr;
        mysql_query($queryStr);
        
        $queryStr = "SELECT 	* 
                    FROM 	lab_procedureemp
                    WHERE 	ID in 	( 
                                        SELECT	MAX(ID)
                                        FROM	lab_procedureemp
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
                            <td align = center  ><a href = 'dentemp.php'><input type = 'button' value = 'BACK'></a></td>
                        </tr>
        </table>";
            
        } elseif(isset($_POST['labSubmitBtn4'])) {
            
            $userid  = $_POST['uid'];
            $OthersRslt = $_POST ['others'];
   
            $queryStr = "SELECT * FROM lab_procedureemp where uid = '$userid'";
            
            $checkIfExist = mysql_query($queryStr);
            
            if(mysql_num_rows($checkIfExist)>0){
                
                
                  $queryStr = "UPDATE lab_procedureemp 
                             SET    Others = 1,
                                    Specify = '$OthersRslt'
                             WHERE uid = '$userid'
                            "; 
                } else {
             
                   $queryStr = "INSERT INTO lab_procedureemp (uid,transDate,Others,Specify) VALUES('$userid',now(),1,'$OthersRslt')";
                }
                                                                                    
            
        //echo $queryStr;
        mysql_query($queryStr);
        
        $queryStr = "SELECT 	* 
                    FROM 	lab_procedureemp
                    WHERE 	ID in 	( 
                                        SELECT	MAX(ID)
                                        FROM	lab_procedureemp
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
                            <td align = center  ><a href = 'dentemp.php'><input type = 'button' value = 'BACK'></a></td>
                        </tr>
        </table>";
            
        }
    
    
}