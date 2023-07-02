<?php

include "../config/conexion.php";

$Id = $_REQUEST['id'];

$sql = "DELETE FROM bebidas Where id = $Id";

$resultado = $conexion->query($sql);

if ($resultado) {
    header("Location: ../bebidas.php");
} else {
    echo "No se elimino el dato";
}

?>