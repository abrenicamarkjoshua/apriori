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

<form >

    <input type='text'  name='search' id='box' placeholder="Search ID">
    <input type='submit' name='submit' value='Search' id='create2' >
    <a href="StudentsNoPhysicalExams.php"><input type='button' value = 'Clear' id ='create2'></a>
    <input type='button' value='PRINT RESULT' id='create2' onClick='window.print()'>
</br></br></br>

</form>

<?php

mysql_connect("localhost", "root", "") or die ("");
mysql_select_db("clinic");
session_start();


if(isset($_GET['search'])){

$searchValue = $_GET['search']; 

echo $searchValue;

if (is_numeric($searchValue))
    {
    $queryStr = "Select * from Student where Student_ID not in (Select Distinct UID from lab_procedure)";
    }
else
{

   $queryStr = "Select * from Student where Student_ID not in (Select Distinct UID from lab_procedure)";
}
  


 $queryStr = "Select s.Student_ID, s.lastName, s.MiddleName, s.FirstName,
                lp.OralProphylaxis, 
                lp.Rectoration, 
                lp.Extraction, 
                s.Course
            from Student s
            Inner Join 
                    (Select Distinct lp.UID, lp.OralProphylaxis, lp.Rectoration, lp.Extraction
            from lab_procedure as lp
            where 

                 lp.OralProphylaxis =0 and 
                 lp.Rectoration=0 and 
                 lp.Extraction=0) as lp on s.Student_ID=lp.uid";

            				
$result = mysql_query($queryStr);
//echo $queryStr;
if(mysql_num_rows($result)>0) {
  echo "
							
							
              <table align='center' cellspacing='4' cellpadding='5'>
				
				<th>Student No.</th>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Middle Name</th>
					";

    while($recordSet = mysql_fetch_assoc($result))
   
	
               echo"	<tr>
                  <td>$result[student_id]</td>
                  <td>$result[lastname]</td>
                  <td>$result[firstname]</td>
                  <td>$result[middlename]</td>
                  <td><a href='delete.php?id=$result[student_id]'></a></td>

                
				                  
				
             
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



