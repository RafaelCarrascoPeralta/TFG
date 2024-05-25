<?php
    include "header.php";

    
        $dni = $_POST['dni'];
        $equipo = $_POST['nombre_equipo'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $fecha = $_POST['fecha'];
        $posicion = $_POST['posicion'];
        $dorsal = $_POST['dorsal'];
        $basededatos="federacion";

   
        include "conexion.php";
    ?>

    <div id=content>

    <?php

    $sql_insert = "INSERT INTO jugadores (dni, nombre_equipo, nombre, apellidos, fecha_nacimiento, posicion, dorsal) VALUES ('$dni', '$equipo', '$nombre', '$apellidos', '$fecha', '$posicion', '$dorsal')";
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