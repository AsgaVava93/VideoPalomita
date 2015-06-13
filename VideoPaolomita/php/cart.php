<?php

if(isset($_POST['compra'])){
	$money = $_POST['money'];
	$user = $_SESSION['username'];
	$userid = $_SESSION['userid'];
	$total = $_SESSION['total'];

	$mysqli->autocommit(false);
	
	
	//Controlo si hay PC
	$query = "SELECT id_computer FROM cart WHERE cart.id_utente = '$userid' AND id_computer IS NOT NULL";
	$result = $mysqli->query($query);
	

	
	if($result->num_rows > 0){ //si hay los elimino de db
		while($row = $result->fetch_row()){
			$listID[] = $row[0];
		}
	
		$i = 0;
		
		while($i < count($listID)){
			$query = "SELECT num FROM computer WHERE computer.code = $listID[$i]";
			$resNum = $mysqli->query($query);
			$aux = $resNum->fetch_row();
			$numDisp = $aux[0];
			
			$query = "SELECT num FROM cart WHERE cart.id_computer = $listID[$i] AND cart.id_utente = '$userid'";
			$resNum = $mysqli->query($query);
			$aux = $resNum->fetch_row();
			$numCart = $aux[0];
			
		
			$query = "DELETE FROM cart WHERE id_computer = $listID[$i] AND id_utente = $userid";
			if(!($mysqli->query($query))){
				echo "Error en la query pc";
			}
			
			$toDel = $numDisp - $numCart;
			$query = "UPDATE computer SET num = $toDel WHERE code = $listID[$i]";
                        
			if(!($mysqli->query($query))){
				echo "Error en la query todel<br>";
			}
			
			$i++;
		}
	}
		
	//controlo si hay monitor
	$query = "SELECT id_monitor FROM cart WHERE cart.id_utente = '$userid' AND id_monitor IS NOT NULL";
	$result = $mysqli->query($query);	
		
	if($result->num_rows > 0){
		
		while($row = $result->fetch_row()){
			$listIDM[] = $row[0];
		}
	
		$j = 0;
		
		while($j < count($listIDM)){
			$query = "DELETE FROM cart WHERE id_monitor = $listIDM[$j] AND id_utente = $userid";
			echo "j = $j<br>";
			if(!($mysqli->query($query))){
				echo "Error en la query monitor";
			}
			$j++;
		}
	}
		
	if($money >= $total){
		$mysqli->commit();
		?>
		<script type="text/javascript">
			alert("Compra completada!");
		</script>	
		<?php
		header("refresh:0;url='?page=home'" );
	}else{
		$mysqli->rollback();
		?>
		<script type="text/javascript">
			alert("El dinero insertado no era suficiende, pon una cifra adecuada!");
		</script>
		<?php
		header("refresh:0;url='?page=cart'" );				
	}

	$mysqli->autocommit(true);			
}

else {
?>
	<div class='titolo'><h2><b>Carro</b></h2></div>
	

	<?php
		$total = 0;
		$list = array();
		if(isset($_SESSION['userid'])){
			$userid = $_SESSION['userid'];
		$query = "SELECT * FROM computer INNER JOIN cart WHERE cart.id_utente = '$userid' AND cart.id_computer = computer.code";
		$result = $mysqli->query($query);
		$nopc = 0;
		$nomon = 0;
		
		if($result->num_rows > 0){
			
			while($row = $result->fetch_row())
				$list[] = new Computer ($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10], $row[11], $row[12], $row[13]);

			$i = 0;
			?> <div class='div-cart'> <?php

			while($i < count($list)){
			?>

			<div class='box-article cart-art-box'>
							<div class='box-image-article'>
								<img class='image-article' src='<?php echo "{$list[$i]->getPhoto()}"; ?>' alt='<?php echo "{$list[$i]->getMarca()} {$list[$i]->getModelo()}";?>'>
							</div><!--
							--><div class='name-article'>
								<h3><nobr><a class='art-link' href='index.php?page=list&sc=<?php echo"{$list[$i]->getType()}";?>&art=<?php echo"{$list[$i]->getCode()}";?>' alt='<?php echo "{$list[$i]->getMarca()} {$list[$i]->getModelo()}";?>'><?php echo "{$list[$i]->getMarca()} {$list[$i]->getModelo()}";?></a></nobr></h3> <!-- marca e modelo-->
								<p><nobr> Cod. <?php echo "{$list[$i]->getCode()}"; ?> - quantit&agrave: 
							<?php	
								$cc = $list[$i]->getCode();
								$querina = "SELECT num FROM cart WHERE id_utente = $userid AND id_computer = $cc";
								$result = $mysqli->query($querina);
								$row = $result->fetch_row();
								$num = $row[0];
								echo "{$num}";
							?>
							
					<!--	echo ""-->
								</p> <!-- codice -->
							</div><!--
							--><div class='box-price-article'>
								<!-- prezzo -->
								<h4 class='price-article'><?php echo "{$list[$i]->getPrice()}"; $total = $total + ($list[$i]->getPrice() * $num);?>&#8364;</h4> <!-- prezzo -->
								<?php
									$aux = $list[$i]->getCode();
									$querina = "SELECT num FROM computer WHERE code = $aux";
									$result = $mysqli->query($querina);
									$row = $result->fetch_row();
									$numDisp = $row[0];
									if($numDisp > $num){
										?>
										<a href='?page=opcart&type=pc&sc=add&code=<?php echo "{$list[$i]->getCode()}"; ?>'><img class='img-dlt' src='assets/images/add.png' alt="Aumenta di un'unità la quantità"></a><?php
									}else{ ?>
										<img class='img-dlt' src='assets/images/add.png' alt="Suma una cuantidad">
									<?php } ?>								
								<a href='?page=opcart&type=pc&sc=del&code=<?php echo "{$list[$i]->getCode()}"; ?>'><img class='img-dlt' src='assets/images/ics.jpg' alt="Riduci di un'unità la quantità"></a>
							</div>
						</div>
					<?php	$i++;		        	
			} 
		}else{
			$nopc = 1;
		}
		
		//miro si hay mas monitores
		
		$query = "SELECT * FROM monitor INNER JOIN cart WHERE cart.id_utente = '$userid' AND cart.id_monitor = monitor.code";
		$result = $mysqli->query($query);
		$monlist = array();
		
		if($result->num_rows > 0){ //si hay los veos
			while($row = $result->fetch_row())
				$monlist[] = new Monitor ($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10], $row[11]);
			$i = 0;
			
			if($nopc){
				?> <div class='div-cart'> <?php
			}
			while($i < count($monlist)){
			?>
	
			<div class='box-article cart-art-box'>
							<div class='box-image-article'>
								<img class='image-article' src='<?php echo "{$monlist[$i]->getPhoto()}"; ?>' alt='<?php echo "{$monlist[$i]->getMarca()} {$monlist[$i]->getModelo()}";?>'>
							</div><!--
							--><div class='name-article'>
								<h3><nobr>
									<a class='art-link' href='index.php?page=list&sc=mon&art=<?php echo "{$monlist[$i]->getCode()}"; ?>' alt='<?php echo "{$monlist[$i]->getMarca()} {$monlist[$i]->getModelo()}";?>'>
										<?php echo "{$monlist[$i]->getMarca()} {$monlist[$i]->getModelo()}";?>  <!-- marca e modelo-->
									</a></nobr></h3> 
								<p id='codiceArt'> Cod. <?php echo "{$monlist[$i]->getCode()}"; ?> - cantidad:
								<?php	
									$cc = $monlist[$i]->getCode();
									$querina = "SELECT num FROM cart WHERE id_utente = $userid AND id_monitor = $cc";
									$result = $mysqli->query($querina);
									$row = $result->fetch_row();
									$num = $row[0];
									echo "{$num}";
								?>
					<!--	echo "-->
								</p> <!-- codice -->
							</div><!--
							--><div class='box-price-article'>
								<!-- prezzo -->
								<h4 class='price-article'><?php echo "{$monlist[$i]->getPrice()}"; $total = $total + $monlist[$i]->getPrice() * $num;?>&#8364;</h4> <!-- prezzo -->
								
								<?php
									$aux = $monlist[$i]->getCode();
									$querina = "SELECT num FROM monitor WHERE code = $aux";
									$result = $mysqli->query($querina);
									$row = $result->fetch_row();
									$numDisp = $row[0];
									if($numDisp > $num){
										?>
										<a href='?page=opcart&type=mon&sc=add&code=<?php echo "{$monlist[$i]->getCode()}"; ?>'><img class='img-dlt' src='assets/images/add.png' alt="Mas uno en la cuantidad"></a><?php
									}else{ ?>
										<img class='img-dlt' src='assets/images/add.png' alt="Mas uno en la cantidd">
									<?php } ?>
								<a href='?page=opcart&type=mon&sc=del&code=<?php echo "{$monlist[$i]->getCode()}"; ?>'><img class='img-dlt' src='assets/images/ics.jpg' alt="Meno uno en la cantidad"></a>
							</div>
						</div>
					<?php	$i++;		        	
			} 			
		} else{
			$nomon = 1;
			if($nopc && $nomon)
				echo "El carro es vacio<br><br>";
		}
	
		if(!$nopc || !$nomon){ ?>
			<b><h4 class='price-total'><br>Total: <?php echo "{$total}"; ?>&#8364;</h4></b>
			</div>

			<form class='move-left' action='#' method='POST'>
				<label class='money-input'>
					Inserisci i tuoi soldi <input type='number' step='any' name='money' placeholder='<?php echo "{$total}"; ?>' value='<?php echo "{$total}"; ?>'>
				</label>
				<input id='bottone' class='reg-btn acq-btn' type="submit" name="compra" value="Sigues con la compra">
				<?php $_SESSION['total'] = $total; ?>
			</form>
<?php
		}
	}
	else { echo "Para comprar nececitas registrarte en VideoPalomita.es!"; }
}
	$mysqli->close();
?>
