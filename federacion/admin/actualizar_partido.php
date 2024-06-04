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
        <h2>ACTUALIZAR PARTIDO</h2>
    </div>
    <div id=content_equipos>
        <div id=formulario>

        <?php

            $basededatos="federacion";

            include "conexion.php";

            $partidoseleccionado = $_GET['cod_partido'];

            $sql_modificar = "SELECT * FROM partidos WHERE cod_partido='$partidoseleccionado'";
            $resultado = mysqli_query($conexion, $sql_modificar);

            if ($registro = mysqli_fetch_row($resultado)) {
            ?>
        <h2 class=altas>ACTUALIZAR PARTIDO CON CODIGO <?php echo $registro[7]; ?></h2>

            <fieldset id="altas">
            <legend>Formulario para actualizar el partido con código <?php echo $registro[7]; ?></legend>

            <form id="formulario" action="partido_actualizado.php" method="post">

                <label for="codigo">CODIGO DEL PARTIDO:</label>
                <input type="text" name="codigo" value="<?php echo $registro[7]; ?>" required readonly><br><br>

                <label for="jornada">JORNADA</label><br>
                <input type="text" name="jornada" value="<?php echo $registro[0]; ?>" required readonly><br><br>
                

                <label for="local">EQUIPO LOCAL:</label><br>
                <input type="text" name="local" value="<?php echo $registro[1]; ?>" required readonly><br><br>

                <label for="dia">DIA PARTIDO:</label>
                <input type="date" name="dia" value="<?php echo $registro[2]; ?>"><br><br>

                <label for="hora">HORA PARTIDO:</label>
                <input type="time" name="hora" value="<?php echo $registro[3]; ?>" required><br><br>

                <label for="visitante">EQUIPO VISITANTE:</label>
                <input type="text" name="visitante" value="<?php echo $registro[4]; ?>" required readonly><br><br>

                <label for="lugar">LUGAR DEL ENCUENTRO:</label><br>
                <input type="text" name="lugar" value="<?php echo $registro[5]; ?>" size="40" required readonly><br><br>

                <label for="resultado">RESULTADO:</label>
                <input type="text" name="resultado" value="<?php echo $registro[6]; ?>" size="8"><br><br>

                <input type="submit" name="enviar" value="Actualizar Partido">
                <input type="reset" name="limpiar" value="Limpiar Datos">

            </form>
            <?php
            } else {
                echo "No se encontraron datos para el producto seleccionado.";
            }
            $conexion->close();
            ?>

            </fieldset>
        </div>
        <div id=boton1> 
                <a href="modificacion.php"><p class="boton_equi">Volver atrás</p></a>
        </div>
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
