<?php
	if(isset($_POST['register'])){			//se � stato premuto il bottone "Registrati"
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$fechaNacimiento = $_POST['fechaNacimiento'];
		$sexo = $_POST['sexo'];
		$direccion = $_POST['direccion'];
		$numero = $_POST['numero'];
		$codigoPostal = $_POST['codigoPostal'];
		$poblacion = $_POST['poblacion'];
		$provincia = $_POST['provincia'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
				
		$resus = $mysqli->query("SELECT * FROM usuario WHERE username LIKE '$username'");
		$countrow = $resus->num_rows;
			
		$remail = $mysqli->query("SELECT * FROM usuario WHERE email LIKE '$email'");
		$countraw = $remail->num_rows;
			
						
		if($countrow > 0){
			echo 'Username ya existente';
		} elseif($countraw > 0){
			echo 'Correo ya existente';
		} else {
			$password = md5($password);
			if($mysqli->query("INSERT INTO usuario (nombre, apellido, fechaNacimiento, sexo, direccion, numero, codigoPostal, poblacion, provincia, email, username, password) VALUES ('$nombre', '$apellido', '$fechaNacimiento', '$sexo', '$direccion', $numero, '$codigoPostal', '$poblacion', '$provincia', '$email', '$username','$password')")) {
			echo 'Registracion lograda';
			} else {
				echo 'Error en la query';
			}
		}
	}
	$mysqli->close();
?>