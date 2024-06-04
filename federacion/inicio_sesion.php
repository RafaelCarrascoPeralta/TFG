<?php
include "header.php";

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
$sql_admin = "SELECT * FROM administrador WHERE usuario = ? AND contraseña = ?";

// Preparar la consulta
if ($stmt = $conexion->prepare($sql_admin)) {
    // Enlazar parámetros
    $stmt->bind_param("ss", $usu, $contraseña);

    // Ejecutar la consulta
    $stmt->execute();

    // Obtener el resultado
    $result = $stmt->get_result();
    ?>

    <div id="content">
    <?php
    if ($result->num_rows > 0) {
        // Redireccionar si se encuentra el usuario
        header("Location: /admin/index.php");
        exit();
    } else {
        // Mostrar mensaje de error si no se encuentra el usuario
        echo "<p>Error: usuario o contraseña incorrectos.</p>";
    }
    ?>
    </div>

    <?php
    // Cerrar la declaración
    $stmt->close();
} else {
    // Mostrar mensaje de error si la preparación de la consulta falla
    die("Error en la preparación de la consulta: " . $conexion->error);
}

// Cerrar la conexión
$conexion->close();
?>

<?php
include "footer.php";
?>

