<?php
session_start();
include('conexion.php');

if(isset($_GET['id']))
{
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
    $sql = "SELECT * FROM `madres` WHERE id = :id";

    $sentencia = $conexion->prepare($sql);
    $sentencia->bindValue(':id',$id);
    $resultado = $sentencia->execute();

    $datos = $sentencia->fetchAll();

    if($datos == false)
    {
        echo "<script>";
        echo "window.close();";
        echo "</script>";
    }
}
?>

<!doctype html>
<html lang="es">

<head>
    <title>Maternidad</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">


    <link rel="shortcut icon" href="/maquetas/iimgsrc/icono.ico">

</head>
<main>
<body>
<div class="container mt-3">
    <div class="row">
        <div class="col-3 ml-auto">
        <button type="button" class="btn btn-primary mb-3" onclick="window.close();">Regresar</button>
        </div>
    </div>


    <table class="table">
        <tbody>
            <tr>
                <td>
                    <strong>Información personal:</strong>
                </td>
                <td>
                
                </td>

            </tr>
            <tr>
                <td>
                    No. de Paciente:
                </td>
                <td>
                    <?=$datos[0]['id']?>
                </td>
            </tr>
            <tr>
                <td>
                    Nombre:
                </td>
                <td>
                    <?=$datos[0]['nombre']?>
                </td>
            </tr>
            <tr>
                <td>
                    Apellido Paterno:
                </td>
                <td>
                    <?=$datos[0]['a_paterno']?>
                </td>
            </tr>
            <tr>
                <td>
                    Apellido Materno:
                </td>
                <td>
                    <?=$datos[0]['a_materno']?>
                </td>
            </tr>
            <tr>
                <td>
                    Fecha de Nacimiento:
                </td>
                <td>
                    <?=$datos[0]['fecha_nacimiento']?>
                </td>
            </tr>
            <tr>
                <td>
                    Nacionalidad:
                </td>
                <td>
                    <?=$datos[0]['nacionalidad']?>
                </td>
            </tr>
            <tr>
                <td>
                    Inicio de embarazo:
                </td>
                <td>
                    <?=$datos[0]['inicio_embarazo']?>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Domicio:</strong>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                    Número exterior:
                </td>
                <td>
                    <?=$datos[0]['num_exterior']?>
                </td>
            </tr>
            <tr>
                <td>
                    Colonia:
                </td>
                <td>
                    <?=$datos[0]['colonia']?>
                </td>
            </tr>
            <tr>
                <td>
                    Código postal:
                </td>
                <td>
                    <?=$datos[0]['cod_postal']?>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Información interna:</strong>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                    Habitación:
                </td>
                <td>
                    <?=$datos[0]['habitacion']?>
                </td>
            </tr>
            <tr>
                <td>
                    Nombre del Médico:
                </td>
                <td>
                    <?=$datos[0]['med_nombre']?>
                </td>
            </tr>
            <tr>
                <td>
                    Apellido P. del Médico:
                </td>
                <td>
                    <?=$datos[0]['med_a_paterno']?>
                </td>
            </tr>
            <tr>
            <td>
                    Apellido M. del Médico:
                </td>
                <td>
                    <?=$datos[0]['med_a_materno']?>
                </td>
            </tr>

        </tbody>
    </table>
<?php include('pie.php');?>