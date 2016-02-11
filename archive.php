<?php
require_once 'header.php';

if(isset($_POST['archive'])){
	$db->delete("studentarchive");
	$db->delete("employeearchive");
	$db->rawQuery("INSERT INTO studentarchive (SELECT * FROM student WHERE student.id NOT IN (SELECT id FROM studentarchive))");
	$db->rawQuery("INSERT INTO employeearchive (SELECT * FROM employee WHERE employee.id NOT IN (SELECT id FROM employeearchive))");
	$_SESSION['message'] = "Records successfully archived";
}

if(isset($_SESSION['message'])){

	?>
	<div style = "color:green"><?php echo $_SESSION['message']; ?></div>
	<?php
	unset($_SESSION['message']);
}	
?>

<form action = "" method = "post">
	<input type = "submit" name = "archive" value = "archive"/>
</form>

<?php
require_once 'footer.php';
?>