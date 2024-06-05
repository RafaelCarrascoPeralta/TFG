<?php
    include "header.php"
?>
    <div id=sesion>
        <form id=inicio_ses action="inicio_sesion.php" method="post" enctype="multipart/form-data">
        
        <label for="dni">Usuario:</label><br>
        <input type="text" name="usuario" value="" required>
        <label for="dni">Contraseña:</label><br>
        <input type="password" name="contraseña" value="" required>
        <input type="submit" name="enviar" value="Iniciar sesión">
    
    </div>

    <div id=cabecera>
        <h2>CONSULTA PARTIDOS</h2>
    </div>
    <div id=content_equipos>
    <h2 class=listado>CONSULTA DE PARTIDOS</h2><br><br>

        <h3>JORNADA 1</h3>

        <table border=1>
            <thead>
                <tr>
                    <th>JORNADA</th>
                    <th>LOCAL</th>
                    <th>DIA</th>
                    <th>HORA</th>
                    <th>VISITANTE</th>
                    <th>LUGAR ENCUENTRO</th>
                    <th>RESULTADOS</th>
                    <th>CODIGO PARTIDO</th>
                    </tr>
            </thead>
            <tbody>
        <?php

        $seleccion= $_POST['seleccion'];

        $basededatos="federacion";

        include "conexion.php";

        $sql_mostrar = "SELECT * FROM partidos where jornada='jornada 1' and nombre_equipo='$seleccion' or jornada='jornada 1' and visitante='$seleccion'";
        $resultado = mysqli_query($conexion, $sql_mostrar);

        while ($registro = mysqli_fetch_row($resultado)) {
            echo "<tr>";
            echo "<td>" . $registro[0] . "</td>";
            echo "<td>" . $registro[1] . "</td>";
            echo "<td>" . $registro[2] . "</td>";
            echo "<td>" . $registro[3] . "</td>";
            echo "<td>" . $registro[4] . "</td>";
            echo "<td>" . $registro[5] . "</td>";
            echo "<td>" . $registro[6] . "</td>";
            echo "<td>" . $registro[7] . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
        </table>

        <h3>JORNADA 2</h3>

        <table border=1>
            <thead>
                <tr>
                    <th>JORNADA</th>
                    <th>LOCAL</th>
                    <th>DIA</th>
                    <th>HORA</th>
                    <th>VISITANTE</th>
                    <th>LUGAR ENCUENTRO</th>
                    <th>RESULTADOS</th>
                    <th>CODIGO PARTIDO</th>
                    </tr>
            </thead>
            <tbody>
        <?php

        $basededatos="federacion";

        include "conexion.php";

        $sql_mostrar = "SELECT * FROM partidos where jornada='jornada 2' and nombre_equipo='$seleccion' or jornada='jornada 2' and visitante='$seleccion'";
        $resultado = mysqli_query($conexion, $sql_mostrar);

        while ($registro = mysqli_fetch_row($resultado)) {
            echo "<tr>";
            echo "<td>" . $registro[0] . "</td>";
            echo "<td>" . $registro[1] . "</td>";
            echo "<td>" . $registro[2] . "</td>";
            echo "<td>" . $registro[3] . "</td>";
            echo "<td>" . $registro[4] . "</td>";
            echo "<td>" . $registro[5] . "</td>";
            echo "<td>" . $registro[6] . "</td>";
            echo "<td>" . $registro[7] . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
        </table>

        <h3>JORNADA 3</h3>

        <table border=1>
            <thead>
                <tr>
                    <th>JORNADA</th>
                    <th>LOCAL</th>
                    <th>DIA</th>
                    <th>HORA</th>
                    <th>VISITANTE</th>
                    <th>LUGAR ENCUENTRO</th>
                    <th>RESULTADOS</th>
                    <th>CODIGO PARTIDO</th>
                    </tr>
            </thead>
            <tbody>
        <?php

        $basededatos="federacion";

        include "conexion.php";

        $sql_mostrar = "SELECT * FROM partidos where jornada='jornada 3' and nombre_equipo='$seleccion' or jornada='jornada 3' and visitante='$seleccion'";
        $resultado = mysqli_query($conexion, $sql_mostrar);

        while ($registro = mysqli_fetch_row($resultado)) {
            echo "<tr>";
            echo "<td>" . $registro[0] . "</td>";
            echo "<td>" . $registro[1] . "</td>";
            echo "<td>" . $registro[2] . "</td>";
            echo "<td>" . $registro[3] . "</td>";
            echo "<td>" . $registro[4] . "</td>";
            echo "<td>" . $registro[5] . "</td>";
            echo "<td>" . $registro[6] . "</td>";
            echo "<td>" . $registro[7] . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
        </table>

        <h3>JORNADA 4</h3>

        <table border=1>
            <thead>
                <tr>
                    <th>JORNADA</th>
                    <th>LOCAL</th>
                    <th>DIA</th>
                    <th>HORA</th>
                    <th>VISITANTE</th>
                    <th>LUGAR ENCUENTRO</th>
                    <th>RESULTADOS</th>
                    <th>CODIGO PARTIDO</th>
                    </tr>
            </thead>
            <tbody>
        <?php

        $basededatos="federacion";

        include "conexion.php";

        $sql_mostrar = "SELECT * FROM partidos where jornada='jornada 4' and nombre_equipo='$seleccion' or jornada='jornada 4' and visitante='$seleccion'";
        $resultado = mysqli_query($conexion, $sql_mostrar);

        while ($registro = mysqli_fetch_row($resultado)) {
            echo "<tr>";
            echo "<td>" . $registro[0] . "</td>";
            echo "<td>" . $registro[1] . "</td>";
            echo "<td>" . $registro[2] . "</td>";
            echo "<td>" . $registro[3] . "</td>";
            echo "<td>" . $registro[4] . "</td>";
            echo "<td>" . $registro[5] . "</td>";
            echo "<td>" . $registro[6] . "</td>";
            echo "<td>" . $registro[7] . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
        </table>

        <h3>JORNADA 5</h3>

        <table border=1>
            <thead>
                <tr>
                    <th>JORNADA</th>
                    <th>LOCAL</th>
                    <th>DIA</th>
                    <th>HORA</th>
                    <th>VISITANTE</th>
                    <th>LUGAR ENCUENTRO</th>
                    <th>RESULTADOS</th>
                    <th>CODIGO PARTIDO</th>
                    </tr>
            </thead>
            <tbody>
        <?php

        $basededatos="federacion";

        include "conexion.php";

        $sql_mostrar = "SELECT * FROM partidos where jornada='jornada 5' and nombre_equipo='$seleccion' or jornada='jornada 5' and visitante='$seleccion'";
        $resultado = mysqli_query($conexion, $sql_mostrar);

        while ($registro = mysqli_fetch_row($resultado)) {
            echo "<tr>";
            echo "<td>" . $registro[0] . "</td>";
            echo "<td>" . $registro[1] . "</td>";
            echo "<td>" . $registro[2] . "</td>";
            echo "<td>" . $registro[3] . "</td>";
            echo "<td>" . $registro[4] . "</td>";
            echo "<td>" . $registro[5] . "</td>";
            echo "<td>" . $registro[6] . "</td>";
            echo "<td>" . $registro[7] . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
        </table>
        <div id=boton1>
            <a href="partidos.php"><p class="boton_equi">Volver a partidos</p></a>
        </div>
    </div>
<?php
    include "footer.php"
?>
