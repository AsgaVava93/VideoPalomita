<?php
if ($sc == 'peliculas' || $sc == 'nuevas') {
    $query = "SELECT * FROM pelicula WHERE code='$art'";
    $result = $mysqli->query($query);

    $row = $result->fetch_row();

    $var = new Pelicula($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10]);
    $aux = 'peliculas';
    ?>        <div class="row"> 
        <h1><?php echo "{$var->getTitulo()}"; ?></h1>
    </div>

    <div> <!-- foto e info principali -->
        <div class="photo-article"> <!-- foto dell'articolo -->
            <img class="img-art" src="<?php echo"{$var->getFoto()}" ?>" alt="<?php echo "{$var->getTitulo()}"; ?>">
        </div><!--
                                
        --><div class="description-article"> <!-- Prezzo, cod articolo, marca, disponibilit� -->
            <h2> <?php echo "{$var->getPrecio()}"; ?> &#8364; </h2>
            <p><?php echo"Cod. articulo {$var->getCode()}" ?></p>
            <?php
            ?>	
        </div><!--
        
        --><div class="cart-article"><!-- contenitore immagine carrello -->
    
        </div>
    </div><!--

    --><div class='row bott'>
    <?php echo "{$var->getSinopsis()}" ?>
           <div>	
    
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
                </table>
                    </div>
                    </div>
                   
    <?php
    
    $mysqli->close();
    ?><?php
            } else {
                $query = "SELECT * FROM personaje WHERE code='$art'";
                $result = $mysqli->query($query);
                $row = $result->fetch_row();
                $var = new Personaje($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10], $row[11], $row[12], $row[13]);
                $aux = 'personaje';
                ?>
    <div class="row"> 
        <h1><?php echo "{$var->getNombre()} {$var->getApellido()}"; ?></h1>
    </div>

    <div> <!-- foto e info principali -->
        <div class="photo-article"> <!-- foto dell'articolo -->
            <img class="img-art" src="<?php echo"{$var->getFoto()}" ?>" alt="<?php echo "{$var->getNobre()} {$var->getApellido()}"; ?>">
        </div>
    </div>
    
    
    <div>

        <div class='table-caratt'>

                <table class="art-tab">
                    <tbody>
                        <tr>
                            <td><b>Lugar y Fecha de Nacimiento</b></td>
                            <td><?php echo "{$var->getLugarNacimiento()}" ?></td>, 
                            <td><?php echo "{$var->getFechaNacimiento()}" ?></td>
                        </tr>
                        <tr>
                            <td><b>Lugar y Fecha de Muerte</b></td>
                            <td><?php echo "{$var->getLugarMuerte()}" ?></td>, 
                            <td><?php echo "{$var->getFechaMuerte()}" ?></td>
                        </tr>
                        <tr>
                            <td><b>Biografia</b></td>
                            <td class='lf'><?php echo "{$var->getBiografia()}" ?></td>
                        </tr>

                    </tbody>
                </table>

                <table class="art-tab">
                    <tbody>   
                        <tr>
                            <td><b>Genero</b></td>
                            <td class='lf'><?php echo "{$var->getGeneroPelicula()}" ?></td>
                        </tr>
                        <tr>
                            <td><b>Oscar</b></td>
                            <td class='lf'><?php echo "{$var->getOscar()}" ?></td>
                        </tr>
                        <tr>
                            <td><b>Pareja</b></td>
                            <td class='lf'><?php echo "{$var->getPareja()}" ?></td>
                        </tr>

                        <tr>
                            <td><b>Foto</b></td>

                        </tr>
                    <img class='image-article' src='<?php echo "{$var->getFoto()}"; ?>' alt='art1'>

                    <img class= 'image-article' src='<?php echo "{$var->getFoto()}"; ?>' >

                    </tbody>
                </table>
            </div>
            </div>
    <?php
    $mysqli->close();
    ?>
            <?php } ?>