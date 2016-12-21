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

	$getMessage = 'SELECT * FROM employee where id = '.$eid;

	$fetchIt = mysql_query($getMessage, $conn);

	$messageRow = mysql_fetch_row($fetchIt);

	/*
	* image upload logic
	*/

	  


	/*
	*end of image upload logic 
	*/


	if (isset($_POST['editmessage'])){

		$errors = array();
		  $file_name = $_FILES['emphoto']['name'];
	      $file_size = $_FILES['emphoto']['size'];
	      $file_tmp  = $_FILES['emphoto']['tmp_name'];
	      $file_type = $_FILES['emphoto']['type'];
	      $destination = 'assets/images/' . basename( $_FILES['emphoto']['name']);
	     
	      
	      if(empty($errors)==true){
	         move_uploaded_file($file_tmp, $destination);
	      }else{
	         print_r($errors);
	      }
		
		//updating record in db
		$ename  = $_POST['emname'];
		$ephoto  = basename($_FILES['emphoto']['name']);
		$edesignation  = $_POST['emdesignation'];
		$email  = $_POST['ememail'];
		$ephone  = $_POST['emcontact'];
		$ejoin  = $_POST['emdate'];
		$eaddress  = $_POST['emaddress'];
		$id = $_POST['rowid'];

		//update record in database
		//update query syntax - UPDATE `employee` SET `id`=[value-1],`title`=[value-2],`content`=[value-3],`sender`=[value-4] WHERE 1
		$updateRecord = "UPDATE employee SET 
						`ename` = '$ename', 
						`ephoto` = '$ephoto', 
						`edesignation` = '$edesignation', 
						`email` = '$email', 
						`ephone` = '$ephone', 
						`ejoin` = '$ejoin', 
						`eaddress` = '$eaddress'  
						WHERE id = $id";


	


		//echo $updateRecord;
		$res = mysql_query($updateRecord, $conn);


		

		if ($res){
			//redirecting back to previous page
			header('Location: index.php?page=dashboard');
		} else {
			echo "err";
		}
}

?>
<form method="post" action="" enctype="multipart/form-data">
    <input type="hidden" name="rowid" value="<?php echo $messageRow['0'];?>">
    <input type="file" name="emphoto" value="<?php echo $messageRow['2'];?>"><br/>
	<input type="text" name="emname" value="<?php echo $messageRow['3'];?>"><br/>  <!--- $messageRow[2] @2 is an index of array -->
	<input type="text" name="emdesignation" value="<?= $messageRow['4'];?>"><br/>
	<input type="text" name="ememail" value="<?= $messageRow['5'];?>"><br/>
	<input type="text" name="emcontact" value="<?= $messageRow['6'];?>"><br/>
	<input type="text" name="emdate" value="<?= $messageRow['7'];?>"><br/>
	<input type="text" name="emaddress" value="<?= $messageRow['8'];?>"><br/>
	<input type="submit" value="Edit Message" name="editmessage"><br/>
</form>