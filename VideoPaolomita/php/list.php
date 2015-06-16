<?php
	
	include('php/Pelicula.php');
        
	$list = array();

	$query = "SELECT * FROM pelicula";
	$result = $mysqli->query($query);
	while($row = $result->fetch_row())
	$list[] = new Pelicula ($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10]);
		
	$i=0;
	while($i < count($list)){
		        
	?>
		        
		            <div class='box-article box-art-w'>
		    			<div class='box-image-article'>
		    				<img class='image-article' src='<?php echo "{$list[$i]->getPhoto()}"; ?>' alt='<?php echo "{$list[$i]->getMarca()} {$list[$i]->getModelos()}";?>'>
		    			</div><!--
1		    			--><div class='name-article'>
		    				<h3><nobr><a class='art-link' href='index.php?page=list&sc=<?php echo"{$sc}";?>&art=<?php echo"{$list[$i]->getCode()}";?>' alt='<?php echo "{$list[$i]->getMarca()} {$list[$i]->getModelos()}";?>'><?php echo "{$list[$i]->getMarca()} {$list[$i]->getModelos()}";?></a></nobr></h3> <!-- marca e modelos-->
		    				<p> Cod. <?php echo "{$list[$i]->getCode()}"; ?>
		    			<?php	if ($list[$i]->getNum() > 0)
									echo " - <font color='#99f614'><nobr>DISPONIBILE</nobr></font></p>";
								else
									echo " - <font color='#ff3636'><nobr>NON DISPONIBILE</nobr></font></p>"; ?>
		    	<!--	echo "-->
		    				</p> <!-- codice -->
		    			</div><!--
		    			--><div class='box-price-article'>
		    				<!-- prezzo -->
		    				<h4 class='price-article'><?php echo "{$list[$i]->getPrice()}";?>&#8364;</h4> <!-- prezzo -->
		    				<!-- cart image -->
							<?php
								if($list[$i]->getNum() > 0){
									if(isset($_SESSION['username'])) {
										?> <a href='?page=opcart&type=<?php echo"{$type}"; ?>&sc=add&code=<?php echo "{$list[$i]->getCode()}"; ?>'> <?php
									}else{ ?>
										<a href='?page=err&code=1'> <?php
									}
								}	
								else 
									?><img class='cart-image' src='assets/images/cart.jpg' alt='A�ades al carro'></a>
		    			</div>
		    		</div>
		    	<?php	$i++;		        	
		        } 
	$mysqli->close();
?>