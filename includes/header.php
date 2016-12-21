<?php
session_start();
?>
<header id="header">
	<div class="container">
		<strong class="logo"><a href="index.php">EB Pearls</a></strong>
		<div id="nav">
			<ul class="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php?page=about">About Us</a></li>
				<li><a href="index.php?page=contact">Contact</a></li>
				
				<?php if (!isset($_SESSION['users'])):?>
					<li><a href="index.php">Login</a></li>	
				<?php endif;?>
			</ul>
			
			<?php if (isset($_SESSION['users']) ):?>
			<div class="user-wrap">
				<div class="user"><span>Hi, <span class="name"><?php echo $_SESSION['users']['1'];?></span></span></div>
				<div class="logout"><a href="index.php?page=logout">Logout</a></div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</header>
