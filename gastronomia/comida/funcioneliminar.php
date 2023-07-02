<?php

include "../config/conexion.php";

$Id = $_REQUEST['id'];

$sql = "DELETE FROM comidas Where id = $Id";

$resultado = $conexion->query($sql);

if ($resultado) {
    header("Location: ../comidas.php");
} else {
    echo "No se elimino el dato";
}

?>