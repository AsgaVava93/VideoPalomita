<?php 

if ($_FILES["file"]["size"] < 1024000){
    
	if ($_FILES["file"]["error"] > 0){
	echo "Codigo Error: " . $_FILES["file"]["error"]."
	";
	}
	else{
            
		
		$nombre_img = $_FILES[$img_up_name] ['name']; // controlla il nombre dell'immagine
		$img_split = explode(".",$nombre_img); // verifica il tipo di extencion del file, controllando
		$extencion = array_pop($img_split); // le ultime letere dopo l'ultimo punto
		echo "Nombre File: " . $_FILES["file"]["name"]."
		";
		echo "Extencion: {$extencion}";
		//il mime-type
		echo "Tipo File: " . $_FILES["file"]["type"] . "
		";
		//la dimensione in byte
		echo "Dimension [byte]: " . $_FILES["file"]["size"] . "
		";
		//il nombre del file temporaneo
		echo "Nombre Temporaneo: " . $_FILES["file"]["tmp_name"] . "
		";
		//controllo se il file esiste già sul server
		if (file_exists("upload/" . $_FILES["file"]["name"])){
			echo "El file " . $_FILES["file"]["name"] . " ya existe en el server";
		}
		else{
			//sposto il file caricato dalla cartella temporanea alla destinazione finale
			move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
			echo "File cargado en: " . "upload/" . $_FILES["file"]["name"];
		}
	}
}
else{
	echo "File demasiado grande!!";
}
?>