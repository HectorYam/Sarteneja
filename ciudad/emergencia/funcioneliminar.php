<?php

include "../config/conexion.php";

$Id = $_REQUEST['id'];

$sql = "DELETE FROM emergencia Where id = $Id";

$resultado = $conexion->query($sql);

if ($resultado) {
    header("Location: ../emergencia.php");
} else {
    echo "No se elimino el dato";
}

?>