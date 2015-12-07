<?php 
	require_once('SchoolMateController.php');
	require_once('AdviceController.php');
	
	$class_method = explode("/", $_GET['r']);
	
	$class = $class_method[0] . 'Controller';
	$method = $class_method[1];
	$reflect_class = new ReflectionClass($class);
	
	$invoke_method = $reflect_class -> getMethod($method);
	$invoke_method -> invoke($reflect_class->newInstanceArgs(), $_POST[$class_method[0]]);
?>