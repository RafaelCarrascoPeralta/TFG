<?php
    include "header.php"
?>
    <div id=cabecera>
        <h2>ALTA EQUIPOS</h2>
    </div>
    <div id=content_equipos>
        <div id=formulario>
        <h2 class=altas>ALTA EQUIPOS A LA FEDERACION GRANADINA DE BALONCESTO</h2>

            <fieldset id="altas">
            <legend>Formulario para altas de equipos</legend>

            <form id="formulario" action="alta_equipo.php" method="post" enctype="multipart/form-data">

                <label for="nombre">NOMBRE EQUIPO:</label><br>
                <input type="text" name="nombre" value="" size="30" required><br><br>

                <label for="localidad">LOCALIDAD:</label><br>
                <input type="text" name="localidad" value="" size="30" required><br><br>

                <label for="dia">DIA PARTIDO:</label>
                <select name="dia">
                    <option value="Lunes">Lunes</option>
                    <option value="Martes">Martes</option>
                    <option value="Miercoles">Miercoles</option>
                    <option value="Jueves">Jueves</option>
                    <option value="Viernes">Viernes</option>
                    <option value="Sabado">Sabado</option>
                    <option value="Domingo">Domingo</option>
                </select><br><br>

                <label for="hora">HORA PARTIDO:</label>
                <input type="time" name="hora" value="" required><br><br>

                <label for="color">COLOR EQUIPO:</label>
                <input type="text" name="color" value="" size="20" required><br><br>

                <label for="lugar">LUGAR DEL ENCUENTRO:</label><br>
                <input type="text" name="lugar" value="" size="50" required><br><br>

                <label for="correo">CORREO ELECTRONICO:</label><br>
                <input type="text" name="correo" value="" size="30" required><br><br>

                <label for="imagen">IMAGEN: </label>
                <input type="file" name="imagen" id="imagen" accept="image/*" required><br><br>

                <input type="submit" name="enviar" value="Alta Equipo">
                <input type="reset" name="limpiar" value="Limpiar Datos">

            </form>

            </fieldset>
        </div>
        <div id=boton1> 
                <a href="equipos.php"><p class="boton_equi">Volver a Equipos</p></a>
        </div>
    </div>
<?php
    include "footer.php"
?>