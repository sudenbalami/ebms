<?php
session_start();
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
			<span class="forgot"><a href="#">Forgot</a></span>
			<span class="new-account"><a href="index.php?page=register">New Account</a></span>
		</div>
	</div>
</div>