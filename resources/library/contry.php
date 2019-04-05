 <?php

 session_start();

// initialize variables

 $username = "";
 $email = "";
 $password = "";
 $confirm_password = "";

 $errors = array();

// connect to db

 $mysqli = new mysqli($config['db']['db1']['host'], $config['db']['db1']['username'], $config['db']['db1']['password'], $config['db']['db1']['dbname']);
 
// check connection

 if ($mysqli->connect_errno) {
 	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
 }

// register users

 if(isset($_POST['username']) && !empty($_POST['username'])){
 	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
 } 

 if(isset($_POST['email']) && !empty($_POST['email'])){
 	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
 } 
 if(isset($_POST['password']) && !empty($_POST['password'])){
 	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
 } 
 if(isset($_POST['confirm_password'])){
 	$confirm_password = mysqli_real_escape_string($mysqli, $_POST['confirm_password']);
 }

//form validation

 // if(empty($username)) {array_push($errors, "Username is required");};
 // if(empty($email)) {array_push($errors, "email is required");};
 // if(empty($password)) {array_push($errors, "Username is required");};
 // if($password != $confirm_password){array_push($errors, "Password do not match");};

 //check for duplicates using prepared statement

 $chkd = $mysqli->prepare("SELECT * FROM user WHERE username = ? or email = ?");
 $chkd->bind_param("ss", $username, $email);
 $chkd->execute();
 $chkd->store_result();
 
 $numRows = $chkd->num_rows();
 if( $numRows )
 {
 	echo "<p style='text-align: center; color:red'>Username/Email is already registered</p>";

 } else {

 	$secon = $mysqli->prepare("INSERT INTO user (username, email, password) VALUES (?, ?, ?)");
 	$secon->bind_param("sss", $username, $email, $password);
 	$secon->execute();
 	$secon->close();
 	$chkd->close();

 	echo "<p style='text-align: center; color:red'>DATA registered</p>";
 };


 // header('Location:resources/templates/home.php');




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
   // var_dump($check_duplicates);
 // print_r($query)
// [END TEST CASE 2]

// header('Location:resources/templates/home.php');
 $mysqli->close();
 ?>