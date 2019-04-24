<?php 
session_start();
include('conexion.php');
$errores = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
    $pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM usuarios WHERE usuario = :usuario AND contrasena = :pass";

    $sentencia = $conexion->prepare($sql);
    $sentencia->bindValue(':usuario',$user);
    $sentencia->bindValue(':pass',$pass);
    $resultado = $sentencia->execute();
    $datos = $sentencia->fetchObject();

    if($datos !== false){
        $_SESSION['user'] = $user;
    }
    else{
        $errores = "Cuidado! Contraseña o usuario son incorrectos";
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
    <!-- Custom styles for this template -->
    <link href="/maquetas/css/sticky-footer.css" rel="stylesheet">
    <link href="/maquetas/css/login.css" rel="stylesheet">

    <link rel="shortcut icon" href="/maquetas/iimgsrc/icono.ico">

</head>

<body>


<?php if(isset($_SESSION['user'])): ?>
        <?php header("Location: menu.php"); ?>
<?php else : ?>
        <form class="form-signin" method="post">
        <?php if($errores != ""): ?>
            <div class="container alert alert-danger">
            <?=$errores?>
            </div>'
        <?php endif ?>
            <img class="mb-4" src="/maquetas/iimgsrc/LOGO.png" alt="" width="" height="98px">
            <h1 class="h3 mb-3 font-weight-normal">Identificarse:</h1>
            <label for="user" class="sr-only">Usuario</label>
            <input type="text" id="user" name="user" class="form-control" placeholder="Usuario" required autofocus>
            <label for="pass" class="sr-only">Contraseña</label>
            <input type="password" id="pass" name="pass" class="form-control" placeholder="Contraseña" required>
            <!--<div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Recordarme
                </label>
            </div>
            -->
            <button class="btn btn-lg btn-dark btn-block" type="submit">Iniciar sesión</button>
            <p class="mt-5 mb-3 text-muted justify-content-center">ConfiMed 2019 &#169;</p>
        </form>
        <?php endif ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>



</html>