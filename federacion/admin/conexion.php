<?php
$servidor = "44.214.106.82";
$usuario = "root";
$passw = "admin";

// Nombre de la base de datos
$basededatos = "federacion";

$conexion = new mysqli($servidor, $usuario, $passw, $basededatos);

if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}
?>
