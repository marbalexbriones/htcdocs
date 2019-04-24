<?php
session_start();
include('conexion.php');

if(isset($_GET['id']))
{
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
    $sql = "DELETE FROM `madres` WHERE id = :id";

    $sentencia = $conexion->prepare($sql);
    $sentencia->bindValue(':id',$id);
    $resultado = $sentencia->execute();
}

header("Location: madres.php");
?>