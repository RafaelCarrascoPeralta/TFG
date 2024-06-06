<?php
// Manejar la lógica de autenticación antes de incluir cualquier HTML
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

// Inicializar la variable de mensaje de error
$error_message = "";

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
            header("Location: /admin/index.php");
            exit(); // Asegura que el script se detenga después de la redirección
        } else {
            // Establecer mensaje de error si la contraseña es incorrecta
            $error_message = "Error: contraseña incorrecta.";
        }
    } else {
        // Establecer mensaje de error si el usuario no se encuentra
        $error_message = "Error: usuario no encontrado.";
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

<?php include "header.php"; ?>

<div id='content'>
    <?php if (!empty($error_message)): ?>
        <div id='mensaje'>
            <p><?php echo $error_message; ?></p>
        </div>
    <?php endif; ?>
</div>

<?php include "footer.php"; ?>
