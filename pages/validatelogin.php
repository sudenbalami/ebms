<?php
session_start();

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(!$conn){
		die("unable to connect");
	}
		
		mysql_select_db('ebdb');


	if (isset($_POST['postlogin'])){
		
		//check whether the value has been added for the input field or not
		if ($_POST['email'] == ""){
			//error message
			$_SESSION['emailerror'] = 'Email is required';
			header("Location: index.php?page=home");
			exit();
			
		} else {

			if (!strpos($_POST['email'], '@')){
				$_SESSION['emailerror'] = 'Invalid email';
				header("Location: index.php?page=home");
				exit();
			}

			$_SESSION['emailerror'] = '';
		}

		if (empty($_POST['password'])){
			$_SESSION['passworderror'] = 'Password is required';
			header("Location: index.php?page=home");
			exit();
			
		} else{

			if (strlen($_POST['password']) < 6){
				$_SESSION['passworderror'] = 'Minimum password length should be 6 or greater';
				header("Location: index.php?page=home");
				exit();
			}			
			$_SESSION['passworderror'] = '';
		}
	

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
			header("Location: index.php?page=home");
		}
	}

?>