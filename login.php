<?php
  session_start();   // Necesitamos una sesion
  if(isset($_SESSION['u_usuario'])){  // comparamos si existe
    header("Location: validacion.php"); // si existe, lo redireccionamos a sesion.php
  }
  else{
    session_destroy();  // si no existe, destruimos sesion
  }
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

  <!-- My Styles -->
  <link rel="stylesheet" href="css/login.css">

  <title>Diagnóstico del estatus de tu negocio</title>
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">Diagnóstico del estatus de tu negocio</a>
      <!--
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
        <span class="navbar-toggler-icon"></span>
      </button>
      -->

      <!--NAVBAR-->
      <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav mr-auto">
          <!--
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="javascript:void(0)">Disabled</a>
          </li>
          -->
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <!--
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          -->
          <!--
          <a class="btn btn-primary" href="login.html" role="button">Ingresar</a>
          -->
        </form>
      </div>
    </nav>

    <!--LOGIN-->

     <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="imagenes/login.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="validacion.php" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus name="id_usuario">
                <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required name="clave">
                <div id="remember" class="checkbox">
                    <!--
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                     -->
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Ingresar</button>
                <!--
                  <input type="submit" name="" value="Ingresar">
                -->
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->

    <!-- Footer -->
    <footer class="page-footer font-small" style="background-color: #343A40; color: #FFF; margin-top: 150px">

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