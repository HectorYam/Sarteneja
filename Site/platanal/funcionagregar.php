<?php

include "../config/conexion.php";

$descripcion = $_POST["Descripcion"];
$imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

$sql = "INSERT INTO platanal (descripcion, imagen) VALUES ('$descripcion', '$imagen')";

$resultado = $conexion->query($sql);

if ($resultado) {
    header('Location: ../platanal.php');
} else {
    echo "No se insertaron los datos";
}