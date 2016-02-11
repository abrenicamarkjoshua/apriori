<?php

		include('connect.php');
	
	
	if($_POST['haha']) {
	$ref_p = $_POST ['ref_p'];
	$ref_im = $_POST ['ref_im'];
	$ref_fm = $_POST ['ref_fm'];
	$ref_o = $_POST ['ref_o'];
	$ref_ent = $_POST ['ref_ent'];
	$ref_or = $_POST ['ref_or'];
	$ref_s = $_POST ['ref_s'];
	$ref_g = $_POST ['ref_g'];
	$ref_com = $_POST ['ref_com'];
	
		mysql_query("UPDATE student SET ref_p='$ref_p', ref_im='$ref_im', ref_fm='$ref_fm', ref_o='$ref_o', ref_ent='$ref_ent', ref_or='$ref_or', ref_s='$ref_s', ref_g='$ref_g' ,ref_com='$ref_com' WHERE student_id = '$aydi' ");
		
			
			echo "<script type='text/javascript'>

alert('Record Updated.'); 
window.location.href ='index.php';
</script>
";
}
	
?>