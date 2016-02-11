<?phpinclude('connect.php');
		session_start();
		
		$userid=$_POST['txtuserid'];
		$adminid=$_POST['txtuserid'];
		$date=$_POST['txtdate'];
		$contact=$_POST['txtcontact'];
		$empid=$_POST['txtuserid']; 
		$pass=$_POST['txtpassword'];
		



$s= mysql_query("select * from student where student_id ='$userid' && lastname = '$pass' && birthday ='$date'");
$sa = mysql_query("select * from student where lastname ='$pass'");
$s1= mysql_query("select * from employee where empid ='$empid' && contact = '$contact' && birthday ='$date'");
$s1a= mysql_query("select * from employee where emp_pass ='$pass'");
$s2= mysql_query("select * from admin where admin_id ='$userid' AND email = '$contact'");
$s2a= mysql_query("select * from admin where admin_pass ='$pass'");

$r = mysql_num_rows($s);
$ra = mysql_num_rows($sa);
$r1 = mysql_num_rows($s1);
$r1a = mysql_num_rows($s1a);
$r2 = mysql_num_rows($s2);
$r2a = mysql_num_rows($s2a);


if($r2 == 1){
while($row = mysql_fetch_assoc($s2)){
$studno= $row['admin_id'];
$_SESSION['admin_id'] = $userid;
$info= mysql_query("select * from admin where admin_id='$userid'");
while($r = mysql_fetch_assoc($info)){
	$adminp = $r['admin_pass'];
}
echo $adminp;
}}

?>


