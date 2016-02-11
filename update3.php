<?php
$a = $_GET['student_id'];
$newtxt = $_POST['txtname'];
mysql_query("update students set student_name='$newtxt' where student_id='$a'");



?>