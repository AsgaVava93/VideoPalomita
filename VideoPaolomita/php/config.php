<?php
	session_start();
    $ip =  "localhost";
    $user = "admin";
    $password = "";
    $db = "video_palomita";
    $mysqli = new mysqli();
    $mysqli->connect($ip, $user, $password, $db);
    
    // verifico la presenza di errori
    if($mysqli->connect_errno!= 0){
        // gestione errore
        $idErrore= $mysqli->connect_errno;
        $msg= $mysqli->connect_error;
        error_log("Error en la coneccion con el server $idErrore: $msg", 0);
        echo "Error en la coneccion $msg";
    }
?>
