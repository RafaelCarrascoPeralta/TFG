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

    <div id=admin>
                        <a href="#"><img src=".\imagen\admin.png" width="25px">Admin</a>
                        <form id="cerrar_sesion" action="../index.php" method="post" enctype="multipart/form-data">
                            <input type="submit" name="enviar" value="Cerrar Sesion">
                        </form>
              
    </div>
    

    <div id=content>
    <div id=mensaje>

    <?php

    $sql_insert = "INSERT INTO jugadores (dni, nombre_equipo, nombre, apellidos, fecha_nacimiento, posicion, dorsal) VALUES ('$dni', '$equipo', '$nombre', '$apellidos', '$fecha', '$posicion', '$dorsal')";
        if ($conexion->query($sql_insert) === TRUE) {
            echo "Datos insertados con éxito.";
        } else {
            echo "Error al insertar datos: " . $conexion->error;
        }

    ?>
        
    </div>
    </div>

<?php
    include "footer.php";
?>
