<?php

		include('connect.php');
	
	$empid = $_POST ['empid'];
	$emp_pass = $_POST['emp_pass'];
	$lastname = $_POST ['lastname'];
	$firstname = $_POST ['firstname'];
	$middlename = $_POST ['middlename'];
	$birthday = $_POST ['birthday'];
	$gender = $_POST ['gender'];
	$department = $_POST ['department'];
	$address = $_POST ['address'];
	$contact = $_POST ['contact'];
	$civilstat = $_POST ['civilstat'];
	
	
	
	if($empid   &&  $emp_pass   &&  $lastname	  &&  $firstname   &&  $middlename	  &&  $birthday	  &&  $gender	  &&  $department	  &&  $address 
		&&  	$contact	  &&  $civilstat)  {
		
		mysql_query("INSERT INTO employee(empid,emp_pass,lastname,firstname,middlename,birthday,gender,department,address,contact,civilstat) VALUES 
		('$empid','$emp_pass','$lastname','$firstname','$middlename','$birthday','$gender','$department','$address','$contact','$civilstat')");
		
		echo "<script type='text/javascript'>

alert('Account created.'); 
window.location.href ='indexemp.php';
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