<?php
session_start();
include('conexion.php');

?>

<?php include('encabezado.php');?>

<div class="container mt-3 ">

<div id="carouselExampleControls" class="carousel slide mb-3" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 img-fluid" height="200px" src="/maquetas/iimgsrc/images.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="/maquetas/iimgsrc/images.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="/maquetas/iimgsrc/images.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

<!-- Three columns of text below the carousel -->
<div class="row">
<div class="col-md-3">
    <img class="rounded-circle" src="/maquetas/iimgsrc/mama.jpg" alt="Generic placeholder image" width="140"
        height="140">
    <h3>Madres</h3>
    <p>
        <a class="btn btn-secondary" href="madres.php" role="button">Ver información</a>
    </p>
</div>
<!-- /.col-lg-3 -->
<div class="col-md-3">
    <img class="rounded-circle" src="/maquetas/iimgsrc/bebe.jpg" alt="Generic placeholder image" width="140"
        height="140">
    <h3>Infantes</h3>
    <p>
        <a class="btn btn-secondary" href="infantes.php" role="button">Ver información</a>
    </p>
</div>
<!-- /.col-lg-3 -->
<div class="col-md-3">
    <img class="rounded-circle" src="/maquetas/iimgsrc/medico.jpg" alt="Generic placeholder image" width="140"
        height="140">
    <h3>Médicos</h3>
    <p>
        <a class="btn btn-secondary" href="medicos.php" role="button">Ver información</a>
    </p>
</div>
<!-- /.col-lg-3 -->
<div class="col-md-3">
    <img class="rounded-circle" src="/maquetas/iimgsrc/papa.jpg" alt="Generic placeholder image" width="140"
        height="140">
    <h3>Padres</h3>
    <p>
        <a class="btn btn-secondary" href="padres.php" role="button">Ver información</a>
    </p>
</div>
<!-- /.col-lg-3-->
</div>
<!-- /.row -->

</div>

<?php include('pie.php');?>