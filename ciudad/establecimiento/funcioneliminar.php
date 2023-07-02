<?php

include "../config/conexion.php";

$Id = $_REQUEST['id'];

$sql = "DELETE FROM establecimiento Where id = $Id";

$resultado = $conexion->query($sql);

if ($resultado) {
    header("Location: ../establecimientos.php");
} else {
    echo "No se elimino el dato";
}

?>