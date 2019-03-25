 <?php

 session_start();

 //connect to db

 $db1 = mysqli_connect($config['db']['db1']['host'], $config['db']['db1']['username'], $config['db']['db1']['password'], $config['db']['db1']['dbname']) or die("Could not connect to the database");
 
 // uncomment bellow to see if connection is working
 // if($db1) {
 // 	echo 'conected;
 // } else {
 // 	echo 'not conected';
 // }

 //register users

 ?>