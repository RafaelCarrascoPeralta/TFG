<?php
    include "header.php"
?>
    <div id=admin>
                        <a href="index.php"><img src=".\imagen\admin.png" width="25px">Admin</a>
                        <form id="cerrar_sesion" action="/federacion/index.php" method="post" enctype="multipart/form-data">
                            <input type="submit" name="enviar" value="Cerrar Sesion">
                        </form>
              
    </div>

    <div id=cabecera>
        <h2>ACTUALIZAR EQUIPO</h2>
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
        <h2 class=altas>ACTUALIZANDO EL EQUIPO <?php echo $registro[0]; ?></h2>

            <fieldset id="altas">
            <legend>Formulario para actualizar el equipo <?php echo $registro[0]; ?></legend>

            <form id="formulario" action="equipo_actualizado.php" method="post" enctype="multipart/form-data">

                <label for="nombre">NOMBRE EQUIPO:</label><br>
                <input type="text" name="nombre" value="<?php echo $registro[0]; ?>" size="30" readonly><br><br>

                <label for="localidad">LOCALIDAD:</label><br>
                <input type="text" name="localidad" value="<?php echo $registro[1]; ?>" size="30" required><br><br>

                <label for="dia">DIA PARTIDO:</label>
                <select name="dia">
                    <option value="Lunes">Lunes</option>
                    <option value="Martes">Martes</option>
                    <option value="Miercoles">Miercoles</option>
                    <option value="Jueves">Jueves</option>
                    <option value="Viernes">Viernes</option>
                    <option value="Sabado">Sabado</option>
                    <option value="Domingo">Domingo</option>
                    <option value="<?php echo $registro['2']; ?>" selected><?php echo $registro['2']; ?></option> >
                </select><br><br>

                <label for="hora">HORA PARTIDO:</label>
                <input type="time" name="hora" value="<?php echo $registro['3']; ?>" required><br><br>

                <label for="color">COLOR EQUIPO:</label>
                <input type="text" name="color" value="<?php echo $registro['4']; ?>" size="20" required><br><br>

                <label for="lugar">LUGAR DEL ENCUENTRO:</label><br>
                <input type="text" name="lugar" value="<?php echo $registro['5']; ?>" size="50" required><br><br>

                <label for="correo">CORREO ELECTRONICO:</label><br>
                <input type="text" name="correo" value="<?php echo $registro['6']; ?>" size="30" required><br><br>

                <label for="logo_antigua">IMAGEN ACTUAL: </label>
                <img width=200px name="logo_antigua" id="logo_antigua" src="<?php echo $registro['7']; ?>"><br><br>

                <label for="imagen">IMAGEN: </label>
                <input type="file" name="imagen" id="imagen" accept="image/*"><br><br>

                <input type="submit" name="enviar" value="Actualizar equipo">
                <input type="reset" name="limpiar" value="Reiniciar datos">

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
            <a href="equipos.php"><p class="boton_equi">Volver a Equipos</p></a>
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