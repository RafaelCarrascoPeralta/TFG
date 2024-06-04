<?php
    include "header.php"
?>
    <div id=admin>
                        <a href="#"><img src=".\imagen\admin.png" width="25px">Admin</a>
                        <form id="cerrar_sesion" action="../index.php" method="post" enctype="multipart/form-data">
                            <input type="submit" name="enviar" value="Cerrar Sesion">
                        </form>
              
    </div>
    
    <div id=cabecera>
        <h2>ACTUALIZAR JUGADOR</h2>
    </div>
    <div id=content_equipos>
        <div id=formulario>
        
        <?php

            $basededatos="federacion";

            include "conexion.php";

            $jugadorseleccionado = $_GET['dni'];

            $sql_modificar = "SELECT * FROM jugadores WHERE dni='$jugadorseleccionado'";
            $resultado = mysqli_query($conexion, $sql_modificar);

            if ($registro = mysqli_fetch_row($resultado)) {
            ?>

            <h2 class=altas>ACTUALIZAR JUGADOR DEL EQUIPO <?php echo $registro[1]; ?></h2>

            <fieldset id="altas">
            <legend>Formulario para actualizar al jugador <?php echo $registro[2]; ?><?php echo $registro[3]; ?></legend>

            <form id="formulario" action="jugador_actualizado.php" method="post">

                <label for="dni">DNI:</label><br>
                <input type="text" name="dni" value="<?php echo $registro[0]; ?>" size="10" maxlength="9" minlength="9" required readonly><br><br>

                <label for="nombre_equipo">NOMBRE EQUIPO:</label><br>
                <input type="text" name="nombre_equipo" value="<?php echo $registro[1]; ?>" size="30" required readonly><br><br>

                <label for="nombre">NOMBRE:</label><br>
                <input type="text" name="nombre" value="<?php echo $registro[2]; ?>" size="30" required><br><br>

                <label for="apellidos">APELLIDOS:</label><br>
                <input type="text" name="apellidos" value="<?php echo $registro[3]; ?>" size="50" required><br><br>

                <label for="fecha">FECHA DE NACIMIENTO:</label>
                <input type="date" name="fecha" value="<?php echo $registro[4]; ?>" required><br><br>

                <label for="posicion">POSICION:</label>
                <select name="posicion">
                    <option value="Base">Base</option>
                    <option value="Escolta">Escolta</option>
                    <option value="Alero">Alero</option>
                    <option value="Ala-pivot">Ala-pivot</option>
                    <option value="Pivot">Pivot</option>
                    <option value="<?php echo $registro[5]; ?>" selected><?php echo $registro[5]; ?></option>
                </select><br><br>

                <label for="dorsal">DORSAL:</label>
                <input type="number" name="dorsal" value="<?php echo $registro[6]; ?>" size="5" maxlength="2" required><br><br>

                <input type="submit" name="enviar" value="Actualizar Jugador">
                <input type="reset" name="limpiar" value="Limpiar Datos">

            </form>

            </fieldset>
        </div>
        <div id=boton1> 
                <a href="jugadores.php?nombre_equipo=<?php echo $registro[1];?>"><p class="boton_equi">Volver Atrás</p></a>
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

<script>
    // Función para mostrar ventana emergente de confirmación
    function confirmarActualizacion() {
        return confirm("¿Estás seguro de que deseas actualizar el equipo?");
    }

    // Agregar un evento al formulario para mostrar la ventana emergente antes de enviar
    document.getElementById("formulario").addEventListener("submit", function(event) {
        if (!confirmarActualizacion()) {
            event.preventDefault(); // Detener el envío del formulario si el usuario cancela
        }
    });
</script>
