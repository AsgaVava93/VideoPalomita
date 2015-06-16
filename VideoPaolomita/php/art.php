<?php
	
	if($sc == 'mon'){
		$query = "SELECT * FROM monitor WHERE code='$art' ORDER BY code ASC";
		$result = $mysqli->query($query);
   
		$row = $result->fetch_row();
	   	$var = new Monitor ($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10], $row[11]);
		
		$aux = 'mon';
	}
	else{
            
		$query = "SELECT * FROM pelicula WHERE code='$art'";
		$result = $mysqli->query($query);
		
		$row = $result->fetch_row();
		
		$var = new Pelicula ($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10]);
		$aux = 'pc';
	}      
?>
	<div class="row"> <!-- Usata per nome articolo o titolo pagina -->
		<h1><?php echo "{$var->getTitulo()} {$var->getDirector()}"; ?></h1>
	</div>
				
	<div> <!-- foto e info principali -->
		<div class="photo-article"> <!-- foto dell'articolo -->
			<img class="img-art" src="<?php echo"{$var->getFoto()}" ?>" alt="<?php echo "{$var->getTitulo()} {$var->getDirector()}"; ?>">
		</div><!--
					
		--><div class="description-article"> <!-- Prezzo, cod articolo, marca, disponibilit� -->
			<h2> <?php echo "{$var->getPrecio()}"; ?> &#8364; </h2>
			<p><?php echo"Cod. articulo {$var->getCode()}" ?></p>
			<?php	
				
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
				?> <img class='cart-art-image' src='assets/images/cart.jpg' alt='A�ades al carro'></a> <?php
			} else {
				?><img class='cart-art-image' src='assets/images/cart.jpg' alt='A�ades al carro'><?php
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
						<b>Titulo</b><div class='art-c'><?php// echo "{$var->getTitulo()}" ?></div><br>
						<b>Director</b><div class='art-c'><?php //echo "{$var->getDirector()}" ?></div><br>
						<b>Risoluzione</b><div class='art-c'><?php //echo "{$var->getRisoluzione()}" ?></div><br>
						<b>Formato</b><div class='art-c'><?php //echo "{$var->getFormato()}" ?></div><br>
						<b>3D</b><div class='art-c'><?php //echo "{$var->getTreD()}" ?></div><br>
						<b>Altoparlanti</b><div class='art-c'><?php// echo "{$var->getAltoparlanti()}" ?></div><br>
					-->
					<table class="art-tab">
						<tbody>
							<tr>
								<td><b>Titulo</b></td>
								<td class='lf'><?php echo "{$var->getTitulo()}" ?></td>
							</tr>
							<tr>
								<td><b>Director</b></td>
								<td class='lf'><?php echo "{$var->getDirector()}" ?></td>
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
		else { 	    	  //caratteristiche pelicula ?>
				<table class="art-tab">
					<tbody>
						<tr>
							<td><b>Titulo</b></td>
							<td class='lf'><?php echo "{$var->getTitulo()}" ?></td>
						</tr>
						<tr>
							<td><b>Director</b></td>
							<td class='lf'><?php echo "{$var->getDirector()}" ?></td>
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