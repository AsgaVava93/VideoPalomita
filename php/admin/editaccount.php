<?php

	
	if(isset($_POST['modifica'])){
	
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$fechaNacimiento = $_POST['fechaNacimiento'];
		$sexo = $_POST['sexo'];
		$direccion = $_POST['direccion'];
		$numero = $_POST['numero'];
		$cap = $_POST['cap'];
		$poblacion = $_POST['poblacion'];
		$provincia = $_POST['provincia'];
		$username = $_POST['username'];
		$usernameold = $_POST['usernameold'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$emailold = $_POST['emailold'];
				
		$resus = $mysqli->query("SELECT username FROM utente WHERE username LIKE '$username'"); 
		$countrow = $resus->num_rows;
		
			
		$remail = $mysqli->query("SELECT email FROM utente WHERE email LIKE '$email'"); 
		$countraw = $remail->num_rows;
		
		
		if($username == $usernameold){
			if($email == $emailold){
				$password = md5($password);
				$query = "UPDATE utente SET nombre='$nombre', apellido='$apellido', fechaNacimiento = '$fechaNacimiento', sexo='$sexo', direccion='$direccion', numero='$numero', cap='$cap', poblacion='$poblacion', provincia='$provincia', email='$email', username='$username', password='$password' WHERE username LIKE '$usernameold';";
				if($mysqli->query($query)) 
					echo '<br>Modifica echa.<br>';
				else
					echo "Error en la query.<br>";					
				
			}
			else{
				if($countraw > 0)
                                            echo "Correo ya existente. Elige nuevo.<br>";
			}
		} elseif($countrow > 0){ 
			echo 'Username ya existente';
		} elseif($countraw > 0){ 
			echo 'Correo ya existente';
		} else {
				$password = md5($password);
				$query = "UPDATE utente SET nombre='$nombre', apellido='$apellido', fechaNacimiento = '$fechaNacimiento', sexo='$sexo', direccion='$direccion', numero='$numero', cap='$cap', poblacion='$poblacion', provincia='$provincia', email='$email', username='$username', password='$password' WHERE username LIKE '$usernameold';";
				if($mysqli->query($query)) 
					echo '<br>Modifica echa.<br>';
				else
					echo "Error en la query.<br>";
		}
				
	}elseif(isset($_POST['edit']) || ($_SESSION['admin'] != $_SESSION['username'])){
	
		if($_SESSION['admin'] != $_SESSION['username'])
			$usernameold = $_SESSION['username'];
		else
			$usernameold = $_POST['username'];
		$i = 0;
		$query = "SELECT * FROM utente WHERE username LIKE '$usernameold';";
		$result = $mysqli->query($query);
		
		if(!$result){
			echo "Error en la query.<br>";
		}
		else{
			$row = $result->fetch_assoc();
?>
			<div class='div-admin'>
				<form class="reg-form" action="?page=editaccount" method='POST'>
					<fieldset class="register-group">
						<label>
							Nombre
							<input type="text" name="nombre" placeholder="Nombre" value='<?php echo"{$row['nombre']}";?>' maxlength='30' title="Inserisci il tuo nombre" required>
						</label>
									
						<br>
						<label>
							Apellido
							<input type="text" name="apellido" placeholder="Apellido" value='<?php echo"{$row['apellido']}";?>' title="Inserisci il tuo apellido" required>
						</label>

						<br>
						<label>
							Fecha Nacimiento
							<input type="date" name="fechaNacimiento" value='<?php echo"{$row['fechaNacimiento']}";?>' title="Inserisci la tua data di nascita" required>
						</label>

						<label>
							Sexo
							<select name="sexo" title="Seleziona il tuo sexo" required>
						<?php 
								if($row['sexo'] == 'm'){ ?>
									<option value="">Elige</option>
									<option value="m" selected>M</option>
									<option value="f">F</option>
						<?php	} else { ?>
									<option value="">Elige</option>
									<option value="m">M</option>
									<option value="f" selected>F</option>								
						<?php	} ?>
							</select>
						</label>

						<br>
						<label>
							Direccion/Avenida/Plaza.
							<input type="text" name="direccion" placeholder="Direccion" value='<?php echo"{$row['direccion']}";?>' title="Insersci la tua direccion" required>
						</label>
									
						<label>
							N.
							<input id="civic" type="number" name="numero" min='1' maxlength='4' value='<?php echo"{$row['numero']}";?>' placeholder="Civico" title="Inserisci il tuo numero civico" required>
						</label>

						<br>
						<label>
							CAP
							<input id="cap" type="text" name="cap" placeholder="CAP" value='<?php echo"{$row['cap']}";?>' pattern="^[0-9]{5}" maxlength='5' title="Il CAP (Codice Avdireccionmento Postale) &egrave; formato da 5 numeri" required> <!-- Il pattern vuole solo 5 numeri -->
						</label>	
									
						<label> 
							Poblacion
							<input type="text" name="poblacion" placeholder="Poblacion" value='<?php echo"{$row['poblacion']}";?>' maxlength='30' title="Inserisci il tuo poblacion di residenza" required>
						</label>	
									
						<label> 
							Provincia
							<input id="provincia" type="text" name="provincia" placeholder="Provincia" value='<?php echo"{$row['provincia']}";?>' maxlength='2' title="Inserisci la tua provincia" required>
						</label>	
						<br>

						<label>
							Correo viejo
							<input type="email" name="emailold" placeholder="type@isp.reg" value='<?php echo"{$row['email']}";?>' maxlength='60' required readonly>
						</label>						
						<br>
						
						<label>
							Correo nuevo
							<input type="email" name="email" placeholder="type@isp.reg" value='<?php echo"{$row['email']}";?>' maxlength='60' required>
						</label>						
						<br>

						<label>
							Username viejo
							<input type="text" name="usernameold" placeholder="username" value='<?php echo"{$row['username']}";?>' pattern="^[0-9a-zA-Z]{5,}" maxlength='15' title="L'username deve avere dai 5 ai 15 caratteri. Non sono ammessi caratteri speciali" required readonly>
						</label>	
						<br>

						<label>
							Username nuevo
							<input type="text" name="username" placeholder="username" value='<?php echo"{$row['username']}";?>' pattern="^[0-9a-zA-Z]{5,}" maxlength='15' title="L'username deve avere dai 5 ai 15 caratteri. Non sono ammessi caratteri speciali" required>
						</label>	
						<br>
						
						<label>
							Password
							<input type="password" name="password" placeholder="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" maxlength='20' title=" La password deve contenere maiuscole, minuscole, numeri, caratteri speciali, min 8 caratteri, max 20 caratteri" required>
						</label>
						<br>
					</fieldset>
								
					<input class='reg-btn' type="submit" name="modifica" value="modifica">
				</form>
			</div>			
			
			
<?php		}
?>

<?php

}else{
		
	$query = "SELECT username FROM utente";
	$result = $mysqli->query($query);
	if(!$result){
		echo "Error en la query";
	} else {
	
		$i = 0;
		$list = array();
		
		?>
		<div class='div-admin'>
			<form action='?page=editaccount' method='POST'>
				Utente da modificare:<br>
				<select name="username" title="Seleciona usuario" required>
                                    <option value="" selected> Eliges el usuario</option>
					<?php 
						while($row = $result->fetch_row()){
							$list[$i] = $row[0]; ?>
							<option value="<?php echo"{$list[$i]}";?>"> <?php echo"{$list[$i]}";?> </option>
						<?php } ?>
				</select>
				<input class='gen-btn' type="submit" name="edit" value="Executa">
			</form>
		</div>
		
<?php } } ?>