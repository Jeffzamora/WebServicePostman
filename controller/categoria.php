<?php
    header('Content-Type: application/json');

    require_once("../config/conexion.php");
    require_once("../models/Cetegoria.php");

    $categoria = new Categoria();

    switch($_GET["op"]){
    case "GetAll":
        $datos = $categoria->get_categoria();
        echo json_encode($datos);
        break;
    }


?>