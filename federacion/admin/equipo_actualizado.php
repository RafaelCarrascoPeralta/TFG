<?php
    include "header.php";

    $nombre = $_POST['nombre'];
    $localidad = $_POST['localidad'];
    $dia = $_POST['dia'];
    $hora = $_POST['hora'];
    $color = $_POST['color'];
    $lugar = $_POST['lugar'];
    $correo = $_POST['correo'];
    $nombrearchivo = $_FILES['imagen']['name'];

    $basededatos = "federacion";

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
            if ($nombrearchivo == "") {
                $sql_modificar = "SELECT * FROM equipos WHERE nombre_equipo='$nombre'";
                $resultado = mysqli_query($conexion, $sql_modificar);

                if ($registro = mysqli_fetch_row($resultado)) {
                    $modificar = "UPDATE equipos SET localidad='$localidad', dia_partido='$dia', hora_partido='$hora', color_equipacion='$color', lugar_partido='$lugar', correo='$correo', logo='" . $registro['7'] . "' WHERE nombre_equipo='$nombre'";
                    $resultado = mysqli_query($conexion, $modificar);
                    
                    if ($resultado) {
                        echo "Los datos se actualizaron correctamente";
                    } else {
                        echo "Error al actualizar los datos: " . mysqli_error($conexion);
                    }
                }
            } else {
                $directorio_subida1 = "/var/www/html/imagen/";
                $directorio_subida2 = "/var/www/html/admin/imagen/";
                $max_file_size = 5120000;
                $extensiones_validas = array("jpg", "png", "gif");

                if (isset($_FILES['imagen'])) {
                    $errores = 0;
                    $nombrearchivo = $_FILES['imagen']['name'];
                    $filesize = $_FILES['imagen']['size'];
                    $directorio_temp = $_FILES['imagen']['tmp_name'];
                    $tipoarchivo = $_FILES['imagen']['type'];
                    $arrayarchivo = pathinfo($nombrearchivo);
                    $extension = $arrayarchivo['extension'];

                    if (!in_array($extension, $extensiones_validas)) {
                        echo "La extensión no es válida";
                        $errores = 1;
                    }

                    if ($filesize > $max_file_size) {
                        echo "La imagen excede el máximo tamaño permitido";
                        $errores = 1;
                    }

                    if ($errores == 0) {
                        $nombre_imagen1 = $directorio_subida1 . $nombrearchivo;
                        $nombre_imagen2 = $directorio_subida2 . $nombrearchivo;
                        
                        if (move_uploaded_file($directorio_temp, $nombre_imagen1)) {
                            copy($nombre_imagen1, $nombre_imagen2);
                        }
                    }
                }

                $modificar = "UPDATE equipos SET localidad='$localidad', dia_partido='$dia', hora_partido='$hora', color_equipacion='$color', lugar_partido='$lugar', correo='$correo', logo='$nombre_imagen1' WHERE nombre_equipo='$nombre'";
                $resultado = mysqli_query($conexion, $modificar);
                
                if ($resultado) {
                    echo "Los datos se actualizaron correctamente";
                } else {
                    echo "Error al actualizar los datos: " . mysqli_error($conexion);
                }
            }
        ?>
    </div>
</div>

<?php
    include "footer.php";
?>

