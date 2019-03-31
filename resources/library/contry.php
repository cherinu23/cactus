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

 if(empty($username)) $errors[] = "Username is required";
 if(empty($email)) $errors[] = "Email is required";
 if(empty($password)) $errors[] = "Password is required";
 if(empty($password != $confirm_password)) $errors[] = "Passwords do not match";

// check DB for user duplicate

 $user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' LIMIT 1";
 $results = mysqli_query($db1, $user_check_query);
 $user = mysqli_fetch_assoc($results);

 // if($user) {

 // 	if($user['username'] === $username) $errors[] = "Username already exists";
 // 	if($email['email'] === $email) $errors[] = "Email already exists";

 // }

 // Register user if there is no error

 if(count($errors) == 0 ){

 	$password = md5($password); //this will encrypt
 	$query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

 	mysqli_query($db1,$query);
 	// $_SESSION['username'] = $username;
 	// $_SESSION['success'] = "You are now logged in";

 	// header('location: /templates/home.php');
 	CHECK WHY QUERIS ARE NOT REGISTERING TO DATABSE WHEN TRYING TO REGISTER USERS

 }

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
	// var_dump($results);
// print_r($password)
// [END TEST CASE 2]


 ?>