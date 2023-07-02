<?php 
header('Content-Type: application/json; charset=utf-8');
include 'Conect.php'; 

$idLugar = $_GET["idLugar"];

    $queryResult = $conn->query("SELECT id, descripcion, idLugar, imagen FROM `trincheras` WHERE idLugar = $idLugar");

    $result = array();
    
    while($fetchData=$queryResult->fetch_assoc()){
        $result [] = $fetchData;
    }
    
    echo json_encode($result);


?>