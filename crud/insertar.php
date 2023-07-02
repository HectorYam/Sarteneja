<?php

include_once('../config/conexion.php');

$NombreUsuario = $_POST['Nombre'];
$ComentarioUsuario = $_POST['Comentarios'];

$sql = "INSERT INTO comentarios(Nombre,Comentarios) VALUES ('$NombreUsuario','$ComentarioUsuario')";

$query = mysqli_query($conexion, $sql);

if($query === TRUE){
    header("Location: ../comentarios.php");
}