<?php

mysql_query("INSERT INTO student(student_id,lastname,firstname,middlename,birthday,gender,address,studentno,guardianno,course,civilstat) VALUES 
		('$student_id','$lastname','$firstname','$middlename','$birthday','$gender','$address','$studentno','$guardianno','$course','$civilstat')");


include('connect.php');
$a=$_GET['id'];

mysql_query("delete from student where student_id='$a'");
echo "<script type='text/javascript'>

alert('Record Deleted.'); 
window.location.href ='index.php';
</script>
";


?>