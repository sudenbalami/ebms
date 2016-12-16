<?php
	$eidErr = $enameErr = $edesignationErr = $emailErr = $ephoneErr = $ejoinErr = $eaddressErr = "";
	$eid = $ename = $edesignation = $email = $ephone = $ejoin = $eaddress = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["eid"])) {
			$eidErr = "Employee id is required";
		} else{
			$eid = test_input($_POST["eid"]);
			// check length
			if (!strlen($eid) < 5 , $eid ) {
				$eidErr = "wrong";
			}
		}
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>