<?php 

if ($_FILES["file"]["size"] < 1024000){
    
    
	if ($_FILES["file"]["error"] > 0){
	echo "Error en el upload. Codigo error: " . $_FILES["file"]["error"]."
	";
	}
	else{		
		$nombre_img = $_FILES["file"] ['name']; 
		$img_split = explode(".",$nombre_img);
		$extencion = array_pop($img_split);
		echo "<b>Nombre File: </b>" . $_FILES["file"]["name"];
		echo "<br>";
		echo "<b>Extencion: </b>{$extencion}";
		echo "<br>";
		echo "<b>Tipo File: </b>" . $_FILES["file"]["type"];
		echo "<br>";
		echo "<b>Dimension [byte]: </b>" . $_FILES["file"]["size"];
		echo "<br>";
		
		
		if (file_exists("assets/images/" . $_FILES["file"]["name"])){
			echo "El fichero " . $_FILES["file"]["name"] . " ya existe en el server";
		}
		elseif($extencion == 'jpg' || $extencion == 'png' || $extencion == 'gif'){
                    
			move_uploaded_file($_FILES["file"]["tmp_name"], "assets/images/" . $_FILES["file"]["name"]);
			echo "Fichero cargado en:  " . "assets/images/" . $_FILES["file"]["name"];
		}
		else{
			echo "<br>Error: Carga un file de extencion .jpg, .png o .gif<br";
		}
	}
}
else{
	echo "File demasiado grande!!";
}
?>