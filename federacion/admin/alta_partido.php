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

    <div id=admin>
                        <a href="index.php"><img src=".\imagen\admin.png" width="25px">Admin</a>
                        <form id="cerrar_sesion" action="/federacion/index.php" method="post" enctype="multipart/form-data">
                            <input type="submit" name="enviar" value="Cerrar Sesion">
                        </form>
              
    </div>
    

    <div id=content>
    <div id=mensaje>

    <?php

    $sql_insert = "INSERT INTO partidos (jornada, nombre_equipo, dia, hora, visitante, lugar, resultados, cod_partido) VALUES ('$jornada', '$local', '$dia', '$hora', '$visitante', '$lugar', '', '')";
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