<?php
    include "header.php"
?>
    <div id=admin>
                        <a href="#"><img src=".\imagen\admin.png" width="25px">Admin</a>
                        <form id="cerrar_sesion" action="index.php" method="post" enctype="multipart/form-data">
                            <input type="submit" name="enviar" value="Cerrar Sesion">
                        </form>
              
    </div>
    
    <div id=cabecera>
        <h2>ALTA JUGADOR</h2>
    </div>
    <div id=content_equipos>
        <div id=formulario>
        
        <?php

            $basededatos="federacion";

            include "conexion.php";

            $equiposeleccionado = $_GET['nombre_equipo'];

            $sql_modificar = "SELECT * FROM equipos WHERE nombre_equipo='$equiposeleccionado'";
            $resultado = mysqli_query($conexion, $sql_modificar);

            if ($registro = mysqli_fetch_row($resultado)) {
            ?>

            <?php echo "<img width='150px' src='" . $registro[7] . "'>"; ?>
            <h2 class=altas>ALTA JUGADOR AL EQUIPO <?php echo $registro[0]; ?></h2>

            <fieldset id="altas">
            <legend>Formulario para altas de jugadores</legend>

            <form id="formulario" action="alta_jugador.php" method="post" enctype="multipart/form-data">

                <label for="dni">DNI:</label><br>
                <input type="text" name="dni" value="" size="10" maxlength="9" minlength="9" required><br><br>

                <label for="nombre_equipo">NOMBRE EQUIPO:</label><br>
                <input type="text" name="nombre_equipo" value="<?php echo $registro[0];?>" size="30" required readonly><br><br>

                <label for="nombre">NOMBRE:</label><br>
                <input type="text" name="nombre" value="" size="30" required><br><br>

                <label for="apellidos">APELLIDOS:</label><br>
                <input type="text" name="apellidos" value="" size="50" required><br><br>

                <label for="fecha">FECHA DE NACIMIENTO:</label>
                <input type="date" name="fecha" value="" required><br><br>

                <label for="posicion">POSICION:</label>
                <select name="posicion">
                    <option value="Base">Base</option>
                    <option value="Escolta">Escolta</option>
                    <option value="Alero">Alero</option>
                    <option value="Ala-pivot">Ala-pivot</option>
                    <option value="Pivot">Pivot</option>
                </select><br><br>

                <label for="dorsal">DORSAL:</label>
                <input type="number" name="dorsal" value="" size="5" maxlength="2" required><br><br>

                <input type="submit" name="enviar" value="Alta Jugador">
                <input type="reset" name="limpiar" value="Limpiar Datos">

            </form>

            

            </fieldset>
        </div>
        <div id=boton1> 
                <a href="jugadores.php?nombre_equipo=<?php echo $registro[0];?>"><p class="boton_equi">Volver Atrás</p></a>
        </div>
        <?php
            } else {
                echo "No se encontraron datos para el producto seleccionado.";
            }
            $conexion->close();
        ?>
    </div>
<?php
    include "footer.php"
?>
