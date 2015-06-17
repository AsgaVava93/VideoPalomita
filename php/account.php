<script src="assets/script/account.js"></script>
<?php

	$username = $_SESSION['username'];
	$query = "SELECT admin FROM utente WHERE username LIKE '$username'";
	$result = $mysqli->query($query);
	$admin = $result->fetch_assoc();
	
	if($admin['admin'])	{ 
		$_SESSION['admin'] = $username;
	?>
		<div class='titolo'>
			<h2><b>Bienvenido admin!</b></h2>
			<p>Panel de administracion</p>
		</div>
		<div class='list-account'>

					
			
		<h3>Inserta foto</h3>
			<div>
				<?php include('php/admin/insertphoto.php'); ?>
			</div>
		<h3 id='pc'>Inserta computer</h3>
			<div>
				<?php include('php/admin/insertpc.php'); ?>
			</div>
		<h3>Inserta monitor</h3>
			<div>
				<?php include('php/admin/insertmon.php'); ?>
			</div>
		<h3>Elimina articulo</h3>	
			<div>
				<?php include ('php/admin/deleteart.php'); ?>
			</div>			
		<h3>Actualiza cantidad articulo</h3>	
			<div>
				<?php include ('php/admin/editart.php'); ?>
			</div>
		<h3>Nuevo usuario</h3>    
			<div>
				<?php include ('php/admin/newaccount.php'); ?>
			</div>			
		<h3>Modifica usuario</h3>	
			<div>
				<?php include ('php/admin/editaccount.php'); ?>
			</div>	
		<h3>Borra usuario</h3>
			<div>
				<?php include ('php/admin/deleteaccount.php'); ?>
			</div>
			
</div>					
	<?php
	}
	
	else{
		$_SESSION['admin'] = "NULL";
	?>	
		<div class='titolo'>
			<h2><b>Bienvenido <?php echo "{$username}";?></b></h2>
			<p>Panel de administracion</p>
		</div>
		<div class='list-account'>
			<h3>Modifica usuario </h3>	
				<div>
					<?php include ('php/admin/editaccount.php'); ?>
				</div>

			<h3>Elimina cuenta </h3>	
				<div>
					<?php include ('php/admin/deleteaccount.php'); ?>
				</div>
		</div>
	<?php
	}
	$mysqli->close();
?>