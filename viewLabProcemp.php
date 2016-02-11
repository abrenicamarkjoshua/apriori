<html>
<title>Index</title>
<body>

<?php
include('iemp.php');

?>

<div id="content">

<form action='viewLabProcemp.php' method='GET' id="searchint">


<input type='text'  name='search' id='box' placeholder="Search ID / Name">
<input type='submit' name='submit' value='Search' id='create2' >
<a href="viewLabProcemp.php"><input type='button' value = 'Clear' id ='create2'></a>
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
                        
                        COALESCE(NULLIF(lpe.Parasite, ''), 'No Record')'Parasite',
                        COALESCE(NULLIF(lpe.Puscell, ''), 'No Record')'Puscell',
                        COALESCE(NULLIF(lpe.rbc, ''), 'No Record') 'Rbc',
                        COALESCE(NULLIF(lpe.Fbacteria, ''), 'No Record')'FBacteria',
                        COALESCE(NULLIF(lpe.Macrophages, ''), 'No Record')'Macrophages',
                        COALESCE(NULLIF(lpe.FatGlobules, ''), 'No Record')'FatGlobules',

                        COALESCE(NULLIF(lpe.Color, ''), 'No Record')'Color',
                        COALESCE(NULLIF(lpe.Appearance, ''), 'No Record')'Appearance',
                        COALESCE(NULLIF(lpe.Glucose, ''), 'No Record') 'Glucose',
                        COALESCE(NULLIF(lpe.Protein, ''), 'No Record')'Protein',
                        COALESCE(NULLIF(lpe.UBacteria, ''), 'No Record')'UBacteria',
                        COALESCE(NULLIF(lpe.Nitrite, ''), 'No Record')'Nitrite',
        
                        COALESCE(NULLIF(lpe.RedBloodCell, ''), 'No Record')'RedBloodCell',
                        COALESCE(NULLIF(lpe.WhiteBloodCell, ''), 'No Record') 'WhiteBloodCell',
                        COALESCE(NULLIF(lpe.Hemoglobin, ''), 'No Record')'Hemoglobin',
                        COALESCE(NULLIF(lpe.Hematocrit, ''), 'No Record')'Hematocrit',
                        COALESCE(NULLIF(lpe.Platelets, ''), 'No Record')'Platelets'

                        
                        
            FROM	employee e
                        INNER JOIN lab_procedureemp lpe
                        ON e.empid = lpe.uid
                        
            WHERE       lpe.uid = '$searchValue'
                        OR e.firstName like '%$searchValue%'
                        OR e.lastname  like '%$searchValue%'";
    
$result = mysql_query($queryStr);
//echo $queryStr;
if(mysql_num_rows($result)>0) {

echo "
							
							
              <table align='center' cellspacing='10' cellpeadding='10' style = 'background-color: white; border-radius:10px'>
				
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
                  <td>$recordSet[ID]</td>
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
                  <td><a href='delete.php?id=$recordSet[ID]'></a></td>
                  
			  ";}
			 echo"</table>";
}   else    {
    $queryStr = "SELECT	e.empid 'ID',
                        concat(e.firstName,' ',e.lastname) 'Full_Name',
                        lpe.transDate,
                        
                        COALESCE(NULLIF(lpe.Parasite, ''), 'No Record')'Parasite',
                        COALESCE(NULLIF(lpe.Puscell, ''), 'No Record')'Puscell',
                        COALESCE(NULLIF(lpe.rbc, ''), 'No Record') 'Rbc',
                        COALESCE(NULLIF(lpe.Fbacteria, ''), 'No Record')'FBacteria',
                        COALESCE(NULLIF(lpe.Macrophages, ''), 'No Record')'Macrophages',
                        COALESCE(NULLIF(lpe.FatGlobules, ''), 'No Record')'FatGlobules',

                        COALESCE(NULLIF(lpe.Color, ''), 'No Record')'Color',
                        COALESCE(NULLIF(lpe.Appearance, ''), 'No Record')'Appearance',
                        COALESCE(NULLIF(lpe.Glucose, ''), 'No Record') 'Glucose',
                        COALESCE(NULLIF(lpe.Protein, ''), 'No Record')'Protein',
                        COALESCE(NULLIF(lpe.UBacteria, ''), 'No Record')'UBacteria',
                        COALESCE(NULLIF(lpe.Nitrite, ''), 'No Record')'Nitrite',
        
                        COALESCE(NULLIF(lpe.RedBloodCell, ''), 'No Record')'RedBloodCell',
                        COALESCE(NULLIF(lpe.WhiteBloodCell, ''), 'No Record') 'WhiteBloodCell',
                        COALESCE(NULLIF(lpe.Hemoglobin, ''), 'No Record')'Hemoglobin',
                        COALESCE(NULLIF(lpe.Hematocrit, ''), 'No Record')'Hematocrit',
                        COALESCE(NULLIF(lpe.Platelets, ''), 'No Record')'Platelets'

                        
                        
            FROM	employee e
                        INNER JOIN lab_procedureemp lpe
                        ON e.empid = lpe.uid";					
$result = mysql_query($queryStr);
//echo $queryStr;
if(mysql_num_rows($result)>0) {

echo "
							
							
              <table align='center' cellspacing='10' cellpeadding='10' style = 'background-color: white; border-radius:10px'>
				
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
                  <td>$recordSet[ID]</td>
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