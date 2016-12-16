<?php
	session_start();

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(!$conn){
		die("unable to connect");
		}else{
			echo "connection successfully";
		}
		mysql_select_db('ebdb');
	if (isset($_POST['submit'])){
		unset($_SESSION['error']);
		$email = $_POST['email'];
		$password = md5($_POST['password']);

		$sql = "SELECT * FROM users where email = '$email' and password = '$password' ";
		$checklogin = mysql_query($sql, $conn);
		$totalRows = mysql_num_rows($checklogin);


		if($totalRows == 1){
			$userDetail = mysql_fetch_row($checklogin);
			
			$_SESSION['users'] = $userDetail;
			header("location: index.php?page=dashboard");
		}else{
			$_SESSION['error'] = 'Invalid username/password combination';
			header("Location: index.php?page=register");
		}
	}

?>