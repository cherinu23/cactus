<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));

$errors = array();
//code for adding task page
if (isset($_POST['task'])) {
	$task = $_POST['task'];

 	// check if input is filled

	if (empty($task)) {
		$errors['task'] = "Inputed task is required";
	}
	$secon = $mysqli->prepare("INSERT INTO tasks (task) VALUES (?)");
	$secon->bind_param("s", $task);
	$secon->execute();
	header('Location:home.php');
	exit();
};
//fetch and display the task on the page
$secon = $mysqli->prepare("SELECT * FROM tasks");
CHECK HOW TO DISPLAY DATA INSERTED IN MYSQL USING PREPARED STATEMNTS
// echo '<pre>' , var_dump($user_id) , '</pre>';
// print_r($secon)

?>

<!--  learn how the relationship between names from the inputs submits etc links to the logical part are made 

 make a clear vision on how to link the logical part to the front end 

 find out and make a clear vision in your mind and do not forget it on how the logical part is linked to the front end code -->