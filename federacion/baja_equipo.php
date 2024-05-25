<?php
    include "header.php";

    $basededatos="federacion";

    include "conexion.php";

?>

<div id=contenido>

<?php

    $equipoborrar=$_GET['nombre_equipo'];
    // Borrar jugadores
    $borrar_jugador = "DELETE FROM jugadores WHERE nombre_equipo='$equipoborrar'";
    mysqli_query($conexion, $borrar_jugador);

    // Borrar partidos
    $borrar_partido = "DELETE FROM partidos WHERE nombre_equipo='$equipoborrar' OR visitante='$equipoborrar'";
    mysqli_query($conexion, $borrar_partido);

    // Borrar equipo
    $borrar_equipo = "DELETE FROM equipos WHERE nombre_equipo='$equipoborrar'";
    mysqli_query($conexion, $borrar_equipo);
    header("Location:borrar_equipos.php");
    

?>


</div>

<?php
    include "footer.php";

?>
