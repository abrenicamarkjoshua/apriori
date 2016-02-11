<?php

		include('connect.php');
	$student_id = $_POST ['student_id'];
	$lastname = $_POST ['lastname'];
	$firstname = $_POST ['firstname'];
	$middlename = $_POST ['middlename'];
	$address = $_POST ['address'];
	$birthday = $_POST ['birthday'];
	$course = $_POST ['course'];
	$gender = $_POST ['gender'];
	$civilstat = $_POST ['civilstat'];
	$studentno = $_POST ['studentno'];
	$guardianno = $_POST ['guardianno'];
	
	if($student_id   &&  $lastname	  &&  $firstname  &&	 $address	  &&  $middlename	  &&  $birthday	  &&  $course	  &&  $gender	  &&  $civilstat  &&  	$studentno	  &&  $guardianno)  {
		
		mysql_query("INSERT INTO student(student_id,lastname,firstname,middlename,birthday,gender,address,studentno,guardianno,course,civilstat) VALUES 
		('$student_id','$lastname','$firstname','$middlename','$birthday','$gender','$address','$studentno','$guardianno','$course','$civilstat')");
		
			
			echo "<script type='text/javascript'>

alert('Account created.'); 
window.location.href ='index.php';
</script>
";
}
else
{
echo "<script type='text/javascript'>

alert('Failed to register.'); 
window.location.href ='index.php';
</script>
";
}
	
?>