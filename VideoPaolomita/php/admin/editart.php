<?php

	if(isset($_POST['actualiza'])){
		$type = $_POST['type'];
		$marca = $_POST['marca'];
		$modelo = $_POST['modelo'];
		$numero = $_POST['num'];
		
		$query = "SELECT * FROM $type WHERE marca LIKE '$marca' AND modelo LIKE '$modelo';";
		
		
		$result = $mysqli->query($query);
		
		if(!$result){
			echo "Error en la query de selecion.<br><br>";
		}elseif($result->num_rows > 0){
				
			$query = "UPDATE $type SET num=$numero WHERE marca LIKE '$marca' AND modelo LIKE '$modelo' ";	
			$result = $mysqli->query($query);
			
			if(!$result)
				echo "Error en la actualizacion del articulo.<br>";
			else
				echo "El {$type} {$marca} {$modelo} ha sido actualizado.<br><br>";
		}
		else
			echo "El {$type} {$marca} {$modelo} no existe en el database.<br><br>";

		
	}
else {
?>
<div class='div-admin'>
	<form class="reg-form" action="?page=editart" method='POST'>
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
				Modelo
				<input type="text" name="modelo" placeholder="Modelo" maxlength='30' title="Inserta el modelo" required>
			</label>
			<br>
			
			<label>
				Numero
				<input type="number" name="num" placeholder="0" value='0' maxlength='4' title="Inserta el numero" required>
			</label>
			<br>			
		</fieldset>
		<input class='reg-btn' type="submit" name="actualiza" value="Actualiza">
	</form>
</div>
<?php } ?>