<?php

include "../config/conexion.php";

$Id = $_REQUEST['id'];

$sql = "DELETE FROM murcielago Where id = $Id";

$resultado = $conexion->query($sql);

if ($resultado) {
    header("Location: ../murcielago.php");
} else {
    echo "No se elimino el dato";
}

?>