<header class="primary-header container group">
	<h1 class="logo"><a href="index.php?page=home">VideoPalomita</a></h1>
	<nav class="header-nav">
		<!--
		--><a href="index.php?page=where">Contactos</a><!--
		--><?php
			if(isset($_SESSION['username'])){
				$username = $_SESSION['username'];
				?><a href="index.php?page=account"><?php echo "{$username}"; ?></a><!--
				--><a href="index.php?page=logout">Logout<?php
			}
			else{
				?><a href="index.php?page=login">Login</a><!--
				--><a href="index.php?page=signup">Registrate<?php
			}
		?></a><!--
		--><a href="index.php?page=cart">Carro</a>
	</nav>
</header>