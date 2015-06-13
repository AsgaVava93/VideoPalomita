<?php
	if(isset($_POST['register'])){			//se è stato premuto il bottone "Registrati"
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
		$password = $_POST['password'];
		$email = $_POST['email'];
				
		$resus = $mysqli->query("SELECT * FROM utente WHERE username LIKE '$username'");
		$countrow = $resus->num_rows;
			
		$remail = $mysqli->query("SELECT * FROM utente WHERE email LIKE '$email'");
		$countraw = $remail->num_rows;
			
						
		if($countrow > 0){
			echo 'Username ya existente';
		} elseif($countraw > 0){
			echo 'Correo ya existente';
		} else {
			$password = md5($password);
			if($mysqli->query("INSERT INTO utente (nombre, apellido, fechaNacimiento, sexo, direccion, numero, cap, poblacion, provincia, email, username, password) VALUES ('$nombre', '$apellido', '$fechaNacimiento', '$sexo', '$direccion', $numero, '$cap', '$poblacion', '$provincia', '$email', '$username','$password')")) {
			echo 'Registracion lograda';
			} else {
				echo 'Errorn en la query: ';
			}
		}
	}
	$mysqli->close();
?>