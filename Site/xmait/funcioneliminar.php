<?php

include "../config/conexion.php";

$Id = $_REQUEST['id'];

$sql = "DELETE FROM xmait Where id = $Id";

$resultado = $conexion->query($sql);

if ($resultado) {
    header("Location: ../xmait.php");
} else {
    echo "No se elimino el dato";
}

?>