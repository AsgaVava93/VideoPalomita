<?php
	
	$sc = $_GET['sc'];				// add or del
	$code = $_GET['code'];  		// codice articolo
	$userid = $_SESSION['userid'];  // user id

//	if($type == 'pc'){
		if($sc == 'add'){
				$query = "INSERT INTO cart(id_pelicula, id_usuario) VALUES ($code, $userid)";
				if(!($mysqli->query($query)))
					echo "Error en el insertar el articulo en el carro, puede que ya exista.<br><br>";
				else{
					//visualizzo gli articoli inseriti
					header("refresh:0;url='?page=cart'" );
				}
		}else{ //del 
			$query = "SELECT num FROM cart WHERE id_usuario = $userid AND id_pelicula = $code";
			$result = $mysqli->query($query);
			$row = $result->fetch_row();
			$num = $row[0];			
			
			if($num > 1){
				$num--;
				$query = "UPDATE cart SET num = $num WHERE id_usuario = $userid AND id_pelicula = $code";
				if(!($mysqli->query($query)))
					echo "Error en el insertar el articulo en el carro (update).<br><br>";
				else
					//visualizzo gli articoli inseriti
					header("refresh:0;url='?page=cart'" );	
			}else{
				$query = "DELETE FROM cart WHERE id_pelicula = $code AND id_usuario = $userid";
				if(!($mysqli->query($query)))
					echo "Error en el insertar el articulo en el carro.<br><br>";
				else
					header("refresh:0;url='?page=cart'" );
			}
		}

	
	$mysqli->close();
?>