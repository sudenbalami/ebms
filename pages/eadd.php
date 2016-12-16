<?php
	// $eid = $ename = $edesignation = $email = $ephone = $ejoin = $eaddress = "";
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$conn = mysql_connect($dbhost,$dbuser,$dbpass);
	if(!$conn){
		die("unable to connect");
	}
	// print_r($_POST);
	$post = $_POST;
	$eid = $post['eid'];
	$ename = $post['ename'];
	$edesignation = $post['edesignation'];
	$email = $post['email'];
	$ephone = $post['ephone'];
	$ejoin = $post['ejoin'];
	$eaddress = $post['eaddress'];
	$sql = "INSERT INTO employee".
	      "(eid,ename,edesignation,email,ephone,ejoin,eaddress)".
	      "VALUES".
	      "('$eid', '$ename', '$edesignation', '$email', '$ephone', '$ejoin', '$eaddress')";
	      mysql_select_db('ebdb');
	      mysql_query($sql, $conn);
?>
<div class="container">
	<div class="successfully">
		<h1>Submitted Successfully</h1>
	</div>	
</div>
