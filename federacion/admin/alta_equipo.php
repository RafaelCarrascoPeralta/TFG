<?php
    include "header.php";

    
        $nombre = $_POST['nombre'];
        $localidad = $_POST['localidad'];
        $dia = $_POST['dia'];
        $hora = $_POST['hora'];
        $color = $_POST['color'];
        $lugar = $_POST['lugar'];
        $correo = $_POST['correo'];
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

    $directoriosubida = "../imagen/";
    $directoriosubida2 = "imagen/";
    $max_file_size = 5120000;
    $extensionesvalidas = array("jpg", "png", "gif");

    if (isset($_FILES['imagen'])) {
        $errores = 0;
        $nombrearchivo = $_FILES['imagen']['name'];
        $filesize = $_FILES['imagen']['size'];
        $directoriotemp = $_FILES['imagen']['tmp_name'];
        $tipoarchivo = $_FILES['imagen']['type'];
        $arrayarchivo = pathinfo($nombrearchivo);
        $extension = $arrayarchivo['extension'];

        if (!in_array($extension, $extensionesvalidas)) {
            echo "La extensión no es válida<br>";
            $errores = 1;
        }

        if ($filesize > $max_file_size) {
            echo "La imagen excede el máximo tamaño permitido<br>";
            $errores = 1;
        }

        if ($errores == 0) {
            $nombreimagen = $directoriosubida . $nombrearchivo;
            $nombreimagen2 = $directoriosubida2 . $nombrearchivo;

            // Mover la imagen al primer directorio
            if (move_uploaded_file($directoriotemp, $nombreimagen)) {

                // Copiar la imagen al segundo directorio
                if (copy($nombreimagen, $nombreimagen2)) {
                } else {
                    echo "Error al copiar la imagen al directorio admin/imagen/<br>";
                    error_log("Error al copiar la imagen a admin/imagen/: " . error_get_last()['message']);
                }
            } else {
                echo "Error al mover la imagen al directorio imagen/<br>";
                error_log("Error al mover la imagen a imagen/: " . error_get_last()['message']);
            }
        }

    $sql_insert = "INSERT INTO equipos (nombre_equipo, localidad, dia_partido, hora_partido, color_equipacion, lugar_partido, correo, logo) VALUES ('$nombre', '$localidad', '$dia', '$hora', '$color', '$lugar', '$correo', '$nombreimagen')";
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
