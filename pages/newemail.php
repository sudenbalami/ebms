<?php
/*	session_start();
	if (!isset($_SESSION['users'])) {
		header("location: index.php?page=login");
	}*/
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);

	if(!$conn){
		die("unable to connect");
		}


	mysql_select_db('ebdb');


	$email = $_POST['emailaddress'];

	
	$sql = "SELECT * FROM users where email = '$email'";
	$emailStatus = mysql_query($sql, $conn);




	$findEmail = mysql_num_rows($emailStatus);


	if ($findEmail == 1){
		echo "send an password reset link";
		$_SESSION['passworderr'] = "";
	} else {
		$_SESSION['passworderr'] = 'Your email doesnot match to our db record';
		header('Location: index.php?page=forget');
	}

		
		
?>