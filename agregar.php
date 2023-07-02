<?php

include "config/conexion.php";

$nombre = $_POST["Nombre"];
$descripcion = $_POST["Descripcion"];
$imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

$sql = "INSERT INTO imginicio (Nombre, Descripcion, Imagen) VALUES ('$nombre', '$descripcion', '$imagen')";

$resultado = $conexion->query($sql);

if ($resultado) {
    header('Location: inicio.php');
} else {
    echo "No se insertaron los datos";
}