<?php

include "../config/conexion.php";

$Id = $_REQUEST['id'];

$sql = "DELETE FROM trincheras Where id = $Id";

$resultado = $conexion->query($sql);

if ($resultado) {
    header("Location: ../trincheras.php");
} else {
    echo "No se elimino el dato";
}

?>