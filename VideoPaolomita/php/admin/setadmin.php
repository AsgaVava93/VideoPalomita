<?php

	if(isset($_POST['edit'])){
		$username = $_POST['username'];
		
		$query = "SELECT admin FROM utente WHERE username = '$username'";
		$result = $mysqli->query($query);
		$result = $result->fetch_assoc();
		
		if($_SESSION['username'] == $username || $result['admin'] == 1)
			echo "No puedes transformar en administrador quien ya lo es!<br>";
		else{
			$query = "UPDATE utente SET admin = 1 WHERE username = '$username'";
		}
	}else

	{
		$query = "SELECT username FROM utente";
		$result = $mysqli->query($query);
		if(!$result)
			echo "Error en la query";
		$i = 0;
		$list = array();

?>

	<div class='div-admin'>
		<form action='?page=account&nk=editaccount' method='POST'>
			Usuario que será administrador:<br>
			<select name="username" title="Seleciona el usuario" required>
				<option value="" selected>Elige el usuario</option>
				<?php 
					while($row = $result->fetch_row()){
						$list[$i] = $row[0]; ?>
						<option value="<?php echo"{$list[$i]}";?>"> <?php echo"{$list[$i]}";?> </option>
					<?php } ?>
			</select>
			<input type="submit" name="edit" value="executa">
		</form>
	</div>

<?php
	} 
?>