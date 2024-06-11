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


        if ($nombrearchivo == ""){

            $sql_modificar = "SELECT * FROM equipos WHERE nombre_equipo='$nombre'";
            $resultado = mysqli_query($conexion, $sql_modificar);

                if ($registro = mysqli_fetch_row($resultado)) {
                $modificar = "UPDATE equipos SET localidad='$localidad', dia_partido='$dia', hora_partido='$hora', color_equipacion='$color', lugar_partido='$lugar', correo='$correo', logo='" . $registro['7'] . "' where nombre_equipo='$nombre'";
                $resultado = mysqli_query($conexion, $modificar);
                
                if ($resultado) {
                    echo "Los datos se actualizaron correctamente";
                } else {
                    echo "Error al actualizar los datos: " . mysqli_error($conexion);
                }
            }

        } else {


            $directoriosubida = "imagen/";
            $max_file_size = "5120000";
            $extensionesvalidas = array("jpg", "png", "gif");

            $nombrecompleto = "";

if (isset($_FILES['imagen'])) {
    $errores = 0;
    $nombrearchivo = $_FILES['imagen']['name'];
    $filesize = $_FILES['imagen']['size'];
    $directoriotemp = $_FILES['imagen']['tmp_name'];
    $tipoarchivo = $_FILES['imagen']['type'];
    $arrayarchivo = pathinfo($nombrearchivo);
    $extension = $arrayarchivo['extension'];

    if (!in_array($extension, $extensionesvalidas)) {
        echo "La extensión no es válida";
        $errores = 1;
    }

    if ($filesize > $max_file_size) {
        echo "La imagen excede el máximo tamaño permitido";
        $errores = 1;
    }

    if ($errores == 0) {
        $directorioraiz = '/var/www/html/'; // Ruta absoluta del directorio raíz de tu aplicación
        $directoriosubida = $directorioraiz . "imagen/";
        $nombreimagen = $directoriosubida . $nombrearchivo;

        $directoriosubida2 = $directorioraiz . "admin/imagen/";
        $nombreimagen2 = $directoriosubida2 . $nombrearchivo;

        // Mover la imagen al primer directorio
        if (move_uploaded_file($directoriotemp, $nombreimagen)) {
            // Copiar la imagen al segundo directorio
            if (!copy($nombreimagen, $nombreimagen2)) {
                echo "Error al copiar la imagen al directorio admin/imagen/";
            }
        } else {
            echo "Error al mover la imagen al directorio imagen/";
        }
    }
}


    $modificar = "UPDATE equipos SET localidad='$localidad', dia_partido='$dia', hora_partido='$hora', color_equipacion='$color', lugar_partido='$lugar', correo='$correo', logo='$nombreimagen' where nombre_equipo='$nombre'";
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
