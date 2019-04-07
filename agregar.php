<?php
    include 'conexion.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $materia = $_POST['materia'];
        $calificacion = $_POST['calificacion'];
        $sql = "INSERT INTO calificaciones (id,materia,calificacion) VALUES (NULL,'$materia','$calificacion')";
        $resultado = $conexion->query($sql);
        var_dump($resultado);
        if($resultado == false){
            die("Error al insertar en base de datos");
        }
        header("Location: index.php");
    }
    

?>


<?php include 'encabezado.php'; ?>
      <form action="" method = "POST">
        
        
        <div class="form-group" >
          <label for="materia">Materia</label>
          <input type="text" name="materia" id="materia" class="form-control" placeholder="" aria-describedby="helpId">
          <label for="calificacion">Calificacion</label>
          <input type="number" name="calificacion" id="calificacion" class="form-control" placeholder="" aria-describedby="helpId">

        <div class = "mt-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
          <button type="submit" class="btn btn-warning">
        <a href="index.php" class = "text-light">Cancelar</a>
        </button>
        </div>
          
        </div>
        </form>
        
<?php include 'pie.php'; ?>