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
                        
                        COALESCE(NULLIF(lp.SpecifyMR, ''), 'No Record')'SpecifyMR'

                        
                        
            FROM	student s
                        INNER JOIN lab_procedure lp
                        ON s.student_id = lp.uid
               
            WHERE       lp.uid = '$searchValue'
                        OR s.firstName like '%$searchValue%'
                        OR s.lastName  like '%$searchValue%'

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
                  <td>$recordSet[Student_ID]</td>
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
                  <td><a href='delete.php?id=$recordSet[Student_ID]'></a></td>
                  
			  ";}
			 echo"</table>";  
    
  
    
} else {
							
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

                            COALESCE(NULLIF(lp.SpecifyMR, ''), 'No Record')'SpecifyMR'



                FROM	student s
                            INNER JOIN lab_procedure lp
                            ON s.student_id = lp.uid";
    
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
                      <td>$recordSet[Student_ID]</td>
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
                      <td><a href='delete.php?id=$recordSet[Student_ID]'></a></td>

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