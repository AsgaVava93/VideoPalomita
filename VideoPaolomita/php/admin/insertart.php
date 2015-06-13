<?php 

	$type = $_GET['type'];

	if($type == 'pc'){

		$marca = $_POST['marca'];
		$modelo = $_POST['modelo'];
		$os = $_POST['os']; //AQUI HAY QUE MODIFICAR, PERO NO SE COMO, DEPENDE DE LA BASE DE DATOS - vale
		$monitor = $_POST['monitor'];
		$cpu = $_POST['cpu'];
		$video = $_POST['video'];
		$ram = $_POST['ram'];
		$hd = $_POST['hd'];
		$memoryCard = $_POST['memoryCard'];
		$price = $_POST['price'];
		$num = $_POST['num'];
		$photo = "assets/images/" . $_POST['photo'];
			
		//verificare se esiste la foto e l'articolo	
		
		$query = "SELECT * FROM computer WHERE photo = '$photo'";
		$result = $mysqli->query($query);
		
		$query = "SELECT * FROM computer WHERE marca LIKE '$marca' AND modelo LIKE '$modelo'";
		
		$result2 = $mysqli->query($query);
		
		if($result->num_rows > 0){ //la foto è stata già usata per un altro articolo
			echo "La foto ha ya sido ocupada por otro articulo! <br>";
		}elseif($result2->num_rows > 0){
			echo "Articulo ya existente en el database!<br>";
		}elseif(!file_exists($photo)){
			echo "El fichero seleccionado como foto no existe en el database.<br>";
		}else{
			$query = "INSERT INTO computer(marca, modelo, os, monitor, cpu, video, ram, hd, memoryCard, price, num, photo) VALUES ('$marca', '$modelo', '$os', '$monitor', '$cpu', '$video', '$ram', '$hd', '$memoryCard', '$price', '$num', '$photo');";
			$result = $mysqli->query($query);
			
			if(!$result)
				echo "Error en la query!";
			else //se carica fa vedere il form da compilare
				echo "<br><br>Articulo cargado!<br><br>";
		}
	} else {
	
		$marca = $_POST['marca'];
		$modelo = $_POST['modelo'];
		$risoluzione = $_POST['risoluzione'];
		$formato = $_POST['formato'];
		$tred = $_POST['tred'];
		$altoparlanti = $_POST['altoparlanti'];
		$num = $_POST['num'];
		$price = $_POST['price'];
		$photo = "assets/images/" . $_POST['photo'];

		//verificare se esiste la foto e l'articolo	
	
		$query = "SELECT * FROM monitor WHERE photo = '$photo'";
		$result = $mysqli->query($query);
		
		$query = "SELECT * FROM computer WHERE marca LIKE '$marca' AND modelo LIKE '$modelo'";
		
		$result2 = $mysqli->query($query);
		
		if($result->num_rows > 0){ //la foto è stata già usata per un altro articolo
			echo "La foto ya ha sido ocupada por otro articulo! <br>";
		}elseif($result->num_rows > 0){
			echo "Articulo ya existente en el database!<br>";
		}else{
		
			$query = "INSERT INTO monitor(marca, modelo, risoluzione, formato, tred, altoparlanti, num, price, photo) VALUES ('$marca', '$modelo', '$risoluzione', '$formato', '$tred', '$altoparlanti', '$num', '$price', '$photo');";
			$result = $mysqli->query($query);
			
			if(!$result)
				echo "Error en la query!";
			else
				echo "<br><br>Articulo cargato!<br><br>";
		
		
		}
		
	
	}