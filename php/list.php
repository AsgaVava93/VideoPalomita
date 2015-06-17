<?php
//
//	include('php/Pelicula.php');

$list = array();

switch ($sc) {
    case 'peliculas':
        $query = "SELECT * FROM pelicula";
        $result = $mysqli->query($query);
        $type = 'peliculas';
        while ($row = $result->fetch_row()) {
            $list[] = new Pelicula($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10]);
        }
        break;
    case 'nuevas':
        $query = "SELECT * FROM pelicula WHERE anio>2013";
        $result = $mysqli->query($query);
        $type = 'nuevas';
        while ($row = $result->fetch_row()) {
            $list[] = new Pelicula($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10]);
        }
        break;
    case 'actores':
        $query = "SELECT * FROM personaje WHERE es_actor = 1";
        $result = $mysqli->query($query);
        $type = 'actores';
        while ($row = $result->fetch_row()) {
            $list[] = new Personaje($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10], $row[11], $row[12], $row[13]);
        }
        break;
    case 'directores':
        $query = "SELECT * FROM personaje WHERE es_director = 1";
        $result = $mysqli->query($query);
        $type = 'directores';
        while ($row = $result->fetch_row()) {
            $list[] = new Personaje($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10], $row[11], $row[12], $row[13]);
        }
        break;
}

$i = 0;
while ($i < count($list)) {
    ?>
    <?php if ($type == 'peliculas' || $type == 'nuevas') { ?>
        <div class='box-article box-art-w'>
            <div class='box-image-article'>
                <img class='image-article' src='<?php echo "{$list[$i]->getFoto()}"; ?>' alt='<?php echo "{$list[$i]->getTitulo()}"; ?>'>
            </div><!--
        1		--><div class='name-article'>
                <h3><nobr><a class='art-link' href='index.php?page=list&sc=<?php echo"{$sc}"; ?>&art=<?php echo"{$list[$i]->getCode()}"; ?>' alt='<?php echo "{$list[$i]->getTitulo()} {$list[$i]->getDirector()}"; ?>'><?php echo "{$list[$i]->getTitulo()} {$list[$i]->getDirector()}"; ?></a></nobr></h3> <!-- marca e modelos-->
                <p> Cod. <?php echo "{$list[$i]->getCode()}"; ?>

                    <!--	echo "-->
                </p> <!-- codice -->
            </div><!--
            --><div class='box-price-article'>
                <!-- prezzo -->
                <h4 class='price-article'><?php echo "{$list[$i]->getPrecio()}"; ?>&#8364;</h4> <!-- prezzo -->
                <!-- cart image -->
                <?php
                if (isset($_SESSION['username'])) {
                    ?> <a href='?page=opcart&type=<?php echo"{$type}"; ?>&sc=add&code=<?php echo "{$list[$i]->getCode()}"; ?>'> <?php } else {
                    ?>
                        <a href='?page=err&code=1'> <?php
                        }
                        ?><img class='cart-image' src='assets/images/cart.jpg' alt='A�ades al carro'></a>
            </div>
        </div>
        <?php
        $i++;
    } else {
        ?>
        <div class='box-article box-art-w'>
            <div class='box-image-article'>
                <img class='image-article' src='<?php echo "{$list[$i]->getFoto()}"; ?>' alt='<?php echo "{$list[$i]->getNombre()} {$list[$i]->getApellido()}"; ?>'>
                <div class='fecha'>
                    <h3><nobr><a class='art-link' href='index.php?page=list&sc=<?php echo"{$sc}"; ?>&art=<?php echo"{$list[$i]->getCode()}"; ?>' alt='<?php echo "{$list[$i]->getNombre()} {$list[$i]->getApellido()}"; ?>'><?php echo "{$list[$i]->getNombre()} {$list[$i]->getApellido()}"; ?></a></nobr></h3>
                    <p><?php echo "{$list[$i]->getFechaNacimiento()}"; ?>
                        ->
        <?php echo "{$list[$i]->getFechaMuerte()}"; ?>

                        <!--	echo "-->
                    </p></div>
            </div>
        </div>
        <?php
        $i++;
    }
}
$mysqli->close();
?>