<?php
	
	if($sc == 'peliculas' || $sc == 'nuevas'){
		$query = "SELECT * FROM pelicula WHERE code='$art'";
		$result = $mysqli->query($query);
		
		$row = $result->fetch_row();
		
		$var = new Pelicula ($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10]);
		$aux = 'peliculas';
        ?>        <div class="row"> 
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
			 ?>
		</div>
	</div><!--
	
	--><div class='row bott'>
		<?php echo "{$var->getSinopsis()}" ?>
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
				<tr> 
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
					<td><b>Actores</b></td>
					<td class='lf'><?php echo "{$var->getActores()}" ?></td>
				</tr>	
                                <tr>
                                        <td><b>Duracion</b></td>
					<td class='lf'><?php echo "{$var->getDuracion()}" ?></td>
				</tr>	
                                <tr>
					<td><b>Año</b></td>
					<td class='lf'><?php echo "{$var->getAnio()}" ?></td>
				</tr>
                                <tr>
					<td><b>Genero</b></td>
					<td class='lf'><?php echo "{$var->getGenero()}" ?></td>
				</tr>
                                <tr>
					<td><b>Protagonista</b></td>
					<td class='lf'><?php echo "{$var->getProtagonista()}" ?></td>
				</tr>
                                <tr>
					<td><b>Precio</b></td>
					<td class='lf'><?php echo "{$var->getPrecio()}" ?></td>
				</tr>
                                <tr>
					<td><b>Foto</b></td>
	
				</tr>
                                <img class='image-article' src='<?php echo "{$var->getFoto()}"; ?>' alt='art1'>
                                              
				<img class= 'image-article' src='<?php echo "{$var->getFoto()}"; ?>' >
						
                	</tbody>
		</table>
		<?php }
			$mysqli->close();
	?>
	</div>
</div><?php
	}   
        else{
                $query = "SELECT * FROM personaje WHERE code='$art'";
		$result = $mysqli->query($query);
		$row = $result->fetch_row();
                $var = new Personaje ($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10], $row[11], $row[12], $row[13]);
                $aux = 'personaje'; ?>
        <div class="row"> 
		<h1><?php echo "{$var->getNombre()} {$var->getApellido()}"; ?></h1>
	</div>
				
	<div> <!-- foto e info principali -->
		<div class="photo-article"> <!-- foto dell'articolo -->
			<img class="img-art" src="<?php echo"{$var->getFoto()}" ?>" alt="<?php echo "{$var->getNobre()} {$var->getApellido()}"; ?>">
		</div><!--
					
		--><div class="description-article"> <!-- Prezzo, cod articolo, marca, disponibilit� -->
			<h2> <?php echo "{$var->getPrecio()}"; ?> &#8364; </h2>
			<p><?php echo"Cod. articulo {$var->getCode()}" ?></p>
			<?php	
				
			?>	
		</div><!--
		
		--><div class="cart-article"><!-- contenitore immagine carrello -->
		<?php
			 ?>
		</div>
	</div><!--
	
	--><div class='row bott'>
		<?php echo "{$var->getSinopsis()}" ?>
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
				<tr> 
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
					<td><b>Actores</b></td>
					<td class='lf'><?php echo "{$var->getActores()}" ?></td>
				</tr>	
                                <tr>
                                        <td><b>Duracion</b></td>
					<td class='lf'><?php echo "{$var->getDuracion()}" ?></td>
				</tr>	
                                <tr>
					<td><b>Año</b></td>
					<td class='lf'><?php echo "{$var->getAnio()}" ?></td>
				</tr>
                                <tr>
					<td><b>Genero</b></td>
					<td class='lf'><?php echo "{$var->getGenero()}" ?></td>
				</tr>
                                <tr>
					<td><b>Protagonista</b></td>
					<td class='lf'><?php echo "{$var->getProtagonista()}" ?></td>
				</tr>
                                <tr>
					<td><b>Precio</b></td>
					<td class='lf'><?php echo "{$var->getPrecio()}" ?></td>
				</tr>
                                <tr>
					<td><b>Foto</b></td>
	
				</tr>
                                <img class='image-article' src='<?php echo "{$var->getFoto()}"; ?>' alt='art1'>
                                              
				<img class= 'image-article' src='<?php echo "{$var->getFoto()}"; ?>' >
						
                	</tbody>
		</table>
		<?php }
			$mysqli->close();
	?>
	</div>
</div>
        <?php
        }
?>
