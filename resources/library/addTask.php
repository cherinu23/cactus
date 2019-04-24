<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));

$errors = array();
//code for task page
 if (isset($_POST['task'])) {
 	$task = $_POST['task'];

 	// check if input is filled

 	if (empty($task)) {
 		$errors['task'] = "Inputed task is required";
 	}


 };

// echo '<pre>' , var_dump($user_id) , '</pre>';
print_r($task)

 ?>