<?php

include "../config/conexion.php";

$descripcion = $_POST["Descripcion"];


$imagen = $_FILES['imagen']['name'];
$image_temp =$_FILES['imagen']['tmp_name'];
move_uploaded_file($image_temp, "C:/xampp/htdocs/SartenejasII/Site/img/" .$imagen);


// Insertar el path de la imagen en la base de datos
$query = "INSERT INTO trincheras (descripcion,imagen) VALUES ('$descripcion','$imagen')";

$resultado = $conexion->query($query);


if ($resultado) {
    header('Location: ../trincheras.php');
} else {
    echo "No se insertaron los datos";
}


