<?php
$fuente = "mysql:host=localhost;dbname=maternidad";
$usuario = "root";
$contraseña = "";
try{
    $conexion = new PDO($fuente,$usuario,$contraseña);
    echo "Conexión estblecida";
}
catch(PDOException $ex){
    echo "Error de conexión" . $ex->getMessage();
}
?>