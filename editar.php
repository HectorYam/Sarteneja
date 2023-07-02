<?php

error_reporting(1);

include "config/conexion.php";

$id = $_REQUEST['idEditar'];

$Nombre = $_POST['Nombre'];
$Descripcion = $_POST['Descripcion'];
$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

$sql = "UPDATE imginicio SET Nombre='$Nombre', Descripcion='$Descripcion', Imagen = '$Imagen' WHERE id = '$id'";

$resultado = $conexion->query($sql);

if ($resultado) {
    header('Location: inicio.php');
} else {
    echo "No se edito el dato";
}