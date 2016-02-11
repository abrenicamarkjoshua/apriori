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
	<li><span><center><p style="color:white">Welcome<br><?php
	include('connect.php');
	session_start();
$logid=$_SESSION['student_id'];
if($logid)	{

	$userid=$logid;
	$result=mysql_query("select * from student where student_id = '$userid'");
	while($user = mysql_fetch_assoc($result))
	
	echo"$user[firstname]";
	}
	?></p></center></span></li>
   
   <li><a href='logout.php?id=$user[student_id]'>Logout</a></li>
   
</ul>
</div>
<div id="loob">
        
        
	
	
	<nav id="ddmenu">
	
	
	
	<div class="menu-icon"></div>

	
        <div  id="border" style="border-style: hidden; height: 8% margin=10%">
        <div id="header" style>
	<center><p>
	<ul>
		
			
		<li class="no-sub"><a class="top-heading" href="home.php">Students Information</a></li>
		 <li class="no-sub"><a class="top-heading" href="checkupstudhome.php">Check-up Summary</a></li>
		  <li class="no-sub"><a class="top-heading" href="viewrefferalhome.php">Refferal</a></li>
		 </ul> 
			
			
			
			
	</p></center>
	</div>
        </div>


</nav>

<div id="content">
<?php
include('connect.php');


$logid=$_SESSION['student_id'];
if($logid)	{
$userid=$logid;

							
    $queryStr = "SELECT	*from lab_procedure where uid='$userid'";
    
    $result = mysql_query($queryStr);
    //echo $queryStr;
    if(mysql_num_rows($result)>0) {

    echo "


                  <table align='center' cellspacing='10' cellpadding='10' style = 'background-color: white; border-radius:10px'>

                                    <th>Student No.</th>
                                    				
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
                  <td valign = 'top'><b>$userid</b></td>
                 
                  <td valign = 'top'><b>$recordSet[transDate]</b></td>
                  <td>  
                        <hr>
                        <B><center><font size = '5' color = 'Maroon'>PHYSICAL EXAM</font></center></b>
                        <hr>
                        <B>VISUAL AQUITY:</B><br>
                        <hr>
                        &nbsp&nbsp Tartar Removal:&nbsp <i>$recordSet[Snellen]</i><br>
                        &nbsp&nbsp Ginival Cleaning:&nbsp <i>$recordSet[RandomE]</i><br> 
                 
                        
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
                        <B><center><font size = '5' color = 'Maroon'>LABORATORY EXAM</font></center></b>
                        <hr>

                        <B>FECALYSIS:</B><br>
                        <hr>
                        &nbsp&nbsp Parasite:&nbsp <i>$recordSet[Parasite]</i><br>
                        &nbsp&nbsp PussCell:&nbsp <i>$recordSet[PusCell]</i><br> 
                        &nbsp&nbsp RBC:&nbsp <i>$recordSet[RBC]</i><br> 
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
                        &nbsp&nbsp RBC count:&nbsp <i>$recordSet[RedBloodCell]</i><br>
                        &nbsp&nbsp WBC count:&nbsp <i>$recordSet[WhiteBloodCell]</i><br>
                        &nbsp&nbsp Glucose:&nbsp <i>$recordSet[Hemoglobin]</i><br>
                        &nbsp&nbsp Protein:&nbsp <i>$recordSet[Hematocrit]</i><br>
                        &nbsp&nbsp Bacteria:&nbsp <i>$recordSet[Platelets]</i><br>
                        
                  

                        <hr>
                        <B><center><font size = '5' color = 'Maroon'>DENTAL EXAM</font></center></b>
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
                  <td><a href='delete.php?id=$userid'></a></td>
                  
			  ";}
	echo"</table>";
						
			 
			 }
			  ?>
			  
		</div>
		<script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>
</head> 
<body> 
<h1></h1>
<div id="div1">Test Print</div>
<button onclick="printContent('content')">Print</button>

		</div><br><br>
			  

		
		
		</div>
		
		
		<div  id="borderfooter" style="border">
	
		<div  id="footer" >
			
		</div>
		</div>

  
</body>
</html>