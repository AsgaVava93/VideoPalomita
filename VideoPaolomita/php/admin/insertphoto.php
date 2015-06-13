<?php 

if(isset($_POST['submit'])){

	//controlo en las dimensiones del fichero
	if ($_FILES["file"]["size"] < 1024000){
		//controlo errores en el uploading
		if ($_FILES["file"]["error"] > 0){
		echo "Error en el upload. Codigo error: " . $_FILES["file"]["error"]."
		";
		}
		else{
			$nombre_img = $_FILES["file"] ['name']; 
			$img_split = explode(".",$nombre_img);
			$estensione = array_pop($img_split);
			echo "<b>Nombre File: </b>" . $_FILES["file"]["name"];
			echo "<br>";
			echo "<b>Extencion: </b>{$extencion}";
			echo "<br>";
			echo "<b>Tipo File: </b>" . $_FILES["file"]["type"];
			echo "<br>";
			echo "<b>Dimension [byte]: </b>" . $_FILES["file"]["size"];
			echo "<br>";
			
			
			//controlo si el fichero ya existe en el server
			if (file_exists("assets/images/" . $_FILES["file"]["name"])){
				echo "El fichero " . $_FILES["file"]["name"] . " ya existe en el server";
			}
			elseif($extencion == 'jpg' || $extencion == 'png' || $extencion == 'gif'){
                            
				move_uploaded_file($_FILES["file"]["tmp_name"], "assets/images/" . $_FILES["file"]["name"]);
				echo "File cargado en: " . "assets/images/" . $_FILES["file"]["name"];
			}
			else{
				echo "<br>Error: Carga un fichero con extencion .jpg, .png o .gif<br";
			}
		}
	}
	else{
		echo "File demasiado grande!!";
	}
} else {
?>

<div class='div-admin'>
	<form action="?page=insertphoto" enctype="multipart/form-data" method="post">
		<input name="MAX_FILE_SIZE" type="hidden" value="1024000" />
		Fichero da cargar:
		<input id="file" name="file" type="file" />
		<input class='gen-btn' name="submit" type="submit" value="Carga" />
	</form>
</div>
<?php } ?>