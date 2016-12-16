<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$conn = mysql_connect($dbhost,$dbuser,$dbpass);
	if(!$conn){
		die("unable to connect");
	}
	// print_r($_POST);
	$post = $_POST;
	$firstname = $post['firstname'];
	$lastname = $post['lastname'];
	$email = $post['email'];
	$country = $post['country'];
	$phone = $post['phone'];
	$postcode = $post['postcode'];
	$password = md5($post['password']);
	$sql = "INSERT INTO users".
	      "(firstname,lastname,email,country,phone,postcode,password)".
	      "VALUES".
	      "('$firstname', '$lastname', '$email', '$country', '$phone', '$postcode', '$password')";
	      mysql_select_db('ebdb');
	      mysql_query($sql, $conn);
?>
<div class="container">
	<div class="successfully">
		<h1>Submitted Successfully</h1>
	</div>	
</div>
