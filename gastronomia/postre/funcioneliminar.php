<?php

include "../config/conexion.php";

$Id = $_REQUEST['id'];

$sql = "DELETE FROM postres Where id = $Id";

$resultado = $conexion->query($sql);

if ($resultado) {
    header("Location: ../postres.php");
} else {
    echo "No se elimino el dato";
}

?>