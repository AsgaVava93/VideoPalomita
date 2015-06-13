<?php

	if(isset($_POST['delete'])){
		$type = $_POST['type'];
		$marca = $_POST['marca'];
		$modelo = $_POST['modelo'];
		
		$query = "SELECT * FROM $type WHERE marca LIKE '$marca' AND modelo LIKE '$modelo';";
		
		$result = $mysqli->query($query);
		
		if(!$result){
			echo "Error en la query de selecion.<br><br>";
		}elseif($result->num_rows > 0){
				
			$query = "DELETE FROM $type WHERE marca LIKE '$marca' AND modelo LIKE '$modelo';";
			$result = $mysqli->query($query);
			
			if(!$result)
				echo "Error en la eliminacion del articulo.<br>";
			else
				echo "El {$type} {$marca} {$modelo} ha sido borrado del database.<br><br>";
		}
		else
			echo "El {$type} {$marca} {$modelo} no existe en el database.<br><br>";

		
	}
else {
?>
<div class='div-admin'>
	<form class="reg-form" action="?page=deleteart" method='POST'>
		<fieldset class="register-group">
			<label>
				Tipo pelicula
				<input type="text" name="type" placeholder="pelicula" maxlength='8' title="Inserta el tipo de articulo" required>
			</label><br>
			<label>
				Marca
				<input type="text" name="marca" placeholder="Marca" maxlength='30' title="Inserta la marca" required>
			</label>
			<br>
			
			<label>
				Modello
				<input type="text" name="modelo" placeholder="Modelo" maxlength='30' title="Inserta el modelo" required>
			</label>
			<br>
		</fieldset>
		<input class='reg-btn' type="submit" name="delete" value="Borrar">
	</form>
</div>
<?php } ?>