 <?php

 session_start();

// initialize variables

 $username = "";
 $email = "";
 $password = "";
 $confirm_password = "";

 $errors = array();

// connect to db
// object oriented style

 $db1 = new mysqli($config['db']['db1']['host'], $config['db']['db1']['username'], $config['db']['db1']['password'], $config['db']['db1']['dbname']);
 
// check connection

 if (mysqli_connect_error()) {
 	printf("Connect failed: %s\n", mysqli_connect_error());
 	exit();
 }

// register users

 if(isset($_POST['username'])){
 	$username = mysqli_real_escape_string($db1, $_POST['username']);
 }
 if(isset($_POST['email'])){
 	$email = mysqli_real_escape_string($db1, $_POST['email']);
 }
 if(isset($_POST['password'])){
 	$password = mysqli_real_escape_string($db1, $_POST['password']);
 }
 if(isset($_POST['confirm_password'])){
 	$confirm_password = mysqli_real_escape_string($db1, $_POST['confirm_password']);
 }



//form validation



// check DB for user duplicate



// Register user if there is no error




// [TEST CASE 1]
// test for the existence of a variable or array element without actually trying to access it.
//  if (isset($_POST["username"]))
//  {
//  	$user = $_POST["username"];
//  	echo $user;
//  	echo " is your name";
//  } else {
//  	$user = null;
//  	echo "no username supplied";
//  }
// [END TEST CASE 1]



// [TEST CASE 2]
// dumps information about a variable and prints human-readable information about a variable
 var_dump($email);
// print_r($password)
// [END TEST CASE 2]


 ?>