<?php
    $servidor="mysql-service";
    $usuario="root";
    $passw="admin";
    $basededatos = "federacion"; // Añadí el nombre de la base de datos aquí

    $conexion = new mysqli($servidor, $usuario, $passw, $basededatos);

    if ($conexion->connect_error) {
        die("La conexión falló: " . $conexion->connect_error);
    }
?>
