<?php

		include('connect.php');
	
	
	if(isset($_POST['haha'])) {
	$vat = $_POST ['medicalrecord_op'];
	$htta = $_POST ['medicalrecord_rec'];
	$vs = $_POST ['medicalrecord_ex'];
	$fmh = $_POST ['medicalrecord'];
	
		mysql_query("UPDATE employee SET medicalrecord_op='$vat', medicalrecord_rec='$htta',medicalrecord_ex='$vs', medicalrecord='$fmh' WHERE student_id = '$aydi'");
		
			
			echo "<script type='text/javascript'>

alert('Hi.'); 
window.location.href ='index.php';
</script>
";
}
	
?>