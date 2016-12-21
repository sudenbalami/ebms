<?php
// session_start();
if (isset($_SESSION['users'])) {
		header("location: index.php?page=dashboard");
	}
?>
<div id="divLoginWrapper">
	<div class="login-header">
		<h2>Login</h2>
		<!-- <?php if(isset($_SESSION["error"])): ?> 
			<div class="alert alert-danger">
				<?php
					echo  $_SESSION["error"];
					?>	
			</div>
		<?php endif; ?> -->
	</div>
	<div class="login-body-holder">
		<form action="index.php?page=validatelogin" method="post" class="login-form">
			
			<?php if(isset($_SESSION['deny'])):?>
				<?=$_SESSION['deny'];?>
			<?php endif;?>
			<fieldset>
				<label for="username">Username</label>
				<input type="text" id="username" name="email">
				<?php if (!empty($_SESSION['emailerror'])): ?>
					<span class="help-block"><?php echo  $_SESSION['emailerror']; ;?></span>
				<?php endif;?>


				<label for="password">Password</label>
				<input type="password" id="password" name="password">
				<?php if (!empty($_SESSION['passworderror'])): ?>
					<span class="help-block"><?php echo  $_SESSION['passworderror']; ;?></span>
				<?php endif;?>
				<input type="submit" value="Submit" name="postlogin">
			</fieldset>
		</form>
		<div class="forgot-section">
			<span class="forgot"><a href="index.php?page=forget">Forgot</a></span>
			<span class="new-account"><a href="index.php?page=register">New Account</a></span>
		</div>
	</div>
</div>