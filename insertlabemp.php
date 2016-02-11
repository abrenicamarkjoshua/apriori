<?php

		include('connect.php');
	
	
	if(isset($_POST['haha'])) {
	$vat = $_POST ['lab_f'];
	$htta = $_POST ['lab_u'];
	$vs = $_POST ['lab_cbc'];
	$fmh = $_POST ['lab_hsc'];
	
		mysql_query("UPDATE employee SET lab_f='$vat', lab_u='$htta',lab_cbc='$vs', lab_hsc='$fmh' WHERE student_id = '$aydi' ");
		
			
			echo "<script type='text/javascript'>

alert('Hi.'); 
window.location.href ='index.php';
</script>
";
}
	
?>