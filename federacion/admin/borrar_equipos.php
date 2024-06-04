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
    <h2>BAJA EQUIPO</h2>
</div>
<div id=content_equipos>

    <table border=1>
        <thead>
            <tr>
                <th>LOGO</th>
                <th>NOMBRE</th>
                <th>LOCALIDAD</th>
                <th>DIA PARTIDO</th>
                <th>HORA PARTIDO</th>
                <th>COLOR EQUIPACION</th>
                <th>LUGAR ENCUENTRO</th>
                <th>CORREO</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php

            $basededatos = "federacion";

            include "conexion.php";

            $sql_mostrar = "SELECT * FROM equipos";
            $resultado = mysqli_query($conexion, $sql_mostrar);

            while ($registro = mysqli_fetch_row($resultado)) {
                echo "<tr>";
                echo "<td><img width=90px src='" . $registro[7] . "'></td>";
                echo "<td>" . $registro[0] . "</td>";
                echo "<td>" . $registro[1] . "</td>";
                echo "<td>" . $registro[2] . "</td>";
                echo "<td>" . $registro[3] . "</td>";
                echo "<td>" . $registro[4] . "</td>";
                echo "<td>" . $registro[5] . "</td>";
                echo "<td>" . $registro[6] . "</td>";
                // Agregar el script de confirmación al enlace de eliminación
                echo "<td><a href='baja_equipo.php?nombre_equipo=$registro[0]' onclick='return confirmarEliminacion()'><img src='recycle.png' width=50px></a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <div id=boton1>
        <a href="equipos.php"><p class="boton_equi">Volver a Equipos</p></a>
    </div>
</div>
<?php
include "footer.php"
?>
<script>
    // Función para mostrar ventana emergente de confirmación
    function confirmarEliminacion() {
        return confirm("¿Estás seguro de que deseas borrar el equipo?");
    }
</script>
