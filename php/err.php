<br>
<?php
	switch($code){
		case 1:
			echo "Para añadir articulos en el carro necesitas registrarte antes!<br><br>";
			echo "Te llevarè a la pagina de registracion en 5 segundos...";
			header("refresh:5;url='?page=signup'" );
			break;
	}
?>