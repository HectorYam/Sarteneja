<?php

error_reporting(1);


include "../config/conexion.php";

$root = $_SERVER['DOCUMENT_ROOT'];
$root = $root.'/sartenejasii/Site/';

//echo $root;

$id = $_REQUEST['idEditar'];

$Nombre = $_POST['Nombre'];
$Descripcion = $_POST['Descripcion'];

$imagen = $_FILES['Imagen']['name'];
$image_temp =$_FILES['Imagen']['tmp_name'];

$filePath = $root.'img/'.$imagen;

//echo $filePath;

$move = move_uploaded_file($image_temp, $filePath);

if(!$move) echo 'Error al guardar';


//$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

$sql = "UPDATE trincheras SET descripcion='$Descripcion', imagen = '$imagen' WHERE id = '$id'";

$resultado = $conexion->query($sql);

if ($resultado) {
    header('Location: ../trincheras.php');
} else {
    echo "No se edito el dato";
}