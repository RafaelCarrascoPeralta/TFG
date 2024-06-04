<?php
include "header.php";

$usu = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$basededatos = "federacion";
include "conexion.php";

$sql_admin = "SELECT * FROM administrador WHERE usuario = ? AND contraseña = ?";
$stmt = $conexion->prepare($sql_admin);
$stmt->bind_param("ss", $usu, $contraseña);
$stmt->execute();
$result = $stmt->get_result();

?>

<div id=content>
<?php
if ($result->num_rows > 0) {
    header("Location: /federacion/admin/index.php");
    exit();
} else {
    echo "<p>Error: usuario o contraseña incorrectos.</p>";
}
?>
</div>

<?php
include "footer.php";
?>
