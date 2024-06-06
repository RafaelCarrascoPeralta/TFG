<?php
// Manejar la lógica de eliminación antes de incluir cualquier HTML

$basededatos = "federacion";
include "conexion.php";

$equipoborrar = $_GET['nombre_equipo'];

// Borrar jugadores
$borrar_jugador = "DELETE FROM jugadores WHERE nombre_equipo='$equipoborrar'";
mysqli_query($conexion, $borrar_jugador);

// Borrar partidos
$borrar_partido = "DELETE FROM partidos WHERE nombre_equipo='$equipoborrar' OR visitante='$equipoborrar'";
mysqli_query($conexion, $borrar_partido);

// Borrar equipo
$borrar_equipo = "DELETE FROM equipos WHERE nombre_equipo='$equipoborrar'";
mysqli_query($conexion, $borrar_equipo);

// Redireccionar después de la eliminación
header("Location: borrar_equipos.php");
exit();
?>

<?php include "header.php"; ?>

<div id="contenido">
    <p>El equipo ha sido eliminado.</p>
</div>

<?php include "footer.php"; ?>
