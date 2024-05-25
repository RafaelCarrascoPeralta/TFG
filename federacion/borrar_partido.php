<?php
    include "header.php";

    $basededatos="federacion";

    include "conexion.php";

?>

<div id=contenido>

<?php

    $partidoborrar=$_GET['cod_partido'];
    $borrar="DELETE FROM partidos WHERE cod_partido='$partidoborrar'";
    mysqli_query($conexion,$borrar);
    header("Location:modificacion.php");

?>


</div>

<?php
    include "footer.php";

?>