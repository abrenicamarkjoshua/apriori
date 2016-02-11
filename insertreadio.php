<?php

		include('connect.php');
	
	
	if(isset($_POST['haha'])) {
	$vat = $_POST ['phy_vat'];
	$htta = $_POST ['phy_htta'];
	$vs = $_POST ['phy_vs'];
	$fmh = $_POST ['phy_fmh'];
	$fm = $_POST ['phy_fm'];
	
		mysql_query("UPDATE student SET phy_vat='$vat', phy_htta='$htta',phy_vs='$vs', phy_fmh='$fmh',phy_fm='$fm' WHERE student_id = '$aydi' ");
		
			
			echo "<script type='text/javascript'>

alert('Hi.'); 
window.location.href ='index.php';
</script>
";
}
	
?>