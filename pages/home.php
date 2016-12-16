<?php
session_start();
?>
<div id="divLoginWrapper">
	<div class="login-header">
		<h2>Login</h2>
		<?php if(isset($_SESSION["error"])): ?> 
			<div class="alert alert-danger">
				<?php
					echo  $_SESSION["error"];
					?>	
			</div>
		<?php endif; ?>
	</div>
	<div class="login-body-holder">
		<form action="index.php?page=validatelogin" method="post" class="login-form">
			<fieldset>
				<label for="username">Username</label>
				<input type="text" id="username" name="email">
				<label for="password">Password</label>
				<input type="password" id="password" name="password">
				<input type="submit" value="Submit" name="submit">
			</fieldset>
		</form>
		<div class="forgot-section">
			<span class="forgot"><a href="#">Forgot</a></span>
			<span class="new-account"><a href="index.php?page=register">New Account</a></span>
		</div>
	</div>
</div>