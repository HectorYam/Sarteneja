<?php

include "../config/conexion.php";

$Id = $_REQUEST['id'];

$sql = "DELETE FROM centro Where id = $Id";

$resultado = $conexion->query($sql);

if ($resultado) {
    header("Location: ../centro.php");
} else {
    echo "No se elimino el dato";
}

?>