<?php
$servidor = "44.222.67.253";
$usuario = "root";
$passw = "admin";

// Nombre de la base de datos
$basededatos = "federacion";

$conexion = new mysqli($servidor, $usuario, $passw, $basededatos);

if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}
?>
