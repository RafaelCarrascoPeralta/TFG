<?php
// Manejar la lógica de eliminación antes de incluir cualquier HTML

$basededatos = "federacion";
include "conexion.php";

$partidoborrar = $_GET['cod_partido'];
$borrar = "DELETE FROM partidos WHERE cod_partido='$partidoborrar'";
mysqli_query($conexion, $borrar);

// Redireccionar después de la eliminación
header("Location: modificacion.php");
exit();
?>

<?php include "header.php"; ?>

<div id="contenido">
    <p>El partido ha sido eliminado.</p>
</div>

<?php include "footer.php"; ?>
