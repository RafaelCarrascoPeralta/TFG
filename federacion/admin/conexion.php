<?php
$servidor = "3.230.147.215";
$usuario = "root";
$passw = "admin";

// Nombre de la base de datos
$basededatos = "federacion";

$conexion = new mysqli($servidor, $usuario, $passw, $basededatos);

if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}
?>
