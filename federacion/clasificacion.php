<?php
    include "header.php"
?>
    <div id=sesion>
        <form id=inicio_ses action="inicio_sesion.php" method="post" enctype="multipart/form-data">
        
        <input type="text" name="usuario" value="" required>
        <input type="password" name="password" value="" required>
        <input type="submit" name="enviar" value="Iniciar sesión">
    
    </div>
    

<div id=cabecera>
    <h2>CLASIFICACION</h2>
</div>
<div id=content_equipos>

    <?php
            
    $basededatos="federacion";

    include "conexion.php";

    // Consulta para obtener los datos de los partidos
    $clasificacion = "SELECT NOMBRE_EQUIPO, VISITANTE, RESULTADOS FROM partidos";
    $result = mysqli_query($conexion, $clasificacion);

    // Inicializar arrays para almacenar los datos de los equipos
    $equipos = array();
    $partidos_ganados = array();
    $partidos_perdidos = array();
    $canastas_a_favor = array();
    $canastas_en_contra = array();
    $puntos_alcanzados = array();
    $diferencia_canastas = array(); // Array para almacenar la diferencia de canastas

    // Procesar los resultados de la consulta
    while ($row = mysqli_fetch_assoc($result)) {
        $local = $row['NOMBRE_EQUIPO'];
        $visitante = $row['VISITANTE'];
        $resultado = $row['RESULTADOS'];
        // Separar los resultados en dos variables
        $resultados_separados = explode("-", $resultado);
        $local_puntos = isset($resultados_separados[0]) ? $resultados_separados[0] : 0;
        $visitante_puntos = isset($resultados_separados[1]) ? $resultados_separados[1] : 0;

        
        // Actualizar los datos del equipo local
        if (!isset($equipos[$local])) {
            $equipos[$local] = 0;
            $partidos_ganados[$local] = 0;
            $partidos_perdidos[$local] = 0;
            $canastas_a_favor[$local] = 0;
            $canastas_en_contra[$local] = 0;
            $puntos_alcanzados[$local] = 0;
            $diferencia_canastas[$local] = 0; // Inicializar la diferencia de canastas
        }
        
        // Verificar si los resultados son válidos antes de procesarlos
        if ($local_puntos !== '' && $visitante_puntos !== '') {
            $canastas_a_favor[$local] += $local_puntos;
            $canastas_en_contra[$local] += $visitante_puntos;
            $puntos_alcanzados[$local] += $local_puntos;
            if ($local_puntos > $visitante_puntos) {
                $equipos[$local] += 2; // 2 puntos por victoria
                $partidos_ganados[$local]++;
            } else {
                $equipos[$local] += 1; // 1 punto por derrota
                $partidos_perdidos[$local]++;
            }
            $diferencia_canastas[$local] += $local_puntos - $visitante_puntos; // Calcular la diferencia de canastas
        }

        // Actualizar los datos del equipo visitante
        if (!isset($equipos[$visitante])) {
            $equipos[$visitante] = 0;
            $partidos_ganados[$visitante] = 0;
            $partidos_perdidos[$visitante] = 0;
            $canastas_a_favor[$visitante] = 0;
            $canastas_en_contra[$visitante] = 0;
            $puntos_alcanzados[$visitante] = 0;
            $diferencia_canastas[$visitante] = 0; // Inicializar la diferencia de canastas
        }
        
        // Verificar si los resultados son válidos antes de procesarlos
        if ($local_puntos !== '' && $visitante_puntos !== '') {
            $canastas_a_favor[$visitante] += $visitante_puntos;
            $canastas_en_contra[$visitante] += $local_puntos;
            $puntos_alcanzados[$visitante] += $visitante_puntos;
            if ($visitante_puntos > $local_puntos) {
                $equipos[$visitante] += 2; // 2 puntos por victoria
                $partidos_ganados[$visitante]++;
            } else {
                $equipos[$visitante] += 1; // 1 punto por derrota
                $partidos_perdidos[$visitante]++;
            }
            $diferencia_canastas[$visitante] += $visitante_puntos - $local_puntos; // Calcular la diferencia de canastas
        }
    }

    // Ordenar los equipos por puntos en orden descendente y, en caso de empate, por diferencia de canastas
    arsort($equipos);
    arsort($diferencia_canastas);

    // Mostrar la clasificación
   
    echo "<table border='1'>";
    echo "<tr><th>Posición</th><th>Equipo</th><th>Partidos ganados</th><th>Partidos perdidos</th><th>Canastas a favor</th><th>Canastas en contra</th><th>Puntos</th></tr>";
    $posicion = 1;
    foreach ($equipos as $equipo => $puntos) {
        echo "<tr>";
        echo "<td>$posicion</td>";
        echo "<td>$equipo</td>";
        echo "<td>" . (isset($partidos_ganados[$equipo]) ? $partidos_ganados[$equipo] : 0) . "</td>";
        echo "<td>" . (isset($partidos_perdidos[$equipo]) ? $partidos_perdidos[$equipo] : 0) . "</td>";
        echo "<td>" . (isset($canastas_a_favor[$equipo]) ? $canastas_a_favor[$equipo] : 0) . "</td>";
        echo "<td>" . (isset($canastas_en_contra[$equipo]) ? $canastas_en_contra[$equipo] : 0) . "</td>";
        echo "<td>$puntos</td>";
        echo "</tr>";
        $posicion++;
    }
    
    echo "</table>";

    ?>

<?php
    include "footer.php"
?>
