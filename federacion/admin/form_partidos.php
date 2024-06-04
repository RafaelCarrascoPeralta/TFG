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
        <h2>AÑADIR PARTIDO</h2>
    </div>
    <div id=content_equipos>
        <div id=formulario>
        <h2 class=altas>AÑADIENDO PARTIDO</h2>

            <fieldset id="altas">
            <legend>Formulario para añadir partidos</legend>

            <form id="formulario" action="alta_partido.php" method="post">

                <label for="jornada">JORNADA</label><br>
                <select name="jornada">
                    <option value="Jornada 1">Jornada 1</option>
                    <option value="Jornada 2">Jornada 2</option>
                    <option value="Jornada 3">Jornada 3</option>
                    <option value="Jornada 4">Jornada 4</option>
                    <option value="Jornada 5">Jornada 5</option>
                </select><br><br>

                <label for="local">EQUIPO LOCAL:</label><br>
                <select name="local">
                    <option value="CAB ATARFE">CAB ATARFE</option>
                    <option value="CB AGUSTINOS">CB AGUSTINOS</option>
                    <option value="CB ALHOTUR">CB ALHOTUR</option>
                    <option value="CB FUNDACION">CB FUNDACION</option>
                    <option value="CB RACA">CB RACA</option>
                    <option value="CB SANTA FE">CB SANTA FE</option>
                </select><br><br>

                <label for="dia">DIA PARTIDO:</label>
                <input type="date" name="dia" value="" required><br><br>

                <label for="hora">HORA PARTIDO:</label>
                <input type="time" name="hora" value="" required><br><br>

                <label for="visitante">EQUIPO VISITANTE:</label>
                <select name="visitante">
                    <option value="CAB ATARFE">CAB ATARFE</option>
                    <option value="CB AGUSTINOS">CB AGUSTINOS</option>
                    <option value="CB ALHOTUR">CB ALHOTUR</option>
                    <option value="CB FUNDACION">CB FUNDACION</option>
                    <option value="CB RACA">CB RACA</option>
                    <option value="CB SANTA FE">CB SANTA FE</option>
                </select><br><br>

                <label for="lugar">LUGAR DEL ENCUENTRO:</label><br>
                <select name="lugar">
                    <option value=" POLIDEPORTIVO MUNICIPAL DE ATARFE"> POLIDEPORTIVO MUNICIPAL DE ATARFE</option>
                    <option value="COLEGIO AGUSTINOS">COLEGIO AGUSTINOS</option>
                    <option value="PABELLON MUNICIPAL DE ALHENDIN">PABELLON MUNICIPAL DE ALHENDIN</option>
                    <option value="PABELLON VELETA">PABELLON VELETA</option>
                    <option value="COLEGIO RAMON Y CAJAL">COLEGIO RAMON Y CAJAL</option>
                    <option value="POLIDEPORTIVO MUNICIPAL DE SANTA FE">POLIDEPORTIVO MUNICIPAL DE SANTA FE</option>
                </select><br><br>

                <input type="submit" name="enviar" value="Añadir Partido">
                <input type="reset" name="limpiar" value="Limpiar Datos">

            </form>

            </fieldset>
        </div>
        <div id=boton1> 
                <a href="modificacion.php"><p class="boton_equi">Volver atrás</p></a>
        </div>
    </div>
<?php
    include "footer.php"
?>
