<?php
session_start();
$_SESSION['student_id'];
session_destroy();
header("location:login/main.php");
?>