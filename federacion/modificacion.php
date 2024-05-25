<?php
    include "header.php"
?>
    <div id=cabecera>
        <h2>MODIFICACION DE PARTIDOS</h2>
    </div>
    <div id=content_equipos>

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
                    <th></th>
                    <th></th>
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
            echo "<td>" . $registro[0] . "</td>";
            echo "<td>" . $registro[1] . "</td>";
            echo "<td>" . $registro[2] . "</td>";
            echo "<td>" . $registro[3] . "</td>";
            echo "<td>" . $registro[4] . "</td>";
            echo "<td>" . $registro[5] . "</td>";
            echo "<td>" . $registro[6] . "</td>";
            echo "<td>" . $registro[7] . "</td>";
            echo "<td><a href='actualizar_partido.php?cod_partido=$registro[7]'><img src='reload.png' width=50px></a></td>";
            echo "<td><a href='borrar_partido.php?cod_partido=$registro[7]' onclick='return confirmarEliminacion()'><img src='recycle.png' width=50px></a></td>";
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
                    <th></th>
                    <th></th>
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
            echo "<td>" . $registro[0] . "</td>";
            echo "<td>" . $registro[1] . "</td>";
            echo "<td>" . $registro[2] . "</td>";
            echo "<td>" . $registro[3] . "</td>";
            echo "<td>" . $registro[4] . "</td>";
            echo "<td>" . $registro[5] . "</td>";
            echo "<td>" . $registro[6] . "</td>";
            echo "<td>" . $registro[7] . "</td>";
            echo "<td><a href='actualizar_partido.php?cod_partido=$registro[7]'><img src='reload.png' width=50px></a></td>";
            echo "<td><a href='borrar_partido.php?cod_partido=$registro[7]' onclick='return confirmarEliminacion()'><img src='recycle.png' width=50px></a></td>";
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
                    <th></th>
                    <th></th>
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
            echo "<td>" . $registro[0] . "</td>";
            echo "<td>" . $registro[1] . "</td>";
            echo "<td>" . $registro[2] . "</td>";
            echo "<td>" . $registro[3] . "</td>";
            echo "<td>" . $registro[4] . "</td>";
            echo "<td>" . $registro[5] . "</td>";
            echo "<td>" . $registro[6] . "</td>";
            echo "<td>" . $registro[7] . "</td>";
            echo "<td><a href='actualizar_partido.php?cod_partido=$registro[7]'><img src='reload.png' width=50px></a></td>";
            echo "<td><a href='borrar_partido.php?cod_partido=$registro[7]' onclick='return confirmarEliminacion()'><img src='recycle.png' width=50px></a></td>";
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
                    <th></th>
                    <th></th>
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
            echo "<td>" . $registro[0] . "</td>";
            echo "<td>" . $registro[1] . "</td>";
            echo "<td>" . $registro[2] . "</td>";
            echo "<td>" . $registro[3] . "</td>";
            echo "<td>" . $registro[4] . "</td>";
            echo "<td>" . $registro[5] . "</td>";
            echo "<td>" . $registro[6] . "</td>";
            echo "<td>" . $registro[7] . "</td>";
            echo "<td><a href='actualizar_partido.php?cod_partido=$registro[7]'><img src='reload.png' width=50px></a></td>";
            echo "<td><a href='borrar_partido.php?cod_partido=$registro[7]' onclick='return confirmarEliminacion()'><img src='recycle.png' width=50px></a></td>";
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
                    <th></th>
                    <th></th>
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
            echo "<td>" . $registro[0] . "</td>";
            echo "<td>" . $registro[1] . "</td>";
            echo "<td>" . $registro[2] . "</td>";
            echo "<td>" . $registro[3] . "</td>";
            echo "<td>" . $registro[4] . "</td>";
            echo "<td>" . $registro[5] . "</td>";
            echo "<td>" . $registro[6] . "</td>";
            echo "<td>" . $registro[7] . "</td>";
            echo "<td><a href='actualizar_partido.php?cod_partido=$registro[7]'><img src='reload.png' width=50px></a></td>";
            echo "<td><a href='borrar_partido.php?cod_partido=$registro[7]' onclick='return confirmarEliminacion()'><img src='recycle.png' width=50px></a></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
        </table>
    <div id=boton1> 
        <a href="form_partidos.php"><p class="boton_equi">Añadir Partido</p></a>
    </div>
    </div>
    
<?php
    include "footer.php"
?>

<script>
    // Función para mostrar ventana emergente de confirmación
    function confirmarEliminacion() {
        return confirm("¿Estás seguro de que deseas borrar el partido?");
    }
</script>
