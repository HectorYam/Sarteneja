<?php

include "../config/conexion.php";

$nombre = $_POST["Nombre"];
$descripcion = $_POST["Descripcion"];
$telefono = $_POST["Telefono"];
$imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

$sql = "INSERT INTO establecimiento (nombre, descripcion, telefono, imagen) VALUES ('$nombre', '$descripcion', '$telefono', '$imagen')";

$resultado = $conexion->query($sql);

if ($resultado) {
    header('Location: ../establecimientos.php');
} else {
    echo "No se insertaron los datos";
}