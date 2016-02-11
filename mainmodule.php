<?php
session_start();
require_once ("MysqliDb.php");
require_once ("dbObject.php");

 dbObject::autoload ("models");
spl_autoload_register(function($class){
	
	require_once 'classes/' . $class .'.php';
});
require_once ('MysqliDb.php');
$db = new MysqliDb ('127.0.0.1', 'root', '', 'clinic');

?>