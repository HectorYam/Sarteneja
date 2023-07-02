<?php

include_once("../config/conexion.php");

$Id = $_POST['id'];
$nombre = $_POST['Nombre'];
$comentario = $_POST['Comentarios'];

$sql ="UPDATE comentarios SET Nombre='$nombre', Comentarios='$comentario' WHERE id= '$Id'";

$query = mysqli_query($conexion, $sql);

if($query){
    header('Location: ../comentarios.php');
}

?>