<?php

if ($_SESSION['users'] == "") {
		header("location:../index.php?page=login");
	}
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);

	if(!$conn){
		die("unable to connect");
		}
	mysql_select_db('ebdb');

	$eid = $_GET['id'];

	$deleteRow = ' DELETE FROM employee where id = '.$eid;

	$deleteRecord = mysql_query($deleteRow, $conn);


	if ($deleteRecord){
		echo "delete successfully";
		header('Location: index.php?page=dashboard');
	}

?>