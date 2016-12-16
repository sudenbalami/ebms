<?php 
	if (!isset($_SESSION['users'])) {
		header("location:../index.php?page=login");
	}else{
		$newuser = $_SESSION['users'];
	}

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(!$conn){
		die("unable to connect");
		}
	mysql_select_db('ebdb');

		$sql = "SELECT * FROM employee";
		$employee = mysql_query($sql, $conn);
		/*$totalRows = mysql_num_rows($checklogin);
		$userDetail = mysql_fetch_assoc($checklogin);*/


		/*while($row = mysql_fetch_array($employee)){
			echo $row['ename'] . "<br/>";
		}*/
			





		// if($totalRows == 1){
		// 	$userDetail = mysql_fetch_row($checklogin);			
		// 	$_SESSION['users'] = $userDetail;
		// 	header("location: index.php?page=dashboard");
		// }else{
		// 	$_SESSION['error'] = 'Invalid username/password combination';
		// 	header("Location: index.php?page=register");
		// }
?>
<div id="divDashboardWrapper">
	<strong class="hello">Hello,
		<?php 
			$fullname = $newuser['1'] . ' ' . $newuser['2'];
			//$shortName = substr($fullname, 0, 5);
			echo $fullname; 
		 ?>
	</strong>
	<h1>welcome to Dashboard</h1>
	<div class="employee-detail-wrap">
		<div class="new-employee"><a href="index.php?page=addemployee">Add New Employee</a></div>
		<div class="employee-list-wrap">
			<ul class="employee-list">
				<li class="head">
					<div class="eid"><span>Id</span></div>
					<div class="ename"><span>Employee Name</span></div>
					<div class="edesignation"><span>Designation</span></div>
					<div class="email">Email</div>
					<div class="ephone">Phone</div>
					<div class="ejoin">Join Date</div>
					<div class="eaddress">Address</div>
				</li>


			

			<?php while($row = mysql_fetch_array($employee)): ?>

				<li>
					<div class="eid"><span><?php echo $row['eid'];?></span></div>
					<div class="ename"><span><?php echo $row['ename'];?></span></div>
					<div class="edesignation"><span><?php echo $row['edesignation'];?></span></div>
					<div class="email"><?php echo $row['email'];?></div>
					<div class="ephone"><?php echo $row['ephone'];?></div>
					<div class="ejoin"><?php echo $row['ejoin'];?></div>
					<div class="eaddress"><?php echo $row['eaddress'];?></div>
				</li>

			<?php endwhile;?>
			</ul>
		</div>
	</div>
</div>