<?php

if(isset($_POST['delete'])){
	if($_SESSION['admin'] != $_SESSION['username'])
		$username = $_SESSION['username'];
	else
		$username = $_POST['username'];
		
	$query = "DELETE FROM utente WHERE username = '$username'";
	
	if ($_SESSION['username'] == $username){
				
		$select = "SELECT username FROM utente WHERE admin=1";
		$result = $mysqli->query($select);
		
		$seladmin = "SELECT admin FROM utente WHERE username = '$username'";
		$resadmin = $mysqli->query($seladmin);
				
		$rows = $resadmin->fetch_assoc();

		if($result){
			if($result->num_rows > 1){
				if($mysqli->query($query)){
					echo "Utente {$username} eliminato.<br>";
					//logout
					$_SESSION = array();
					session_destroy();
					header("refresh:3;url='?page=home'" );
				}
				else
					echo "Errore nella query <br>";
			}
			elseif ($rows['admin'] == 1){
				echo "<br>No puedes borrar tu cuenta, eres el admin!<br>";
			} else{
				if($mysqli->query($query)){
					echo "Tu cuenta ha sido borrada<br>";
					//logout
					$_SESSION = array();
					session_destroy();
					header("refresh:3;url='?page=home'" );
				}
			else
				echo "Error en la query.<br>";
			}
		}
		else {
			echo "Error en la query<br>";
		}
	
	}
	else {
		if($mysqli->query($query))
			echo "Cuenta {$username} borrada.<br><br>";
		else
			echo "Error en la query.<br>";
	}
}

else {

	$query = "SELECT username FROM utente";
	$result = $mysqli->query($query);
	if(!$result){
		echo "Error en la query";
	} else {

		$i = 0;
		$list = array();
	
		if($admin['admin'] == 1){ //if I'm admin I choose who delete
	
	?>
			<div class='div-admin'>
				<form action='?page=deleteaccount' method='POST'>
					Cuenta da borrar:<br>
					<select name="username" title="Seleciona el usuario" required>
						<option value="" selected>Elige el usuario</option>
						<?php 
							while($row = $result->fetch_row()){
								$list[$i] = $row[0]; ?>
								<option value="<?php echo"{$list[$i]}";?>"> <?php echo"{$list[$i]}";?> </option>
						<?php } ?>
					</select>
					<input type="submit" class='gen-btn' name="delete" value="Borra">
				</form>
			</div>

<?php
		}else{ ?>
			<p>Eres seguro que deseas eliminar tu cuenta?</p>
			<form action='?page=deleteaccount' method='POST'>
				<input class='del-btn' type="submit" name="delete" value="Si">
			</form><!--
			--><form action='?page=account' method='POST'>
				<input class='del-btn' type="submit" name="delete" value="No">
			</form>			
<?php
		} 
	}
}
?>