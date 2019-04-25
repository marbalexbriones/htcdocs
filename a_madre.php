<?php 
session_start();
include('conexion.php');
$errores = "";

if($_SERVER['REQUEST_METHOD'] == 'GET')
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

    else
    {
        $to_show = $datos[0];
    }
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $a_paterno = filter_input(INPUT_POST, 'a_paterno', FILTER_SANITIZE_STRING);
    $a_materno = filter_input(INPUT_POST, 'a_materno', FILTER_SANITIZE_STRING);
    $fecha_nacimiento = filter_input(INPUT_POST, 'fecha_nacimiento', FILTER_SANITIZE_STRING);
    $nacionalidad = filter_input(INPUT_POST, 'nacionalidad', FILTER_SANITIZE_STRING);
    $inicio_embarazo = filter_input(INPUT_POST, 'inicio_embarazo', FILTER_SANITIZE_STRING);
    $num_exterior = filter_input(INPUT_POST, 'num_exterior', FILTER_SANITIZE_STRING);
    $calle = filter_input(INPUT_POST, 'calle', FILTER_SANITIZE_STRING);
    $colonia = filter_input(INPUT_POST, 'colonia', FILTER_SANITIZE_STRING);
    $cod_postal = filter_input(INPUT_POST, 'cod_postal', FILTER_SANITIZE_STRING);
    $habitacion = filter_input(INPUT_POST, 'habitacion', FILTER_SANITIZE_STRING);
    $med_nombre = filter_input(INPUT_POST, 'med_nombre', FILTER_SANITIZE_STRING);
    $med_a_paterno = filter_input(INPUT_POST, 'med_a_paterno', FILTER_SANITIZE_STRING);
    $med_a_materno = filter_input(INPUT_POST, 'med_a_materno', FILTER_SANITIZE_STRING);
    
    if(isset($_POST['id']))
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
        $sql = "UPDATE madres
        SET nombre = '$nombre',
        a_paterno = '$a_paterno',
        a_paterno='$a_paterno',
        a_materno='$a_materno',
        fecha_nacimiento='$fecha_nacimiento',
        nacionalidad='$nacionalidad',
        inicio_embarazo='$inicio_embarazo',
        num_exterior='$num_exterior',
        calle='$calle',
        colonia='$colonia',
        cod_postal='$cod_postal',
        habitacion='$habitacion',
        med_nombre='$med_nombre',
        med_a_paterno='$med_a_paterno',
        med_a_materno='$med_a_materno'

        WHERE id = '$id'";
    }
    else
    {
        $sql = "INSERT INTO `madres` (`id`, `nombre`, `a_paterno`, `a_materno`, `fecha_nacimiento`, `nacionalidad`, `inicio_embarazo`, `num_exterior`,`calle`, `colonia`, `cod_postal`, `habitacion`, `med_nombre`, `med_a_paterno`, `med_a_materno`) 
        VALUES (NULL, :nombre, :a_paterno, :a_materno, :fecha_nacimiento, :nacionalidad, :inicio_embarazo, :num_exterior, :calle, :colonia, :cod_postal, :habitacion, :med_nombre, :med_a_paterno, :med_a_materno);";
    }

    
    
    $sentencia = $conexion->prepare($sql);
    //var_dump("sentencia");


    if(isset($_POST['id']))
    {
        $sentencia->bindValue(':id',$id);
        //var_dump($sentencia);
    }

    $sentencia->bindValue(':nombre',$nombre);
    $sentencia->bindValue(':a_paterno',$a_paterno);
    $sentencia->bindValue(':a_materno',$a_materno);
    $sentencia->bindValue(':fecha_nacimiento',$fecha_nacimiento);
    $sentencia->bindValue(':nacionalidad',$nacionalidad);
    $sentencia->bindValue(':inicio_embarazo',$inicio_embarazo);
    $sentencia->bindValue(':num_exterior',$num_exterior);
    $sentencia->bindValue(':colonia',$colonia);
    $sentencia->bindValue(':cod_postal',$cod_postal);
    $sentencia->bindValue(':habitacion',$habitacion);
    $sentencia->bindValue(':med_nombre',$med_nombre);
    $sentencia->bindValue(':med_a_paterno',$med_a_paterno);
    $sentencia->bindValue(':med_a_materno',$med_a_materno);
    $sentencia->bindValue(':calle',$calle);

    var_dump($sentencia);
    $resultado = $sentencia->execute();

    $datos = $sentencia->fetchObject();
    
    if($resultado !== false)
    {
        header("Location: madres.php");
    }
    else
    {
        $errores = "Ocurrió un error!";
    }
    
}
?>

<?php include('encabezado.php');?>
<?php if($errores != ""): ?>
    <div class="container alert alert-danger">
    <?=$errores?>
    </div>'
<?php endif ?>
<h3 class="ml-5 mt-3">Agregar nuevo registro:</h3>
        <div class="container mt-3">

            <form action="" method="post">
                <?php if(isset($to_show)): ?>
                    <input id="id" name="id" type="hidden" value="<?=$to_show['id']?>">
                    <h5 class="mt-3">Información personal:</h5>
                    <div class="form-group ml-3">
                        <label for="nombre">Nombre(s):</label>
                        <input type="text" placeholder="Nombre" class="form-control" id="nombre" name="nombre" value="<?=$to_show['nombre']?>" required autofocus>
                    </div>
                    <div class="form-group ml-3">
                        <label for="a_paterno">Apellido paterno:</label>
                        <input type="text" placeholder="Apellido paterno" class="form-control" id="a_paterno" name="a_paterno" value="<?=$to_show['a_paterno']?>" required>
                    </div>
                    <div class="form-group ml-3">
                        <label for="a_materno">Apellido materno:</label>
                        <input type="text" placeholder="Apellido materno" class="form-control" id="a_materno" name="a_materno" value="<?=$to_show['a_materno']?>" required>
                    </div>
                    <div class="form-group ml-3">
                        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                        <input type="date"  class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="<?=$to_show['fecha_nacimiento']?>" required>
                    </div>

                    <div class="form-group ml-3">
                        <label for="nacionalidad">Nacionalidad:</label>
                        <input type="text" placeholder="Nacionalidad" class="form-control" id="nacionalidad" name="nacionalidad" value="<?=$to_show['nacionalidad']?>" required>
                    </div>
                    <div class="form-group ml-3">
                        <label for="inicio_embarazo">Inicio de embarazo:</label>
                        <input type="date" class="form-control" id="inicio_embarazo" name="inicio_embarazo" value="<?=$to_show['inicio_embarazo']?>" required>
                    </div>
                    <h5 class="mt-3">Información de domicilio:</h5>
                    <div class="form-group ml-3">
                        <label for="calle">Calle:</label>
                        <input type="text" placeholder="Calle" class="form-control" id="calle" name="calle" value="<?=$to_show['calle']?>" required>
                    </div>
                    <div class="form-group ml-3">
                        <label for="num_exterior">Número exterior:</label>
                        <input type="text" placeholder="Número exterior" class="form-control" id="num_exterior"  name="num_exterior" value="<?=$to_show['num_exterior']?>" required>
                    </div>
                    <div class="form-group ml-3">
                        <label for="colonia">Colonia:</label>
                        <input type="text" placeholder="Colonia" class="form-control" id="colonia" name="colonia" value="<?=$to_show['colonia']?>" required>
                    </div>
                    <div class="form-group ml-3">
                        <label for="cod_postal">Código postal:</label>
                        <input type="text" placeholder="Código postal" class="form-control" id="cod_postal" name="cod_postal" value="<?=$to_show['cod_postal']?>" required>
                    </div>
                    <h5 class="mt-3">Información interna:</h5>
                    <div class="form-group ml-3">
                        <label for="habitacion">Habitación:</label>
                        <input type="text" placeholder="Habitación" class="form-control" id="habitacion" name="habitacion" value="<?=$to_show['habitacion']?>" required>
                    </div>
                    <h6 class="mt-3 ml-2">Médico responsable:</h6>
                    <div class="form-group ml-3">
                        <label for="med_nombre">Nombre:</label>
                        <input type="text" placeholder="Nombre" class="form-control" id="med_nombre" name="med_nombre" value="<?=$to_show['med_nombre']?>" required>
                    </div>
                    <div class="form-group ml-3">
                        <label for="med_a_paterno">Apellido paterno:</label>
                        <input type="text" placeholder="Apellido paterno" class="form-control" id="med_a_paterno" name="med_a_paterno" value="<?=$to_show['med_a_paterno']?>" required>
                    </div>
                    <div class="form-group ml-3">
                        <label for="med_a_materno">Apellido materno:</label>
                        <input type="text" placeholder="Apellido materno" class="form-control" id="med_a_materno" name="med_a_materno" value="<?=$to_show['med_a_materno']?>" required>
                    </div>
                <?php else: ?>
                    <h5 class="mt-3">Información personal:</h5>
                    <div class="form-group ml-3">
                        <label for="nombre">Nombre(s):</label>
                        <input type="text" placeholder="Nombre" class="form-control" id="nombre" name="nombre" required autofocus>
                    </div>
                    <div class="form-group ml-3">
                        <label for="a_paterno">Apellido paterno:</label>
                        <input type="text" placeholder="Apellido paterno" class="form-control" id="a_paterno" name="a_paterno" required>
                    </div>
                    <div class="form-group ml-3">
                        <label for="a_materno">Apellido materno:</label>
                        <input type="text" placeholder="Apellido materno" class="form-control" id="a_materno" name="a_materno" required>
                    </div>
                    <div class="form-group ml-3">
                        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                        <input type="date"  class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                    </div>

                    <div class="form-group ml-3">
                        <label for="nacionalidad">Nacionalidad:</label>
                        <input type="text" placeholder="Nacionalidad" class="form-control" id="nacionalidad" name="nacionalidad" required>
                    </div>
                    <div class="form-group ml-3">
                        <label for="inicio_embarazo">Inicio de embarazo:</label>
                        <input type="date" class="form-control" id="inicio_embarazo" name="inicio_embarazo" required>
                    </div>
                    <h5 class="mt-3">Información de domicilio:</h5>
                    <div class="form-group ml-3">
                        <label for="calle">Calle:</label>
                        <input type="text" placeholder="Calle" class="form-control" id="calle" name="calle" required>
                    </div>
                    <div class="form-group ml-3">
                        <label for="num_exterior">Número exterior:</label>
                        <input type="text" placeholder="Número exterior" class="form-control" id="num_exterior" name="num_exterior" required>
                    </div>
                    <div class="form-group ml-3">
                        <label for="colonia">Colonia:</label>
                        <input type="text" placeholder="Colonia" class="form-control" id="colonia" name="colonia" required>
                    </div>
                    <div class="form-group ml-3">
                        <label for="cod_postal">Código postal:</label>
                        <input type="text" placeholder="Código postal" class="form-control" id="cod_postal" name="cod_postal" required>
                    </div>
                    <h5 class="mt-3">Información interna:</h5>
                    <div class="form-group ml-3">
                        <label for="habitacion">Habitación:</label>
                        <input type="text" placeholder="Habitación" class="form-control" id="habitacion" name="habitacion" required>
                    </div>
                    <h6 class="mt-3 ml-2">Médico responsable:</h6>
                    <div class="form-group ml-3">
                        <label for="med_nombre">Nombre:</label>
                        <input type="text" placeholder="Nombre" class="form-control" id="med_nombre" name="med_nombre" required>
                    </div>
                    <div class="form-group ml-3">
                        <label for="med_a_paterno">Apellido paterno:</label>
                        <input type="text" placeholder="Apellido paterno" class="form-control" id="med_a_paterno" name="med_a_paterno" required>
                    </div>
                    <div class="form-group ml-3">
                        <label for="med_a_materno">Apellido materno:</label>
                        <input type="text" placeholder="Apellido materno" class="form-control" id="med_a_materno" name="med_a_materno" required>
                    </div>
                <?php endif; ?>
                

                <div class="row justify-content-right d-flex">
                    <div class="col-4 ml-auto ">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="cancel" class="btn btn-danger" onclick="window.location='madres.php';return false;">Cancelar</button>
                    </div>
                </div>
            </form>
            <br>
        </div>

<?php include('pie.php');?>