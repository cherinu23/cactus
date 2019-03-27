 <?php

 session_start();

// initialize variables

 $username = "";
 $email = "";

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

 $username = mysqli_real_escape_string($db1, $_POST['username']);
 $email = mysqli_real_escape_string($db1, $_POST['email']);
 $password = mysqli_real_escape_string($db1, $_POST['password']);
 $confirm_password = mysqli_real_escape_string($db1, $_POST['confirm_password']);

//form validation

 if(empty($username)) $errors[] = "Username is required";
 if(empty($email)) $errors[] = "Email is required";
 if(empty($password)) $errors[] = "Password is required";
 if(empty($password != $confirm_password)) $errors[] = "Passwords do not match";

// if(count($errors) == 0 ){

//  	$password = md5($password); //this will encrypt pwd
//  	$query = "INSERT INTO user (username, email, password) VALUES ('$username', ,$email', '$password')";
//  	mysqli_query($db1,$query);
//  	$_SESSION['username'] = $username;
//  	$_SESSION['succes'] = "Your logged in";
// }

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

// var_dump($username)
// print_r($password)

// [END TEST CASE 2]


 ?>
