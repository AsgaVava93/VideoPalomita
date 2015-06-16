<?php
if (isset($_POST['compra'])) {
    $money = $_POST['money'];
    $user = $_SESSION['username'];
    $userid = $_SESSION['userid'];
    $total = $_SESSION['total'];

    $mysqli->autocommit(false);

    //echo "Soldi inseriti: $money <br>";
    //echo "Soldi richiesti: $total <br>";
    //Controllo se ci sono PC
    //$query = "SELECT * FROM pelicula INNER JOIN cart WHERE cart.id_usuario = '$userid' AND cart.id_pelicula = pelicula.code";
    $query = "SELECT id_pelicula FROM cart WHERE cart.id_usuario = '$userid' AND id_pelicula IS NOT NULL";
    $result = $mysqli->query($query);



    if ($result->num_rows > 0) { //se ci sono li elimino dal DB 
        while ($row = $result->fetch_row()) {
            $listID[] = $row[0];
        }

        $i = 0;

        while ($i < count($listID)) {
            $query = "SELECT COUNT(id_pelicula) FROM cart WHERE cart.id_usuario ='$userid'";
            $resNum = $mysqli->query($query);
            $aux = $resNum->fetch_row();
            $numCart = $aux[0];


            $query = "DELETE FROM cart WHERE id_pelicula = $listID[$i] AND id_usuario = $userid";
            //echo "i = $i<br>";
            if (!($mysqli->query($query))) {
                echo "Errore nella query pc";
            }

            $i++;
        }
    }


    //controllo se i soldi inseriti non bastavano per acquistare, se no rollback
    if ($money >= $total) {
        $mysqli->commit();
        ?>
        <script type="text/javascript">
            alert("Compra echa!");
        </script>	
        <?php
        header("refresh:0;url='?page=home'");
    } else {
        $mysqli->rollback();
        ?>
        <script type="text/javascript">
            alert("El dinero insertado no es suficiente por la compra!");
        </script>
        <?php
        header("refresh:0;url='?page=cart'");
    }

    // riabilito autocommit
    $mysqli->autocommit(true);
} else {
    ?>
    <div class='titolo'><h2><b>Carro</b></h2></div>


    <?php
    $total = 0;
    $list = array();
    if (isset($_SESSION['userid'])) {
        $userid = $_SESSION['userid'];
        $query = "SELECT * FROM pelicula INNER JOIN cart WHERE cart.id_usuario = '$userid' AND cart.id_pelicula = pelicula.code";
        $result = $mysqli->query($query);
        $nopeli = 0;

        if ($result->num_rows > 0) { //se ci sono pelicula li visualizzo
            while ($row = $result->fetch_row())
                $list[] = new Pelicula($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10]);

            $i = 0;
            ?> <div class='div-cart'> <?php
            while ($i < count($list)) {
                ?>

                    <div class='box-article cart-art-box'>
                        <div class='box-image-article'>
                            <img class='image-article' src='<?php echo "{$list[$i]->getFoto()}"; ?>' alt='<?php echo "{$list[$i]->getTitulo()}"; ?>'>
                        </div><!--
                        --><div class='name-article'>
                            <h3><nobr><a class='art-link' href='index.php?page=list&&art=<?php echo"{$list[$i]->getCode()}"; ?>' alt='<?php echo "{$list[$i]->getTitulo()}"; ?>'><?php echo "{$list[$i]->getTitulo()}"; ?></a></nobr></h3> <!-- marca e modello-->
                            <p><nobr> Cod. <?php echo "{$list[$i]->getCode()}"; ?>

                                <!--	echo ""-->
                                </p> <!-- codice -->
                        </div><!--
                        --><div class='box-price-article'>
                            <!-- prezzo -->
                            <h4 class='price-article'><?php echo "{$list[$i]->getPrecio()}";
                $total = $total + ($list[$i]->getPrecio()); ?>&#8364;</h4> <!-- prezzo -->


                            <a href='?page=opcart&type=pc&sc=del&code=<?php echo "{$list[$i]->getCode()}"; ?>'><img class='img-dlt' src='assets/images/ics.jpg' alt="Riduci di un'unità la quantità"></a>
                        </div>
                    </div>
                <?php
                $i++;
            }
        } else {
            $nopeli = 1;
        }
        ?>	
            <?php
            if ($nopeli)
                echo "El carro esta vacio.<br><br>";


            if (!$nopeli) {
                ?>
                <b><h4 class='price-total'><br>Total: <?php echo "{$total}"; ?>&#8364;</h4></b>
            </div>

            <form class='move-left' action='#' method='POST'>
                <label class='money-input'>
                    Inserta tu sueldo <input type='number' step='any' name='money' placeholder='<?php echo "{$total}"; ?>' value='<?php echo "{$total}"; ?>'>
                </label>
                <input id='bottone' class='reg-btn acq-btn' type="submit" name="compra" value="Adelante con la compra">
            <?php $_SESSION['total'] = $total; ?>
            </form>
            <?php
        }
    } else {
        echo "Por comprar tienes que registrarte en VideoPalomita.es!!";
    }
}

	$mysqli->close();
?>
