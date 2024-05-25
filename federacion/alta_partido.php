<?php
    include "header.php";

    
        $jornada = $_POST['jornada'];
        $local = $_POST['local'];
        $dia = $_POST['dia'];
        $hora = $_POST['hora'];
        $visitante = $_POST['visitante'];
        $lugar = $_POST['lugar'];
        $basededatos="federacion";

   
        include "conexion.php";
    ?>

    <div id=content>

    <?php

    $sql_insert = "INSERT INTO partidos (jornada, nombre_equipo, dia, hora, visitante, lugar, resultados, cod_partido) VALUES ('$jornada', '$local', '$dia', '$hora', '$visitante', '$lugar', '', '')";
        if ($conexion->query($sql_insert) === TRUE) {
            echo "Datos insertados con éxito.";
        } else {
            echo "Error al insertar datos: " . $conexion->error;
        }

    ?>
        
    </div>

<?php
    include "footer.php";
?>