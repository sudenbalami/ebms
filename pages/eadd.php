<?php
	// $eid = $ename = $edesignation = $email = $ephone = $ejoin = $eaddress = "";
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$conn = mysql_connect($dbhost,$dbuser,$dbpass);
	if(!$conn){
		die("unable to connect");
	}
	
	/*
	* image upload logic
	*/

	  $errors = array();
	  $file_name = $_FILES['ephoto']['name'];
      $file_size = $_FILES['ephoto']['size'];
      $file_tmp  = $_FILES['ephoto']['tmp_name'];
      $file_type = $_FILES['ephoto']['type'];
     // $file_ext = strtolower(end(explode('.',$_FILES['ephoto']['name'])));
    
     // $expensions= array("jpeg","jpg","png");
      
    /*  if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }*/

      $destination = 'assets/images/' . basename( $_FILES['ephoto']['name']); 

     
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp, $destination);
      }else{
         print_r($errors);
      }


	/*
	*end of image upload logic 
	*/



	

	$post = $_POST;
	$eid = $post['eid'];
	$ephoto = basename($_FILES['ephoto']['name']);
	$ename = $post['ename'];
	$edesignation = $post['edesignation'];
	$email = $post['email'];
	$ephone = $post['ephone'];
	$ejoin = $post['ejoin'];
	$eaddress = $post['eaddress'];
	$sql = "INSERT INTO employee".
	      "(eid,ephoto,ename,edesignation,email,ephone,ejoin,eaddress)".
	      "VALUES".
	      "('$eid', '$ephoto', '$ename', '$edesignation', '$email', '$ephone', '$ejoin', '$eaddress')";
	      mysql_select_db('ebdb');
	      mysql_query($sql, $conn);
	
?>
<div class="container">
	<div class="successfully">
		<h1>Submitted Successfully</h1>
	</div>	
</div>
