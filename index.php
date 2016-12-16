<!doctype html>
<html lang="en">
<head>
	<!-- meta includes:starts -->
	<?php require_once('includes/meta.php');?>
	<!-- meta includes:ends -->
</head>
<body>
	<!-- header starts -->
	<?php require_once('includes/header.php');?>
	<!-- header ends -->
	<!-- content -->
	<?php 
		if(!isset($_GET['page'])){
				include('pages/home.php');
			}else{
				include('pages/' .$_GET['page'] .'.php');
			}
	?>
	<!-- content -->

	<?php require_once('includes/script.php');?>
</body>
</html>