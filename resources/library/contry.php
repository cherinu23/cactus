 <?php

 session_start();

// initialize variables

 $username = "";
 $email = "";

 $errors = array();

// register users

 if (isset($_POST['register-submit'])) {
 	$username = $_POST['username'];
 	$email = $_POST['email'];
 	$password = $_POST['password'];
 	$confirm_password = $_POST['confirm_password'];
 	
// form validation

 	if (empty($username)) {
 		$errors['username'] = "Username required";
 	}
 	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 		$errors['email'] = "Email address is invalid";
 	}
 	if (empty($email)) {
 		$errors['email'] = "Email required";
 	}
 	if (empty($password)) {
 		$errors['password'] = "Password required";
 	}
 	if ($password !== $confirm_password) {
 		$errors['password'] = "The two password do not match";
 	}

 // checking for duplicates

 	$chkd = $mysqli->prepare("SELECT * FROM user WHERE email = ? LIMIT 1");
 	$chkd->bind_param("s", $email);
 	$chkd->execute();
 	$chkd->store_result();
 	$row_cnt = $chkd->num_rows;
 	$chkd->close();

 	if ($row_cnt > 0) {
 		$errors['email'] = "Email already exists";
 	}

 	$chkd = $mysqli->prepare("SELECT * FROM user WHERE username = ? LIMIT 1");
 	$chkd->bind_param("s", $username);
 	$chkd->execute();
 	$chkd->store_result();
 	$row_cnt = $chkd->num_rows;
 	$chkd->close();

 	if ($row_cnt > 0) {
 		$errors['username'] = "Username already exists";
 	}

 // insert if no errors are found

 	if (count($errors) === 0) {
 		
 		$password = password_hash($password, PASSWORD_DEFAULT);
 		$verified = false;
 		$token = bin2hex(random_bytes(50));


 		$secon = $mysqli->prepare("INSERT INTO user (username, email, password, verified, token) VALUES (?, ?, ?, ?, ?)");
 		$secon->bind_param("sssds", $username, $email, $password, $verified, $token);
 		if ($secon->execute()) {
 		// login user
 			$user_id = $mysqli->insert_id;
 			$_SESSION['id'] = $user_id;
 			$_SESSION['username'] = $username;
 			$_SESSION['email'] = $email;
 			$_SESSION['verified'] = $verified;
 		// inform user loged in after redirected 
 			$_SESSION['message'] = "You are now logged in!";
 			$_SESSION['alert-class'] = "alert-success alert-dismissible fade show";
 			header('Location:resources/templates/home.php');
 			exit();

 		} else {
 			$errors['db_error'] = "Database error: failed to register";
 		}

 	}
 };

// if user clicks the login button

 if (isset($_POST['login-submit'])) {
 	$username = $_POST['username'];
 	$password = $_POST['password'];

// validation

 	if (empty($username)) {
 		$errors['username'] = "Username required";
 	}

 	if (empty($password)) {
 		$errors['password'] = "Password required";
 	}


 	if (count($errors) === 0) {

 		$lgin = $mysqli->prepare("SELECT * FROM user WHERE username = ? OR email = ? LIMIT 1");
 		$lgin->bind_param("ss", $username, $username);
 		$lgin->execute();
 		$result = $lgin->get_result();
 		$user = $result->fetch_assoc();


 		if (password_verify($password, $user['password'])) {
 		// login succes
 			$_SESSION['id'] = $user['id'];
 			$_SESSION['username'] = $user['username'];
 			$_SESSION['email'] = $user['email'];
 			$_SESSION['verified'] = $user['verified'];
 		// inform user loged in after redirected 
 			$_SESSION['message'] = "You are now logged in!";
 			$_SESSION['alert-class'] = "alert-success alert-dismissible fade show";
 			header('Location:resources/templates/home.php');
 			exit();	
 		} else {

 			$errors['login_fail'] = "Wrong credentials";	
 		}
 		

 	}
 	
 };

//fa tutorial cu verificare email 
 //logout user

 if (isset($_GET['dropdown-item dropdown-item2'])) {
 	session_destroy();
 	unset($_SESSION['id']);
 	unset($_SESSION['username']);
 	unset($_SESSION['email']);
 	unset($_SESSION['password']);
 	unset($_SESSION['verified']);
 	header('Location: index.php');
 	exit();
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
 
 // print_r($query)
// [END TEST CASE 2]

// header('Location:resources/templates/home.php');

 // header('Location:resources/templates/home.php');

 ?>