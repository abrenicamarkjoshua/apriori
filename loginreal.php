<?php
mysql_connect("localhost", "root", "") or die ("");
		mysql_select_db("clinic");
		session_start();
		
		$userid=$_POST['txtuserid'];
		$adminid=$_POST['txtuserid'];
		$empid=$_POST['txtpassword'];
		$pass=$_POST['txtpassword'];
		
		
$query2= mysql_query("select * from admin where admin_id ='$adminid'");
$query3= mysql_query("select * from employee where empid ='$empid'");
$row1 = mysql_num_rows($query2);
$row2 = mysql_num_rows($query3);
if($userid && $pass){
$query= mysql_query("select * from student where student_id ='$userid'");

$numrows = mysql_num_rows($query);
while($row = mysql_fetch_assoc($query)){
$studno= $row['student_id'];
$fname= $row['firstname'];
$lname= $row['lastname'];
$mname= $row['middlename'];
$name = $fname . $mname . $lname ;
if($userid==$studno){
if($pass==$lname){

$_SESSION['user'] = $name;
$_SESSION['userid']= $userid;
if($row1 != 1){
if($row2 != 1){
//student
echo "<script type='text/javascript'> alert('Welcome $name');
window.location.href = 'home.php';
</script>";
}else {
if($row2 != 1){
//admin

echo "<script type='text/javascript'> alert('Welcome $name');
window.location.href = 'index.php';
</script>";
} else{
//employee

echo "<script type='text/javascript'> alert('Welcome $name');
window.location.href = 'emp.php';
</script>";
}

}
}
}else {
echo '<script type="text/javascript">'; 
echo 'alert("its either your user id or password is incorrect");'; 
echo 'window.location.href = "login.php";';
echo '</script>';
}
}else{
echo '<script type="text/javascript">'; 
echo 'alert("its either your user id or password is incorrect");';
echo 'window.location.href = "main.php";';
echo '</script>';
}

}

if(empty($_POST['txtuserid']) & empty($_POST['txtpassword'])){
echo '<script type="text/javascript">'; 
echo 'alert("User ID field and Password field is empty");'; 
echo 'window.location.href = "main.php";';
echo '</script>';
}

else 	if(empty($_POST['txtuserid'])) {
echo '<script type="text/javascript">'; 
echo 'alert("User ID field is empty");'; 
echo 'window.location.href = "main.php";';
echo '</script>';}

else if(empty($_POST['txtpassword'])) {

echo '<script type="text/javascript">'; 
echo 'alert("Password field is empty");'; 
echo 'window.location.href = "main.php";';
echo '</script>';

}
}

?>