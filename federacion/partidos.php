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
        <h2>PARTIDOS</h2>
    </div>
    <div id=content_equipos>

        <h3>JORNADA 1</h3>

        <table border=1>
            <thead>
                <tr>
                    <th>LOCAL</th>
                    <th>DIA</th>
                    <th>HORA</th>
                    <th>VISITANTE</th>
                    <th>LUGAR ENCUENTRO</th>
                    <th>RESULTADOS</th>
                    </tr>
            </thead>
            <tbody>
        <?php

        $basededatos="federacion";

        include "conexion.php";

        $sql_mostrar = "SELECT * FROM partidos where jornada='jornada 1'";
        $resultado = mysqli_query($conexion, $sql_mostrar);

        while ($registro = mysqli_fetch_row($resultado)) {
            echo "<tr>";
            echo "<td>" . $registro[1] . "</td>";
            echo "<td>" . $registro[2] . "</td>";
            echo "<td>" . $registro[3] . "</td>";
            echo "<td>" . $registro[4] . "</td>";
            echo "<td>" . $registro[5] . "</td>";
            echo "<td>" . $registro[6] . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
        </table>

        <h3>JORNADA 2</h3>

        <table border=1>
            <thead>
                <tr>
                    <th>LOCAL</th>
                    <th>DIA</th>
                    <th>HORA</th>
                    <th>VISITANTE</th>
                    <th>LUGAR ENCUENTRO</th>
                    <th>RESULTADOS</th>
                    </tr>
            </thead>
            <tbody>
        <?php

        $basededatos="federacion";

        include "conexion.php";

        $sql_mostrar = "SELECT * FROM partidos where jornada='jornada 2'";
        $resultado = mysqli_query($conexion, $sql_mostrar);

        while ($registro = mysqli_fetch_row($resultado)) {
            echo "<tr>";
            echo "<td>" . $registro[1] . "</td>";
            echo "<td>" . $registro[2] . "</td>";
            echo "<td>" . $registro[3] . "</td>";
            echo "<td>" . $registro[4] . "</td>";
            echo "<td>" . $registro[5] . "</td>";
            echo "<td>" . $registro[6] . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
        </table>

        <h3>JORNADA 3</h3>

        <table border=1>
            <thead>
                <tr>
                    <th>LOCAL</th>
                    <th>DIA</th>
                    <th>HORA</th>
                    <th>VISITANTE</th>
                    <th>LUGAR ENCUENTRO</th>
                    <th>RESULTADOS</th>
                    </tr>
            </thead>
            <tbody>
        <?php

        $basededatos="federacion";

        include "conexion.php";

        $sql_mostrar = "SELECT * FROM partidos where jornada='jornada 3'";
        $resultado = mysqli_query($conexion, $sql_mostrar);

        while ($registro = mysqli_fetch_row($resultado)) {
            echo "<tr>";
            echo "<td>" . $registro[1] . "</td>";
            echo "<td>" . $registro[2] . "</td>";
            echo "<td>" . $registro[3] . "</td>";
            echo "<td>" . $registro[4] . "</td>";
            echo "<td>" . $registro[5] . "</td>";
            echo "<td>" . $registro[6] . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
        </table>

        <h3>JORNADA 4</h3>

        <table border=1>
            <thead>
                <tr>
                    <th>LOCAL</th>
                    <th>DIA</th>
                    <th>HORA</th>
                    <th>VISITANTE</th>
                    <th>LUGAR ENCUENTRO</th>
                    <th>RESULTADOS</th>
                    </tr>
            </thead>
            <tbody>
        <?php

        $basededatos="federacion";

        include "conexion.php";

        $sql_mostrar = "SELECT * FROM partidos where jornada='jornada 4'";
        $resultado = mysqli_query($conexion, $sql_mostrar);

        while ($registro = mysqli_fetch_row($resultado)) {
            echo "<tr>";
            echo "<td>" . $registro[1] . "</td>";
            echo "<td>" . $registro[2] . "</td>";
            echo "<td>" . $registro[3] . "</td>";
            echo "<td>" . $registro[4] . "</td>";
            echo "<td>" . $registro[5] . "</td>";
            echo "<td>" . $registro[6] . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
        </table>

        <h3>JORNADA 5</h3>

        <table border=1>
            <thead>
                <tr>
                    <th>LOCAL</th>
                    <th>DIA</th>
                    <th>HORA</th>
                    <th>VISITANTE</th>
                    <th>LUGAR ENCUENTRO</th>
                    <th>RESULTADOS</th>
                    </tr>
            </thead>
            <tbody>
        <?php

        $basededatos="federacion";

        include "conexion.php";

        $sql_mostrar = "SELECT * FROM partidos where jornada='jornada 5'";
        $resultado = mysqli_query($conexion, $sql_mostrar);

        while ($registro = mysqli_fetch_row($resultado)) {
            echo "<tr>";
            echo "<td>" . $registro[1] . "</td>";
            echo "<td>" . $registro[2] . "</td>";
            echo "<td>" . $registro[3] . "</td>";
            echo "<td>" . $registro[4] . "</td>";
            echo "<td>" . $registro[5] . "</td>";
            echo "<td>" . $registro[6] . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
        </table>
        <div id=boton1>
            <a href="seleccionar_equipo.php"><p class="boton_equi">Seleccionar equipo</p></a>
        </div>
    </div>
<?php
    include "footer.php"
?>
