<?php
	
	$sc = $_GET['sc'];				// add or del
	$code = $_GET['code'];  		// codice articolo
	$userid = $_SESSION['userid'];  // user id
	
//	if($type == 'pc'){
		if($sc == 'add'){
			// Non bisogna far mettere nel carrello pi� articoli di quelli realmente disponibili
			// $num contiene quanti articoli ci sono ora nel carrello
			$querina = "SELECT num FROM cart WHERE id_usuario = $userid AND id_pelicula = $code";
			$result = $mysqli->query($querina);
			$row = $result->fetch_row();
			$num = $row[0];
			
			// $tot contiene quanti articoli sono disponibili in magazzino
//			$querina = "SELECT num FROM pelicula WHERE pelicula.code = $code";
//			$result = $mysqli->query($querina);
//			$row = $result->fetch_row();
//			$tot = $row[0];
			
			if($num >= 1){
				$num++;
				if($tot >= $num){
					$query = "UPDATE cart SET num = $num WHERE id_usuario = $userid AND id_pelicula = $code";
					if(!($mysqli->query($query)))
						echo "Error en el insertar el articulo en el carro (update).<br><br>";
					else{
						//visualizzo gli articoli inseriti
						header("refresh:0;url='?page=cart'" );
					}					
				}	
			} else{
				$query = "INSERT INTO cart(id_pelicula, id_usuario, num) VALUES ($code, $userid, 1)";
				if(!($mysqli->query($query)))
					echo "Error en el insertar el articulo en el carro (add).<br><br>";
				else{
					//visualizzo gli articoli inseriti
					header("refresh:0;url='?page=cart'" );
				}			
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
//	}else {
//		if($sc == 'add'){
//			$querina = "SELECT num FROM cart WHERE id_usuario = $userid AND id_monitor = $code";
//			$result = $mysqli->query($querina);
//			$row = $result->fetch_row();
//			$num = $row[0];		
//			
//			if($num >= 1){
//				$num++;
//				$query = "UPDATE cart SET num = $num WHERE id_usuario = $userid AND id_monitor = $code";
//				if(!($mysqli->query($query)))
//					echo "Error en el insertar el articulo en el carro. (update)<br><br>";
//				else{
//					//visualizzo gli articoli inseriti
//					header("refresh:0;url='?page=cart'" );
//				}					
//			} else {
//				$query = "INSERT INTO cart(id_monitor, id_usuario, num) VALUES ($code, $userid, 1)";
//				if(!($mysqli->query($query)))
//					echo "Error en el insertar el articulo en el carro. (add)<br><br>";	
//				else{
//					//visualizzo gli articoli inseriti
//					header("refresh:0;url='?page=cart'" );
//				}
//			}
//		}else{ //del
//			$query = "SELECT num FROM cart WHERE id_usuario = $userid AND id_monitor = $code";
//			$result = $mysqli->query($query);
//			$row = $result->fetch_row();
//			$num = $row[0];			
//			
//			if($num > 1){
//				$num--;
//				$query = "UPDATE cart SET num = $num WHERE id_usuario = $userid AND id_monitor = $code";
//				if(!($mysqli->query($query)))
//					echo "Error en el insertar el articulo en el carro. (update)<br><br>";
//				else
//					//visualizzo gli articoli inseriti
//					header("refresh:0;url='?page=cart'" );	
//			}else{
//				$query = "DELETE FROM cart WHERE id_monitor = $code AND id_usuario = $userid";
//				if(!($mysqli->query($query)))
//					echo "Error en el eliminar el articulo en el carro.<br><br>";
//				else
//					header("refresh:0;url='?page=cart'" );
//			}	
//		}	
//	}
	
	$mysqli->close();
?>