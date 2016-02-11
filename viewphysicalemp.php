<html>
<title>Index</title>
<body>

	<?php
	include('iemp.php');
	
	?>

<div id="content">

<form action='viewphysical.php' method='GET' id="searchint">


<input type='text'  name='search' id='box' placeholder="Search ID / Name">
<input type='submit' name='submit' value='Search' id='create2' >
<a href="viewphysical.php"><input type='button' value = 'Clear' id ='create2'></a>
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
                        
                        COALESCE(NULLIF(lpe.Snellen, ''), 'No Record')'Snellen',
                        COALESCE(NULLIF(lpe.RandomE, ''), 'No Record')'RandomE',
                
                        COALESCE(NULLIF(lpe.HTTARes, ''), 'No Record')'HTTARes',
                        
                        COALESCE(NULLIF(lpe.Height, ''), 'No Record')'Height',
                        COALESCE(NULLIF(lpe.Weight, ''), 'No Record') 'Weight',
                        COALESCE(NULLIF(lpe.Temperatue, ''), 'No Record') 'Temperatue',
                        COALESCE(NULLIF(lpe.BloodPresure, ''), 'No Record') 'BloodPresure',
                        COALESCE(NULLIF(lpe.Pulse, ''), 'No Record') 'Pulse',
                        
                        COALESCE(NULLIF(lpe.SpecifyFMR, ''), 'No Record')'SpecifyFMR',
                        
                        COALESCE(NULLIF(lpe.SpecifyMR, ''), 'No Record')'SpecifyMR'

                        
                        
            FROM	employee e
                        INNER JOIN lab_procedureemp lpe
                        ON e.empid = lpe.uid
               
            WHERE       lpe.uid = '$searchValue'
                        OR e.firstName like '%$searchValue%'
                        OR e.lastname  like '%$searchValue%'

            ";					
$result = mysql_query($queryStr);
//echo $queryStr;
if(mysql_num_rows($result)>0) {

echo "
							
							
              <table align='center' cellspacing='10' cellpeadding='10' style = 'background-color: white; border-radius:10px'>
				
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

                  </td>
                  <tr>
                    <td colspan = 4>
                        <hr style = 'height:5px; background-color: black;'>
                    </td>
                  </tr>
                  <td><a></a></td>
                  
			  ";}
			 echo"</table>";  
    
  
    
} else {
							
    $queryStr = "SELECT	e.empid 'ID',
                            concat(e.firstName,' ',e.lastname) 'Full_Name',
                            lpe.transDate,

                            COALESCE(NULLIF(lpe.Snellen, ''), 'No Record')'Snellen',
                            COALESCE(NULLIF(lpe.RandomE, ''), 'No Record')'RandomE',

                            COALESCE(NULLIF(lpe.HTTARes, ''), 'No Record')'HTTARes',

                            COALESCE(NULLIF(lpe.Height, ''), 'No Record')'Height',
                            COALESCE(NULLIF(lpe.Weight, ''), 'No Record') 'Weight',
                            COALESCE(NULLIF(lpe.Temperatue, ''), 'No Record') 'Temperatue',
                            COALESCE(NULLIF(lpe.BloodPresure, ''), 'No Record') 'BloodPresure',
                            COALESCE(NULLIF(lpe.Pulse, ''), 'No Record') 'Pulse',

                            COALESCE(NULLIF(lpe.SpecifyFMR, ''), 'No Record')'SpecifyFMR',

                            COALESCE(NULLIF(lpe.SpecifyMR, ''), 'No Record')'SpecifyMR'



                FROM	employee e
                            INNER JOIN lab_procedureemp lpe
                            ON e.empid = lpe.uid";
    
    $result = mysql_query($queryStr);
    //echo $queryStr;
    if(mysql_num_rows($result)>0) {

    echo "


                  <table align='center' cellspacing='10' cellpeadding='10' style = 'background-color: white; border-radius:10px'>

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

                      </td>
                      <tr>
                        <td colspan = 4>
                            <hr style = 'height:5px; background-color: black;'>
                        </td>
                      </tr>
                      <td><a></a></td>

                              ";
    }
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