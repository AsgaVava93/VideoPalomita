<?php
	
	$list = array();
	$query = "SELECT * FROM pelicula ORDER BY code ASC";
	$result = $mysqli->query($query);
		        
	$i=0;
		        
	while($row = $result->fetch_row()){
	   	$list[$i] = new Pelicula ($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8]);
		        
	?>
		        
		            <div class='box-article'>
		    			<div class='box-image-article'>
		    				<img class='image-article' src='<?php echo "{$list[$i]->getPhoto()}"; ?>' alt='art1'>
		    			</div><!--
1		    			--><div class='name-article'>
		    				<h3><nobr><a class='art-link' href='index.php?page=pelicula&art=<?php echo"{$list[$i]->getCode()}";?>' alt='<?php echo "{$list[$i]->getMarca()} {$list[$i]->getModelo()}";?>'><?php echo "{$list[$i]->getMarca()} {$list[$i]->getModelo()}";?></a></nobr></h3> <!-- marca e modelo-->
		    				<p> Cod. <?php echo "{$list[$i]->getCode()}"; ?>
		    			
		    	<!--	echo "-->
		    				</p> <!-- codice -->
		    			</div><!--
		    			--><div class='box-price-article'>
		    				<!-- prezzo -->
		    				<h4 class='price-article'><?php echo "{$list[$i]->getPrecio()}";?>&#8364;</h4> <!-- prezzo -->
		    				<!-- cart image -->
		    				<img class='cart-image' src='assets/images/cart.jpg' alt='Agrega al carro'>
		    			</div>
		    		</div>
		    	<?php	$i++;		        	
		        } 
	$mysqli->close();			
?>
			