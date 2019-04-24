<?php
session_start();
include('conexion.php');
$errores = "";
    

    $sql = "SELECT * FROM madres ORDER BY id";
    
    $sentencia = $conexion->prepare($sql);

    $resultado = $sentencia->execute();

    $datos = $sentencia->fetchall();
    
    //var_dump($datos);

    if(!$resultado !== false)
    {
        $errores = "Ocurrió un error!";
    }

?>



<?php include('encabezado.php');?>
<?php if($errores != ""): ?>
    <div class="container alert alert-danger">
    <?=$errores?>
    </div>'
<?php endif ?>
<div class="container">
            <div class="row mt-3 mb-3">
                <a href="a_madre.php"><img class="mr-2" width="20px" src="/maquetas/iimgsrc/002-agregar-usuario.svg" alt="Editar">Agregar
                    nuevo registro</a>
            </div>
        </div>
        <div class = "ml-5 mr-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Paciente No.</th>
                        <th scope="col">Nombre(s)</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido materno</th>
                        <th scope="col">Inicio de embarazo</th>
                        <th scope="col">Detalles</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i = 0 ; $i < count($datos) ; $i++):  ?>
                    <tr>
                    <th scope="row"><?=$datos[$i]['id']?></th>
                        <td><?=$datos[$i]['nombre']?></td>
                        <td><?=$datos[$i]['a_paterno']?></td>
                        <td><?=$datos[$i]['a_materno']?></td>
                        <td><?=$datos[$i]['inicio_embarazo']?></td>
                        
                        <td><a href="ver_madre.php?id=<?=$datos[$i]['id']?>" target="_blank"><img width="20px" src="/maquetas/iimgsrc/binoculares.svg" alt="Ver detalles"></a>
                        </td>
                        <td><a href="a_madre.php?id=<?=$datos[$i]['id']?>"><img width="20px" src="/maquetas/iimgsrc/001-lapiz-boton-de-editar.svg" alt="Editar"></a>
                        </td>
                        <td><a href="rm_madre.php?id=<?=$datos[$i]['id']?>"><img width="20px" src="/maquetas/iimgsrc/003-boton-x.svg" alt="Eliminar"></a></td>
                        </tr>
                        <?php endfor; ?>
                </tbody>
            </table>
        </div>

<?php include('pie.php');?>