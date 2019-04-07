<?php 
include 'conexion.php';
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM usuarios WHERE usuario = '$user' AND contrasena = '$pass'";
    $datos = ($conexion->query($sql))->fetch(PDO::FETCH_NUM);
        

    var_dump($datos);
    if($datos == false){
        echo '<div class="alert alert-danger">
        <strong>Cuidado!</strong> Contraseña incorrecta.
        </div>';
    }
    else{
        $_SESSION['user'] = $user;
        header("Location: menu.php");
    }
    
}


?>

<?php include 'encabezado.php'; ?>

<div class="container">

    <?php if(isset($_SESSION['usuario'])): ?>
        header("Location: menu.php");
    <?php else : ?>
        <form method="post">
        <div class="form-group">
            <label for="user">Nombre de usuario:</label>
            <input type="text" class="form-control" name="user" id="user" aria-describedby="emailHelp" placeholder="Introducir correo">
        </div>
        <div class="form-group">
            <label for="pass">Contraseña:</label>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Contraseña">
        </div>
        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </form>
    <?php endif ?>

    
</div>

<?php include 'pie.php'; ?>