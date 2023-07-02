<?php

include_once("../config/conexion.php");

$Id = $_REQUEST['id'];

$sql ="DELETE FROM comentarios WHERE id ='$Id'";

$query = mysqli_query($conexion, $sql);

if($query){
    header('Location: ../comentarios.php');
}

?>