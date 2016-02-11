<?php
include('connect.php');
		session_start();
		
		$userid=$_POST['txtuserid'];
		$adminid=$_POST['txtuserid'];
		$date=$_POST['txtdate'];
		$empid=$_POST['txtuserid']; 
		$pass=$_POST['txtpassword'];
		

if($userid && $pass){



$s= mysql_query("select * from student where student_id ='$userid' && lastname = '$pass' && birthday ='$date'");
$sa = mysql_query("select * from student where lastname ='$pass'");
$s1= mysql_query("select * from employee where empid ='$empid' && emp_pass = '$pass'");
$s1a= mysql_query("select * from employee where emp_pass ='$pass'");
$s2= mysql_query("select * from admin where admin_id ='$adminid' && admin_pass = '$pass'");
$s2a= mysql_query("select * from admin where admin_pass ='$pass'");

$r = mysql_num_rows($s);
$ra = mysql_num_rows($sa);
$r1 = mysql_num_rows($s1);
$r1a = mysql_num_rows($s1a);
$r2 = mysql_num_rows($s2);
$r2a = mysql_num_rows($s2a);


if($r == 1){
while($row = mysql_fetch_assoc($s)){
$studno= $row['student_id'];
$fname= $row['firstname'];
$lname= $row['lastname'];
$mname= $row['middlename'];
$name = $fname . $mname . $lname ;
$_SESSION['student_id'] = $userid;

echo "<script > 
window.location.href ='home.php';
</script>";

}
}
/**else
{
	echo"<script>
		alert('Incorrect Username or Password please try again');
		window.location.href ='login/main.php';
		</script>";
}**/
if($r1 == 1){
while($row = mysql_fetch_assoc($s1)){
$studno= $row['empid'];
$_SESSION['empid'] = $userid;

echo "<script > 
window.location.href ='homeemp.php';
</script>";

}
}
/**else
{
	echo"<script>
		alert('Incorrect Username or Password please try again');
		window.location.href ='login/main.php';
		</script>";
}**/
if($r2 == 1){
while($row = mysql_fetch_assoc($s2)){
$studno= $row['admin_id'];
$_SESSION['admin_id'] = $userid;


echo "<script > 
window.location.href ='index.php';

</script>";

}
}
else
{
	echo"<script>
		alert('Incorrect Username or Password please try again');
		window.location.href ='login/main.php';
		</script>";
}
}
else if($userid=="" && $pass == "")
{
			echo"<script>
		alert('Username and Password Field is empty');
		window.location.href ='login/main.php';
		</script>";
}
else if($userid=="")
{
			echo"<script>
		alert('Username Field is empty');
		window.location.href ='login/main.php';
		</script>";
}
else if($pass == "")
{
			echo"<script>
		alert('Password Field is empty');
		window.location.href ='login/main.php';
		</script>";
}





?>