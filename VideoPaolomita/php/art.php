<?php
	
	if($sc == 'mon'){
		$query = "SELECT * FROM monitor WHERE code='$art' ORDER BY code ASC";
		$result = $mysqli->query($query);
   
		$row = $result->fetch_row();
	   	$var = new Monitor ($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10], $row[11]);
		
		$aux = 'mon';
	}
	else{
            
		$query = "SELECT * FROM computer WHERE code='$art'";
		$result = $mysqli->query($query);
		
		$row = $result->fetch_row();
		
		$var = new Computer ($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10], $row[11], $row[12], $row[13]);
		$aux = 'pc';
	}      
?>
	<div class="row"> <!-- Usata per nome articolo o titolo pagina -->
		<h1><?php echo "{$var->getMarca()} {$var->getModelo()}"; ?></h1>
	</div>
				
	<div> <!-- foto e info principali -->
		<div class="photo-article"> <!-- foto dell'articolo -->
			<img class="img-art" src="<?php echo"{$var->getPhoto()}" ?>" alt="<?php echo "{$var->getMarca()} {$var->getModelo()}"; ?>">
		</div><!--
					
		--><div class="description-article"> <!-- Prezzo, cod articolo, marca, disponibilità -->
			<h2> <?php echo "{$var->getPrice()}"; ?> &#8364; </h2>
			<p><?php echo"Cod. articulo {$var->getCode()}" ?></p>
			<?php	
				if ($var->getNum() > 0)
		    		echo "<p><font color='#99f614'><nobr>DISPONIBILE</nobr></font></p>";
		    	else
		    		echo "<p><font color='#ff3636'><nobr>NON DISPONIBILE</nobr></font></p>"; 
			?>	
		</div><!--
		
		--><div class="cart-article"><!-- contenitore immagine carrello -->
		<?php
			if($var->getNum() > 0){
				if(isset($_SESSION['username'])) {
					?> <a href='?page=opcart&type=<?php echo "$aux"; ?>&sc=add&code=<?php echo "{$var->getCode()}"; ?>'> <?php
				}
				else{ 
					?><a href='?page=err&code=1'><?php
				}
				?> <img class='cart-art-image' src='assets/images/cart.jpg' alt='Añades al carro'></a> <?php
			} else {
				?><img class='cart-art-image' src='assets/images/cart.jpg' alt='Añades al carro'><?php
			} ?>
		</div>
	</div><!--
	
	--><div class='row bott'>
		<?php echo "{$var->getDescription()}" ?>
	</div><!--
	--><div class='table-caratt'>
		<div>	
		<?php
			if($sc == 'mon'){ //visualizzo gli articoli con le caratteristiche dei monitor ?>
					<!--
						<b>Marca</b><div class='art-c'><?php// echo "{$var->getMarca()}" ?></div><br>
						<b>Modelo</b><div class='art-c'><?php //echo "{$var->getModelo()}" ?></div><br>
						<b>Risoluzione</b><div class='art-c'><?php //echo "{$var->getRisoluzione()}" ?></div><br>
						<b>Formato</b><div class='art-c'><?php //echo "{$var->getFormato()}" ?></div><br>
						<b>3D</b><div class='art-c'><?php //echo "{$var->getTreD()}" ?></div><br>
						<b>Altoparlanti</b><div class='art-c'><?php// echo "{$var->getAltoparlanti()}" ?></div><br>
					-->
					<table class="art-tab">
						<tbody>
							<tr>
								<td><b>Marca</b></td>
								<td class='lf'><?php echo "{$var->getMarca()}" ?></td>
							</tr>
							<tr>
								<td><b>Modelo</b></td>
								<td class='lf'><?php echo "{$var->getModelo()}" ?></td>
							</tr>
							<tr> //CAMBIAR RESPECTO DATABASE - vale
								<td><b>Pollici</b></td>
								<td class='lf'><?php echo "{$var->getPollici()}''" ?></td>
							</tr>							
							<tr>
								<td><b>Risoluzione</b></td>
								<td class='lf'><?php echo "{$var->getRisoluzione()}" ?></td>
							</tr>
							<tr>
								<td><b>Formato</b></td>
								<td class='lf'><?php echo "{$var->getFormato()}" ?></td>
							</tr>
							<tr>
								<td><b>3D</b></td>
								<td class='lf'><?php echo "{$var->getTreD()}" ?></td>
							</tr>
							<tr>
								<td><b>Altoparlanti</b></td>
								<td class='lf'><?php echo "{$var->getAltoparlanti()}" ?></td>
							</tr>
						</tbody>
					</table>
					
	<?php }
		else { 	    	  //caratteristiche computer ?>
				<table class="art-tab">
					<tbody>
						<tr>
							<td><b>Marca</b></td>
							<td class='lf'><?php echo "{$var->getMarca()}" ?></td>
						</tr>
						<tr>
							<td><b>Modelo</b></td>
							<td class='lf'><?php echo "{$var->getModelo()}" ?></td>
						</tr>
						<tr>
							<td><b>Sistema Operativo</b></td>
							<td class='lf'><?php echo "{$var->getOs()}" ?></td>
						</tr>							
						<?php if($var->getMonitor()) { ?>
						<tr>
							<td><b>Monitor</b></td>
							<td class='lf'><?php echo "{$var->getMonitor()}''" ?></td>
						</tr> <?php } ?>
						<tr>
							<td><b>CPU</b></td>
							<td class='lf'><?php echo "{$var->getCPU()}" ?></td>
						</tr>
						<tr>
							<td><b>Scheda video</b></td>
							<td class='lf'><?php echo "{$var->getVideo()}" ?></td>
						</tr>
						<tr>
							<td><b>Ram</b></td>
							<td class='lf'><?php echo "{$var->getRam()} GB" ?></td>
						</tr>
						<tr>
							<td><b>Hard Disk</b></td>
							<td class='lf'><?php echo "{$var->getHd()} GB" ?></td>
						</tr>
												<tr>
							<td><b>Memory Card Reader</b></td>
							<td class='lf'>
							<?php 
								if($var->getMemoryCard())  
									echo "Si";
								else
									echo "No";
							?>
							</td>
						</tr>
					</tbody>
				</table>
		<?php }
			$mysqli->close();
	?>
	</div>
</div>