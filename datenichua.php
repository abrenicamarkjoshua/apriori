<?php
include("conn.php");
$haha = $_GET['id'];
if($_POST){
$checkbox1=$_POST['subjs'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
	
   }
date_default_timezone_set("Etc/GMT+8");
$date  = date('m-d-Y H:i:s');
mysql_query("update account set acc_lastname='$_POST[lname1]',acc_firstname='$_POST[fname1]',acc_middlename='$_POST[mname1]',acc_email='$_POST[e1]',acc_username='$_POST[un1]',acc_password='$_POST[pw1]',acc_type='$_POST[utype1]',acc_validated='$_POST[av1]',acc_handle='$chk',acc_status='$_POST[as1]',acc_modified='$date' where acc_id = '$_POST[tag]'; ");
echo "<script type='text/javascript'>";
echo "window.location.href = 'acc_view.php?id=$haha';";
echo "</script>";
} 
?>