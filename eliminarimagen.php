<?php

include "config/conexion.php";

$Id = $_REQUEST['id'];

$sql = "DELETE FROM imginicio Where id = $Id";

$resultado = $conexion->query($sql);

if ($resultado) {
    header("Location: inicio.php");
} else {
    echo "No se elimino el dato";
}

?>