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
        
        case "Fecalysis":
            showForm(1,$idNo);
        break;
        
        case "Urinalysis":
            showForm(2,$idNo);
        break;
    
        case "Complete Blood Count":
            showForm(3,$idNo);
        break;
    
        case "Hb Shy Screening":
            showForm(4,$idNo);
        break;
    
    }
    
}






// DISPLAY FORM
function showForm($formType,$idNo){
    
    if ($formType == 1){
        
        
        echo "
            
                <form method = 'POST' action = 'labFormemp.php'>
                    <table class='labTable'>
                    
                        <tr>
                            <th >FECALYSIS </th><th>ID <input type = 'text' name = 'uid' value = ".$idNo." readonly></th>
                        </tr>
                        <th>TEST</th><th>RESULT</th>
                        
                        <tr>
                            <td>Parasite</td>
                            <td>
                                <input type='text' name= 'parasiteResult' >
                                 
                            </td>
                        </tr>
                        
                        <tr>
                            <td>PUS Cell</td>
                            <td><input type = 'text' name = 'PusCell'></td>
                        </tr>
                        
                        <tr>
                            <td>RBC</td>
                             <td><input type = 'text' name = 'RBC'></td>
                        </tr>
                        
                        <tr>
                            <td>Bacteria</td>
                            <td>
                                <input type='text'  name= 'BacteriaResult' >
                                   
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Macrophages</td>
                            <td>
                               <input type='text'  name= 'MacrophagesResult' >
                                   
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Fat Globules</td>
                            <td>
                                <input type='text'  name= 'FatGlobulesResult' >
                                 
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
            
                <form method = 'POST' action = 'labFormemp.php'>
                    <table class='labTable'>
                  
                        <tr>
                            <th colspan = 2>URINALYSIS</th>
                        </tr>
                        <tr>
                            <th >URINALYSIS </th><th>ID <input type = 'text' name = 'uid' value = ".$idNo." readonly></th>
                        </tr>
                        <th>TEST</th><th>RESULT</th>

                        <tr>
                            <td>Color</td>
                            <td>
                               <input type='text' name= 'ColorResult' >
                                  
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Apperance</td>
                            <td>
                                <input type='text'  name= 'AppearanceResult' >
                                  
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Glucose</td>
                            <td>
                                <input type='text' name= 'GlucoseResult' >
                                    
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Protein</td>
                            <td>
                                <input type='text'  name= 'ProteinResult' >
                                   
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Bacteria</td>
                            <td>
                                <input type='text'  name= 'BacteriaResult' style='width:100%'>
                                 
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Nitrate</td>
                            <td>
                                <input type='text'  name= 'NitriteResult' >
                                    
                            </td>
                        </tr> 
                        
                        <tr>
                            <td colspan=4><input type = 'submit' name = 'labSubmitBtn2'></td>
                        </tr>
                            
                    </table>  
                </form>
              ";
        
    } else if ($formType == 3){
        
            echo "
            
                <form method = 'POST' action = 'labFormemp.php'>
                    <table class='labTable'>
                    
                        <tr>
                            <th colspan = 2>COMPLETE BLOOD COUNT</th>
                        </tr>
                        <tr>
                            <th >FECALYSIS </th><th>ID <input type = 'text' name = 'uid' value = ".$idNo." readonly></th>
                        </tr>
                        <th>TEST</th><th>RESULT</th>

      
                        <tr>
                            <td>Red Blood Cell: </td>
                            <td><input type = 'number' step='any' name = 'RedBloodCellResult'></td>
                        </tr>

                        <tr>
                            <td>White Blood Cell</td>
                            <td><input type = 'number' step='any' name = 'WhiteBloodCellResult'></td>
                        </tr>

                        <tr>
                            <td>Hemoglobin</td>
                            <td><input type = 'number' step='any' name = 'HemoglobinResult'></td>
                        </tr>
                        
                        <tr>
                            <td>Hematocrit</td>
                            <td><input type = 'number' step='any' name = 'HematocritResult'></td>
                        </tr>
                                   
                        <tr>
                            <td>Platelets</td>
                            <td><input type = 'number' step='any' name = 'PlateletsResult'></td>
                        </tr>
                        
                         <tr>
                            <td colspan=4><input type = 'submit' name = 'labSubmitBtn3'></td>
                        </tr>   
                    </table> 
                </form>
              ";
        
    } else {
        
            echo "
            
                <form method = 'POST' action = '#'>
                    <table class='labTable'>
                        <tr>
                            <td>4</td><td>4</td><td>4</td><td>4</td>
                        </tr>

                        <tr>
                            <td>4</td><td>4</td><td>4</td><td>4</td>
                        </tr>

                        <tr>
                            <td>4</td><td>4</td><td>4</td><td>4</td>
                        </tr>

                        <tr>
                            <td>4</td><td>4</td><td>4</td><td>4</td>
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
            $parRslt = $_POST ['parasiteResult'];
            $pusRslt = $_POST ['PusCell'];
            $RBCRslt = $_POST ['RBC'];
            $BacRslt = $_POST ['BacteriaResult'];
            $MacRslt = $_POST ['MacrophagesResult'];
            $FatRslt = $_POST ['FatGlobulesResult'];
            
            $queryStr = "SELECT * FROM lab_procedureemp where uid = '$userid'";
            
            $checkIfExist = mysql_query($queryStr);
            
            if(mysql_num_rows($checkIfExist)>0){
                $queryStr = "INSERT INTO lab_procedureemp (uid,transDate,Fecalysis,Parasite,PusCell,RBC,FBacteria,Macrophages,FatGlobules) VALUES('$userid',now(),1,'$parRslt','$pusRslt','$RBCRslt','$BacRslt','$MacRslt','$FatRslt')";
            } else {
                $queryStr = "INSERT INTO lab_procedureemp (uid,transDate,Fecalysis,Parasite,PusCell,RBC,FBacteria,Macrophages,FatGlobules) VALUES('$userid',now(),1,'$parRslt','$pusRslt','$RBCRslt','$BacRslt','$MacRslt','$FatRslt')";
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
                            <td align = center  ><a href = 'labprocemp.php'><input type = 'button' value = 'BACK'></a></td>
                        </tr>
        </table>";

        } elseif(isset($_POST['labSubmitBtn2'])) {
    
    
            
            $userid  = $_POST['uid'];
            $ColorRslt = $_POST ['ColorResult'];
            $AppearanceRslt = $_POST ['AppearanceResult'];
            $GlucoseRslt = $_POST ['GlucoseResult'];
            $ProteinRslt = $_POST ['ProteinResult'];
            $BacteriaRslt = $_POST ['BacteriaResult'];
            $NitriteRslt = $_POST ['NitriteResult'];
            
            $queryStr = "SELECT * FROM lab_procedureemp where uid = '$userid'";
            
            $checkIfExist = mysql_query($queryStr);
            
            
            if(mysql_num_rows($checkIfExist)>0){
                
                $queryStr = "INSERT INTO lab_procedureemp (uid,transDate,Urinalysis,Color,Appearance,Glucose,Protein,UBacteria,Nitrite) VALUES('$userid',now(),1,'$ColorRslt','$AppearanceRslt','$GlucoseRslt','$ProteinRslt','$BacteriaRslt','$NitriteRslt')";
            } else {
                
                $queryStr = "INSERT INTO lab_procedureemp (uid,transDate,Urinalysis,Color,Appearance,Glucose,Protein,UBacteria,Nitrite) VALUES('$userid',now(),1,'$ColorRslt','$AppearanceRslt','$GlucoseRslt','$ProteinRslt','$BacteriaRslt','$NitriteRslt')";
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
                            <td align = center  ><a href = 'labprocemp.php'><input type = 'button' value = 'BACK'></a></td>
                        </tr>
        </table>";
            
        } elseif(isset($_POST['labSubmitBtn3'])) {
            
            $userid  = $_POST['uid'];
            $RedBloodCellRslt = $_POST ['RedBloodCellResult'];
            $WhiteBloodCellRslt = $_POST ['WhiteBloodCellResult'];
            $HemoglobinRslt = $_POST ['HemoglobinResult'];
            $HematocritRslt = $_POST ['HematocritResult'];
            $PlateletsRslt = $_POST ['PlateletsResult'];

    
   
            $queryStr = "SELECT * FROM lab_procedureemp where uid = '$userid'";
            
            $checkIfExist = mysql_query($queryStr);
            
            if(mysql_num_rows($checkIfExist)>0){
                
                $queryStr ="INSERT INTO lab_procedureemp (uid,transDate,CBC,RedBloodCell,WhiteBloodCell,Hemoglobin,Hematocrit,Platelets) VALUES('$userid',now(),1,'$RedBloodCellRslt','$WhiteBloodCellRslt','$HemoglobinRslt','$HematocritRslt','$PlateletsRslt')";
            } else {
                
                $queryStr = "INSERT INTO lab_procedureemp (uid,transDate,CBC,RedBloodCell,WhiteBloodCell,Hemoglobin,Hematocrit,Platelets) VALUES('$userid',now(),1,'$RedBloodCellRslt','$WhiteBloodCellRslt','$HemoglobinRslt','$HematocritRslt','$PlateletsRslt')";
                                                                                          
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
                            <td align = center  ><a href = 'labprocemp.php'><input type = 'button' value = 'BACK'></a></td>
                        </tr>
        </table>";
            
        } elseif(isset($_POST['labSubmitBtn3'])) {
            
        /*    
            $vat = $_POST ['lab_f'];
            $htta = $_POST ['lab_u'];
            $vs = $_POST ['lab_cbc'];
            $fmh = $_POST ['lab_hsc'];
	*/
	//mysql_query("UPDATE student SET lab_f='$vat', lab_u='$htta',lab_cbc='$vs', lab_hsc='$fmh' WHERE student_id = '$aydi' ");
            
        }
    
    
}