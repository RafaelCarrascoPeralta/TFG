<?php
    $servidor="44.202.233.46";
    $usuario="root";
    $passw="admin";
    $basededatos = "federacion";

    $conexion = new mysqli($servidor, $usuario, $passw, $basededatos);

    if ($conexion->connect_error) {
        die("La conexión falló: " . $conexion->connect_error);
    }
?>
