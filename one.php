<?php
include('connect.php');
		session_start();
		
		$userid=$_POST['student_id'];
		$adminid=$_POST['txtuserid'];
		$empid=$_POST['txtpassword'];
		$pass=$_POST['txtpassword'];
		
		

if($userid && $pass){



$s= mysql_query("select * from student where student_id ='$userid'");
$s1= mysql_query("select * from employee where empid ='$empid'");
$s2= mysql_query("select * from admin where admin_id ='$adminid'");

$r = mysql_num_rows($s);
$r1 = mysql_num_rows($s1);
$r2 = mysql_num_rows($s2);
if($r == 1){
while($row = mysql_fetch_assoc($s)){
$studno= $row['student_id'];
$fname= $row['firstname'];
$lname= $row['lastname'];
$mname= $row['middlename'];
$name = $fname . $mname . $lname ;
$_SESSION['student_id'] = $userid;
echo "<script > 
window.location.href ='joshua.php';

</script>";

}
}
if($r1 == 1){
while($row = mysql_fetch_assoc($s1)){
$studno= $row['emp_id'];


echo "<script > 
window.location.href ='emp.php';

</script>";

}
}
if($r2 == 1){
while($row = mysql_fetch_assoc($s2)){
$studno= $row['admin_id'];


echo "<script > 
window.location.href ='index.php';

</script>";

}
} 
}// may walang input




?>