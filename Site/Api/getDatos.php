<?php 
header('Content-Type: application/json; charset=utf-8');
include 'Conect.php'; 

$id_categoria = $_GET["id_categoria"];


    $queryResult = $conn->query("SELECT * FROM `lugares` WHERE id_categoria = $id_categoria");

    $result = array();
    
    while($fetchData=$queryResult->fetch_assoc()){
        $result [] = $fetchData;
    }
    
    echo json_encode($result);
    

?>