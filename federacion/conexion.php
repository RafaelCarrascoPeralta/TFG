<?php
    $servidor="3.237.80.255";
    $usuario="root";
    $passw="admin";
    $basededatos = "federacion";

    $conexion = new mysqli($servidor, $usuario, $passw, $basededatos);

    if ($conexion->connect_error) {
        die("La conexión falló: " . $conexion->connect_error);
    }
?>
