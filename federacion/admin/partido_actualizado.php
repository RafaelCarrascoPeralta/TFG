<?php

include "header.php";

$codigo = $_POST['codigo'];
$jornada = $_POST['jornada'];
$local = $_POST['local'];
$dia = $_POST['dia'];
$hora = $_POST['hora'];
$visitante = $_POST['visitante'];
$lugar = $_POST['lugar'];
$resultado = $_POST['resultado']; // Asegúrate de recibir el resultado del formulario
$basededatos = "federacion";

include "conexion.php";
?>
    <div id=admin>
                        <a href="#"><img src=".\imagen\admin.png" width="25px">Admin</a>
                        <form id="cerrar_sesion" action="../index.php" method="post" enctype="multipart/form-data">
                            <input type="submit" name="enviar" value="Cerrar Sesion">
                        </form>
              
    </div>
    

<div id=content>
    <div id=mensaje>

        <?php

        // Verificar si el campo de resultado no está vacío
        if ($resultado !== "") {
            $modificar = "UPDATE partidos SET jornada='$jornada', nombre_equipo='$local', dia='$dia', hora='$hora', visitante='$visitante', lugar='$lugar', resultados='$resultado' where cod_partido='$codigo'";
        } else {
            $modificar = "UPDATE partidos SET jornada='$jornada', nombre_equipo='$local', dia='$dia', hora='$hora', visitante='$visitante', lugar='$lugar' where cod_partido='$codigo'";
        }

        $resultado = mysqli_query($conexion, $modificar);

        if ($resultado) {
            echo "Los datos se actualizaron correctamente";
        } else {
            echo "Error al actualizar los datos: " . mysqli_error($conexion);
        }

        ?>

    </div>
</div>

<?php
include "footer.php";
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
