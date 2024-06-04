<?php
    $servidor="localhost";
    $usuario="root";
    $passw="";

    $conexion = new mysqli($servidor, $usuario, $passw, $basededatos);

    if ($conexion->connect_error) {
        die("La conexión fallo: 0" . $conexion->$connect_error);
    }
?>