<?php

error_reporting(1);

include "../config/conexion.php";

$id = $_REQUEST['idEditar'];

$Descripcion = $_POST['Descripcion'];
$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

$sql = "UPDATE postres SET descripcion='$Descripcion', imagen = '$Imagen' WHERE id = '$id'";

$resultado = $conexion->query($sql);

if ($resultado) {
    header('Location: ../postres.php');
} else {
    echo "No se edito el dato";
}