<?php
    include "header.php"
?>
    <div id=sesion>
        <form id=inicio_ses action="inicio_sesion.php" method="post" enctype="multipart/form-data">
        
        <label for="dni">Usuario:</label><br>
        <input type="text" name="usuario" value="">
        <label for="dni">Contraseña:</label><br>
        <input type="password" name="contraseña" value="">
        <input type="submit" name="enviar" value="Iniciar sesión">
    
    </div>
    <div id=cabecera>
        <h2>CONSULTA PARTIDOS</h2>
    </div>
    <div id=content_equipos>
        <div id=formulario>
        <h2 class=altas>SELECCIONA EL EQUIPO A CONSULTAR</h2>

            <fieldset id="consulta">
            <legend>Formulario para consultar partidos</legend>

            <form id="formulario" action="consulta_equipo.php" method="post"><br>


                <label for="seleccion">¿De que equipo quieres realizar la consulta?:</label><br><br>
                <input type="radio" name="seleccion" value="CAB ATARFE" required>CAB ATARFE<br>
                <input type="radio" name="seleccion" value="CB AGUSTINOS" required>CB AGUSTINOS<br>
                <input type="radio" name="seleccion" value="CB ALHOTUR" required>CB ALHOTUR<br>
                <input type="radio" name="seleccion" value="CB FUNDACION" required>CB FUNDACION<br>
                <input type="radio" name="seleccion" value="CB RACA" required>CB RACA<br>
                <input type="radio" name="seleccion" value="CB SANTA FE" required>CB SANTA FE<br><br>

            
                <input type="submit" name="enviar" value="Hacer consulta">
                <input type="reset" name="limpiar" value="Limpiar Datos">

            </form>

            </fieldset>
        </div>
        <div id=boton1> 
                <a href="partidos.php"><p class="boton_equi">Volver atrás</p></a>
        </div>
    </div>
<?php
    include "footer.php"
?>
