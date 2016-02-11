<html>
<title>Index</title>
<body>

	<?php
	include('iemp.php');
?>

<div id="content">

<form action='viewdentemp.php' method='GET' id="searchint">


<input type='text'  name='search' id='box' placeholder="Search ID / Name">
<input type='submit' name='submit' value='Search' id='create2' >
<a href="viewdentemp.php"><input type='button' value = 'Clear' id ='create2'></a>
</br></br></br>

</form>

    
<?php
include('connect.php');
session_start();


if(isset($_GET['search'])){

$searchValue = $_GET['search'];    
    
$queryStr = "SELECT	e.empid 'ID',
                        concat(e.firstName,' ',e.lastname) 'Full_Name',
                        lpe.transDate,
                        
                        COALESCE(NULLIF(lpe.TartarRemoval, ''), 'No Record')'TartarRemoval',
                        COALESCE(NULLIF(lpe.GinivalCleaning, ''), 'No Record')'GinivalCleaning',
                        COALESCE(NULLIF(lpe.Piezon, ''), 'No Record') 'Piezon',

                        COALESCE(NULLIF(lpe.RectorationRes, ''), 'No Record')'RectorationRes',
                        
        
                        COALESCE(NULLIF(lpe.SimpleExtraction, ''), 'No Record')'SimpleExtraction',
                        COALESCE(NULLIF(lpe.SurgicalExtraction, ''), 'No Record') 'SurgicalExtraction',
                        
                        COALESCE(NULLIF(lpe.Specify, ''), 'No Record')'Specify'

                        
                        
            FROM	employee
                        INNER JOIN lab_procedureemp lpe
                        ON e.empid = lpe.uid
               
            WHERE       lpe.uid = '$searchValue'
                        OR e.firstName like '%$searchValue%'
                        OR e.lastName  like '%$searchValue%'

            ";					
$result = mysql_query($queryStr);
//echo $queryStr;
if(mysql_num_rows($result)>0) {

echo "
							
							
              <table align='center' cellspacing='10' cellpadding='10' style = 'background-color: white; border-radius:10px'>
				
				<th>ID No.</th>
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
                  <td>$recordSet[ID]</td>
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
							
$queryStr = "SELECT	e.empid 'ID',
                        concat(e.firstName,' ',e.lastname) 'Full_Name',
                        lpe.transDate,
                        
                        COALESCE(NULLIF(lpe.TartarRemoval, ''), 'No Record')'TartarRemoval',
                        COALESCE(NULLIF(lpe.GinivalCleaning, ''), 'No Record')'GinivalCleaning',
                        COALESCE(NULLIF(lpe.Piezon, ''), 'No Record') 'Piezon',

                        COALESCE(NULLIF(lpe.RectorationRes, ''), 'No Record')'RectorationRes',
                        
        
                        COALESCE(NULLIF(lpe.SimpleExtraction, ''), 'No Record')'SimpleExtraction',
                        COALESCE(NULLIF(lpe.SurgicalExtraction, ''), 'No Record') 'SurgicalExtraction',
                        
                        COALESCE(NULLIF(lpe.Specify, ''), 'No Record')'Specify'

                        
                        
            FROM	employee e
                        INNER JOIN lab_procedureemp lpe
                        ON e.empid = lpe.uid";					
$result = mysql_query($queryStr);
//echo $queryStr;
if(mysql_num_rows($result)>0) {

echo "
							
							
              <table align='center' cellspacing='10' cellpadding='10' style = 'background-color: white; border-radius:10px'>
				
				<th>ID No.</th>
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
                  <td>$recordSet[ID]</td>
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
                  <td><a href='delete.php?id=$recordSet[ID]'></a></td>
                  
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