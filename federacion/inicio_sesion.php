<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./css/estilos.css">
        <title>Federacion Andaluza de Baloncesto</title>
    </head>
    <body>
        <header>
            <div id="logo_cabecera">
                <img src="./imagen/Logo-FAB.png" width="250px">
            </div>
            <div id="navegador">
                <div id="nav_menu">
                    <a href="index.php"><img src="./imagen/casa.png" width="25px">Inicio</a>
                </div>
                <div id="nav_menu">
                    <a href="equipos.php"><img src="./imagen/usuario.png" width="25px">Equipos</a>
                </div>
                <div id="nav_menu">
                    <a href="partidos.php"><img src="./imagen/calendario.png" width="25px">Partidos</a>
                </div>
                <div id="nav_menu">
                    <a href="clasificacion.php"><img src="./imagen/clasificacion.png" width="25px">Clasificacion</a>
                </div>
            </div>
        </header>
        <main>

<?php

$usu = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

// Nombre de la base de datos
$basededatos = "federacion";

// Incluir y verificar la conexión
include "conexion.php";

// Verificar si la conexión fue exitosa
if ($conexion->connect_error) {
    die("Falló la conexión: " . $conexion->connect_error);
}

// Consulta SQL
$sql_admin = "SELECT * FROM administrador WHERE usuario = ?";

// Preparar la consulta
if ($stmt = $conexion->prepare($sql_admin)) {
    // Enlazar parámetros
    $stmt->bind_param("s", $usu);

    // Ejecutar la consulta
    $stmt->execute();

    // Obtener el resultado
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Obtener el primer resultado
        $row = $result->fetch_assoc();

        // Verificar la contraseña
        if (password_verify($contraseña, $row['contraseña'])) {
            // Redireccionar si la contraseña es correcta
            header("Location:/var/www/html/admin/index.php");
            exit(); // Asegura que el script se detenga después de la redirección
        } else {
            // Mostrar mensaje de error si la contraseña es incorrecta
            echo "<div id='content'>";
            echo "<div id='mensaje'>";
            echo "<p>Error: contraseña incorrecta.</p>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        // Mostrar mensaje de error si el usuario no se encuentra
        echo "<div id='content'>";
        echo "<div id='mensaje'>";
        echo "<p>Error: usuario no encontrado.</p>";
        echo "</div>";
        echo "</div>";
    }

    // Cerrar la declaración
    $stmt->close();
} else {
    // Mostrar mensaje de error si la preparación de la consulta falla
    die("Error en la preparación de la consulta: " . $conexion->error);
}

// Cerrar la conexión
$conexion->close();

?>

        </main>
        <footer>
            <div id="pie_pagina">
                <div id="datos">
                    <address>
                        <p>__________________________________________</p>
                        <p>Avenida de la Constitución 20</p>
                        <p>Edif la Pirámide Local 6C, 18012 Granada</p>
                        <p>958 21 54 93</p>
                        <p>javier.simon@baloncestoandalucia.org</p>
                        <p>__________________________________________</p>
                    </address>
                </div>
                <div id="instituto">
                    <p>FEDERACION GRANADINA DE BALONCESTO</p>
                    <img src="./imagen/Logo-FAB_footer.png" width="190px">
                </div>
                <div id="redes">
                    <a href="https://www.instagram.com/andaluzabaloncesto/?hl=es" target="_blank"><img src="./imagen/instagram.png" width="50px"></a>
                    <a href="https://www.facebook.com/andaluzabaloncesto" target="_blank"><img src="./imagen/facebook.png" width="50px"></a>
                    <a href="https://www.youtube.com/@andaluzabaloncesto/featured" target="_blank"><img src="./imagen/youtube.png" width="50px"></a>
                </div>
            </div>
        </footer>
    </body>
</html>
