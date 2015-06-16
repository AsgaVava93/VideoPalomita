<?php
	if(!isset($_SESSION['username']) && !isset($_SESSION['admin'])) {
	?>
		<div class='titolo'>
			<h2><b>Pagina di registro</b></h2>
		</div>
	<?php
	}
?>

<div class='div-admin'>
	<form class="reg-form" action="index.php?page=inviodati" method='POST'>
		<fieldset class="register-group">
			<label>
				Nombre
				<input type="text" name="nombre" placeholder="Nombre" maxlength='30' title="Inserta tu nombre" required>
			</label>
						
			<br>
			<label>
				Apellido
				<input type="text" name="apellido" placeholder="Apellido" title="Inserta tu apellido" required>
			</label>

			<br>
			<label>
				Fecha de Nacimiento
				<input type="date" name="dataNascita" title="Inserta tu fecha de nacimiento" required>
			</label>

			<label>
				Sexo
				<select name="sexo" title="Seleziona tu sexo" required>
					<option value="" selected>Eliges</option>
					<option value="m">M</option>
				<option value="f">F</option>
				</select>
			</label>

			<br>
			<label>
				Direcion/Avenida/Plaza
				<input type="text" name="direccion" placeholder="Direccion" title="Insersci tu direccion" required>
			</label>
						
			<label>
				N.
				<input type="number" name="numero" min='1' placeholder="Civico" title="Inserta tu numero civico" required>
			</label>

			<br>
			<label>
				Codigo Postal
				<input type="text" name="cap" placeholder="Codigo Postal" pattern="^[0-9]{5}" maxlength='5' title="El Codigo Postal esta formado desde 5 digitos" required> <!-- Il pattern vuole solo 5 numeri -->
			</label>	
						
			<label> 
				Poblacion
				<input type="text" name="poblacion" placeholder="Poblacion" maxlength='30' title="Inserta tu poblacion di residenza" required>
			</label>	
						
			<label> 
				Provincia
				<input type="text" name="provincia" placeholder="Provincia" maxlength='2' title="Inserta tu provincia" required>
			</label>	
			<br>

			<label>
				Mail
				<input type="email" name="email" placeholder="type@isp.reg" maxlength='60' required>
			</label>						
			<br>

			<label>
				Username
				<input type="text" name="username" placeholder="username" pattern="^[0-9a-zA-Z]{5,}" maxlength='15' title="El username tiene que ser entre las 5 y 15 digios. No estan permitidos caracteres especiales" required>
			</label>	
			<br>

			<label>
				Password
				<input type="password" name="password" placeholder="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" maxlength='20' title=" La password deve contenere maiuscole, minuscole, numeri, caratteri speciali, min 8 caratteri, max 20 caratteri" required>
			</label>
			<br>
			<?php if(!($_GET['page'] == 'account')) { ?>
			<label>
				<input type="checkbox" name="privacy" value="privacy" required> He leido y acepto la informacion sobre la privacy
			</label>
			<?php } ?>
		</fieldset>
					
		<input class='reg-btn' type="submit" name="register" value="Registrate">
	</form>
</div>