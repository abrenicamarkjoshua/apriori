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

<?php
include('connect.php');
session_start();


if(isset($_GET['id'])){

$sID = $_GET['id'];    
$queryStr = "SELECT * FROM mst_suggestion WHERE id = '$sID' ";

$result = mysql_query($queryStr);
$suggestionRecordSet = mysql_fetch_array($result);
    
    echo    "<br>
             <br>
            <form method = 'POST' action = 'SuggestionUpdated.php'>
            <table align='center' cellspacing='10' cellpadding='10' style = 'background-color: white; border-radius:10px'>
                <th>ID NO</th>
                <th>SUGGESTION VALUE</th>
                <th>SUGGESTION NEW VALUE</th>
                    <tr>
                        <td>
                            <input type = 'text' name = 'sID' value = $suggestionRecordSet[id] style = 'background-color:#ffff;text-align:center;' readOnly>
                        </td>
                        <td>$suggestionRecordSet[suggestion]</td>
                        <td>
                            <input type = 'text' name = 'newValue' style = 'background-color:silver; height:30px;width:450px;' required>
                        </td>
                        <td><input type = 'submit' id = 'create' name = 'UpdateBTN' value = 'UPDATE'></td>
                    </tr>
              </table>
              </form>
             <br>
             <br>
            ";


}

if(isset($_POST['UpdateBTN'])){
       
    $query = " UPDATE mst_suggestion SET suggestion = '$_POST[newValue]' WHERE id = '$_POST[sID]' ";
    $result = mysql_query($query);
   
   
    
    header("Location: SuggestionUpdated.php?id=$_POST[sID]");
}



?>
</div>
    
    <br><br>
		
		
		<div  id="borderfooter" style="border">
		
		<div  id="footer" >
			
		</div>
		</div>
</div>
  
</body>
</html>