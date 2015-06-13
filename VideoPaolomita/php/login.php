<br>
<?php
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		
		$result = $mysqli->query("SELECT * FROM utente WHERE username LIKE '$username' AND password='$password'");
		
		if(($result->num_rows) > 0){
			$result = $mysqli->query("SELECT username FROM utente WHERE username LIKE '$username'");
			$row = $result->fetch_row();
			$username = $row[0];
			$result = $mysqli->query("SELECT id FROM utente WHERE username LIKE '$username'");
			$row = $result->fetch_row();
			$userid = $row[0];
		
			$_SESSION['username'] = $username;
			$_SESSION['userid'] = $userid;
			
			header("refresh:0;url='?page=home'" );
		}
		else {
			$result = $mysqli->query("SELECT * FROM utente WHERE username LIKE '$username'");
			if(($result->num_rows) > 0) {
				echo "Contraseña equivocada.<br>";
				echo "Vuelve a la pagina de login en 5 segundos...";
				header("refresh:5;url='?page=login'" ); 
			}
			else{
				echo "El nombre usuario {$username} no es valido.<br>";
				echo "Vuelve a la pagina de login en 5 segundos...";
				header("refresh:5;url='?page=login'" );
			}
		}
} else { ?>
<div class='div-admin'>
	<form class='reg-form' action='index.php?page=login' method='POST'>
		<fieldset class='login-group'>
			<label>Username: <input type='text' name='username' placeholder='Username' maxlength='15' title='Inserta tu nombre usuario' required></label><br>
			<label>Password: <input class='pass-input' type='password' placeholder='Password' name='password' maxlength='20' title='Inserta tu contraseña' required></label><br>
			<input class='reg-btn' type='submit' name='login' value='Entra'>
		</fieldset>
	</form>
</div>

<?php } 
	$mysqli->close();
?>