<?php

		include('connect.php');
	$admin_id = $_POST ['admin_id'];
	$admin_pass = $_POST ['password'];
	$repass = $_POST['repasswords'];
	$email = $_POST['email'];
	
	if($admin_id   &&  $admin_pass && $email)  {
	
		if($admin_pass == $repass){
		mysql_query("INSERT INTO admin(admin_id,admin_pass,email) VALUES 
		('$admin_id','$admin_pass','$email')");
		
		echo "<script type='text/javascript'>

alert('Account created.');
window.location.href ='index.php';
</script>
";
		
		} else if ($admin_pass != $repass){
		echo "<script type='text/javascript'>

alert('Passwords Mismatch.'); 
window.location.href ='regad.php';
</script>
";
		}
		
			
			else{
			echo "<script type='text/javascript'>

alert('Complete all fields.'); 
window.location.href ='regad.php';
</script>
";
			}
			}
	
?>