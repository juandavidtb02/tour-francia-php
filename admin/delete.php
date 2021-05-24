<?php
    require '../conexionDB.php';
    $conexion = conectarbase();
    $var = $_GET['var'];
    $valor = $_GET['valor'];
    $tabla = $_GET['tabla'];
    $tabla = str_replace("'","",$tabla);
    $query = "DELETE FROM $tabla WHERE $var=$valor";
    $result = pg_query($conexion,$query);
    if(!$result){
        die("Hubo un error a la hora de eliminar el dato");
    }
    header("Location: ./user.php");
    
?>
