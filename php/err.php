<br>
<?php
	switch($code){
		case 1:
			echo "Para a�adir articulos en el carro necesitas registrarte antes!<br><br>";
			echo "Te llevar� a la pagina de registracion en 5 segundos...";
			header("refresh:5;url='?page=signup'" );
			break;
	}
?>