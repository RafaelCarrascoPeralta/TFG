<?php
    include "header.php";

    $basededatos="federacion";

    include "conexion.php";

?>

<div id=content>
    <div id=mensaje>

<?php

    $jugadorborrar=$_GET['dni'];
    $borrar="DELETE FROM jugadores WHERE dni='$jugadorborrar'";
    $resultado=mysqli_query($conexion,$borrar);
    if ($resultado) {
        echo "El jugador se eliminó correctamente";
    } else {
        echo "Error al actualizar los datos: " . mysqli_error($conexion);
    }
?>

    </div>
</div>

<?php
    include "footer.php";

?>
