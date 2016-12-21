<?php ?>
<div id="divLoginWrapper">
	<div class="login-header">
		<h2>Reset New password</h2>
		<!-- <?php if(isset($_SESSION["error"])): ?> 
			<div class="alert alert-danger">
				<?php
					echo  $_SESSION["error"];
					?>	
			</div>
		<?php endif; ?> -->
	</div>
	<div class="login-body-holder">
	<?php if(isset($_SESSION['passworderr'])) :?>
		<?php echo $_SESSION['passworderr'];?>
	<?php endif;?>
		<form action="index.php?page=newemail" method="post" class="login-form">
			<fieldset>
				<label for="emailadd">Enter Email address</label>
				<input type="text" id="emailadd" name="emailaddress">
				<?php if (!empty($_SESSION['emailerror'])): ?>
					<span class="help-block"><?php echo  $_SESSION['emailerror']; ;?></span>
				<?php endif;?>
				<input type="submit" value="Submit" name="postlogin">
			</fieldset>
		</form>
	</div>
</div>