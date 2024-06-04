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
                        <form id="cerrar_sesion" action="index.php" method="post" enctype="multipart/form-data">
                            <input type="submit" name="enviar" value="Cerrar Sesion">
                        </form>
              
    </div>
    

    <div id=content>
        <div id=mensaje>

    <?php

        $modificar = "UPDATE jugadores SET nombre_equipo='$equipo', nombre='$nombre', apellidos='$apellidos', fecha_nacimiento='$fecha', posicion='$posicion', dorsal='$dorsal' where dni='$dni'";
        $resultado = mysqli_query($conexion, $modificar);
    
        if ($resultado) {
            echo "Los datos se actualizaron correctamente";
        } else {
            echo "Error al actualizar los datos: " . mysqli_error($conexion);
        }


    ?>
        
        </div>
    </div>
<?php
    include "footer.php";
?>
