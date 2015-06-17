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
				Fecha Nacimiento
				<input type="date" name="fechaNacimiento" title="Inserta tu fecha de nacimiento" required>
			</label>

			<label>
				Sexo
				<select name="sexo" title="Selecciona tu sexo" required>
					<option value="" selected>Elige</option>
					<option value="m">M</option>
				<option value="f">F</option>
				</select>
			</label>

			<br>
			<label>
				Direccion/Avenida/Plaza
				<input type="text" name="direccion" placeholder="Direccion" title="Inserta tu direccion" required>
			</label>
						
			<label>
				N.
				<input id="civic" type="number" name="numero" min='1' maxlength='4' placeholder="Civico" title="Inserta tu numero civico" required>
			</label>

			<br>
			<label>
				CAP
				<input id="cap" type="text" name="cap" placeholder="CAP" pattern="^[0-9]{5}" maxlength='5' title="El CAP es compuesto por 5 digitos" required>
			</label>	
						
			<label>
				Poblacion
				<input type="text" name="poblacion" placeholder="Poblacion" maxlength='30' title="Inserta tu poblacion de residencia" required>
			</label>	
						
			<label> 
				Provincia
				<input id="provincia" type="text" name="provincia" placeholder="Provincia" maxlength='2' title="Inserta tu provincia" required>
			</label>	
			<br>

			<label>
				Mail
				<input type="email" name="email" placeholder="type@isp.reg" maxlength='60' required>
			</label>						
			<br>

			<label>
				Username
				<input type="text" name="username" placeholder="username" pattern="^[0-9a-zA-Z]{5,}" maxlength='15' title="El username tiene que ser entre 5 y 15 digitos. No estan admitidos caracteres especiales" required>
			</label>	
			<br>

			<label>
				Password
				<input type="password" name="password" placeholder="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" maxlength='20' title=" La password deve contenere maiuscole, minuscole, numeri, caratteri speciali, min 8 caratteri, max 20 caratteri" required>
			</label>
			<br>

			<?php 
			if(isset($_SESSION['username'])){
				$value = "Executa";
				if($_SESSION['admin'] != $_SESSION['username']){ 
					$value = "Registrate";
					?>
					<label>
						<input id='privacy' type="checkbox" name="privacy" value="privacy" required> He leido y aceptado la informacion sobre la privacy
					</label> <?php
				}
			}else{ ?>
				<label>
					<input id='privacy' type="checkbox" name="privacy" value="privacy" required> He leido y aceptado la informacion sobre la privacy
				</label> <?php			
			} ?>
		</fieldset>
					
		<input class='reg-btn' type="submit" name="register" value="<?php echo $value; ?>">
	</form>
</div>