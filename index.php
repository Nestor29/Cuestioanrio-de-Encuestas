<?php 
date_default_timezone_set("America/Mexico_City");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Favicon - FIS -->
  <link rel="shortcut icon" href="imagenes/logo.png">

  <title>Sistema de encuestas</title>

</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="javascript:void(0)">Sistema de Encuestas</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!--NAVBAR-->
      <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav mr-auto">
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <a class="btn btn-primary" href="login.php" role="button">Ingresar</a>
        </form>
      </div>
  </nav>

    <!--CAROUSEL-->

    <div class="container" style="margin-top: 30px; margin-bottom: 30px;">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="imagenes/slider.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="imagenes/banner2.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="imagenes/fondo-sistemas.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <!-- Footer -->
    <footer class="page-footer font-small" style="background-color: #343A40; color: #FFF">

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2020 SERCA
        <br>
        <a href="https://www.lattemkt.com/" target="_blank"> latte Marketing</a>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>