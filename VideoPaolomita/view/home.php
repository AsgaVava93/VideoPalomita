<div class="row"> <!-- Usata per nome articolo o titolo pagina -->
	<h2><b>NO TE PIERDAS NUESTRAS OFERTAS!!</b></h2>
</div>
			
<div> <!-- articolo-->
	<?php				
		$query = "SELECT * FROM computer WHERE code = 12";
		$result = $mysqli->query($query);
		
		while($row = $result->fetch_row())
			$pc = new Computer ($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10], $row[11], $row[12], $row[13]);

	?>
	<div class="photo-article"> <!-- foto dell'articolo -->
		<img class="img-art" src="<?php echo "{$pc->getPhoto()}"; ?>
		" alt="foto">
	</div><!--
				
	--><div class="description-article">
		<h2><?php echo "{$pc->getMarca()} {$pc->getModello()}"; ?></h2>
		<h3><?php echo "{$pc->getPrice()}"; ?> &#8364; </h3>
		<p> <br>Nuevo en los cinemas! <br></p>
	</div>
</div>
			
<section class="text-art"> <!-- descrizione articolo -->
	<p><b>Porque elegir VideoPalomita?</b></p>
	<p>
	   VideoPalomita esta a tu lado! Con mas de 3000 articulos vendidos cada mes y un rating del 99% en los mejores sitios, 
           VideoPalomita pone la calidad delante de todo. El cliente sabe todo de su articulo, anteprimas y escenas cortadas!<br>
	</p><br>
	
	<p><b>Es un sitio seguro?</b></p>
	<p>
	   Hasta ahora no hemos recebido quejas sobre la securidad de nuestros productos, asi que..  
	   Satisfechos o rembolsados!
	</p><br>

</section>
<?php
$mysqli->close();
?>