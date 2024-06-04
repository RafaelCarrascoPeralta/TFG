<?php
    include "header.php"
?>

<div id=sesion>
        <form id=inicio_ses action="inicio_sesion.php" method="post" enctype="multipart/form-data">
        
        <input type="text" name="usuario" value="" required>
        <input type="password" name="password" value="" required>
        <input type="submit" name="enviar" value="Iniciar sesión">
    
    </div>
    
    <div id=cabecera>
        <h2>JUGADORES</h2>
    </div>
    <div id=content_equipos>
        <?php
            $basededatos="federacion";

            include "conexion.php";

            $equiposeleccionado = $_GET['nombre_equipo'];

            $sql_modificar = "SELECT * FROM equipos where nombre_equipo='$equiposeleccionado'";
            $resultado = mysqli_query($conexion, $sql_modificar);

            if ($registro = mysqli_fetch_row($resultado)) {
        ?>
        <?php echo "<img width='150px' src='" . $registro[7] . "'>"; ?>
        <h2 class=listado>LISTADO DE JUGADORES DEL EQUIPO <?php echo $registro[0]; ?></h2><br><br>
            
        <?php
            } else {
                echo "No se encontraron datos para el producto seleccionado.";
            }
            $conexion->close();
        ?>

        <table border=1>
            <thead>
                <tr>
                    <th>DNI</th>
                    <th>NOMBRE</th>
                    <th>APELLIDOS</th>
                    <th>FECHA NACIMIENTO</th>
                    <th>POSICION</th>
                    <th>DORSAL</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $basededatos = "federacion";
                include "conexion.php";

                $equiposeleccionado = $_GET['nombre_equipo'];

                if (!$conexion) {
                    die("Error en la conexión a la base de datos: " . mysqli_connect_error());
                }

                $equipo = "SELECT * FROM equipos where nombre_equipo='$equiposeleccionado'";
                $resultado_equipo = mysqli_query($conexion, $equipo);

                if (!$resultado_equipo) {
                    die("Error al obtener el equipo: " . mysqli_error($conexion));
                }


                if ($registro_equipo = mysqli_fetch_row($resultado_equipo)) {
                    $sql_jugadores = "SELECT dni, nombre_equipo, nombre, apellidos, fecha_nacimiento, posicion, dorsal
                        FROM jugadores j join equipos e using (nombre_equipo) where nombre_equipo = '$equiposeleccionado'";
                    $resultado_jugadores = mysqli_query($conexion, $sql_jugadores);

                    
                    if (!$resultado_jugadores) {
                        die("Error al obtener los jugadores: " . mysqli_error($conexion));
                    }

                    while ($registro = mysqli_fetch_row($resultado_jugadores)) {
                        echo "<tr>";
                        echo "<td>" . $registro[0] . "</td>";
                        echo "<td>" . $registro[2] . "</td>";
                        echo "<td>" . $registro[3] . "</td>";
                        echo "<td>" . $registro[4] . "</td>";
                        echo "<td>" . $registro[5] . "</td>";
                        echo "<td>" . $registro[6] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "No se encontró el equipo seleccionado.";
                }
                mysqli_close($conexion);
                ?>
            </tbody>
        </table>
        <div id=botones>   
            <div id=boton2> 
                <a href="equipos.php"><p class="boton_equi">Volver atrás</p></a>
            </div>
        </div>
    </div>

<?php
    include "footer.php"
?>


<script>
    // Función para mostrar ventana emergente de confirmación
    function confirmarEliminacion() {
        return confirm("¿Estás seguro de que deseas borrar el equipo?");
    }
</script>
