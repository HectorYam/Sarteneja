<?php

include "../config/conexion.php";

$Id = $_REQUEST['id'];

$sql = "DELETE FROM platanal Where id = $Id";

$resultado = $conexion->query($sql);

if ($resultado) {
    header("Location: ../platanal.php");
} else {
    echo "No se elimino el dato";
}

?>