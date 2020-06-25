<!DOCTYPE html>
<html lang="en">

<head>
 <title>Registrar Usuario</title>
 <meta charset = "utf-8">
</head>

<body>
 <header>

 
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">
 </header> 
 
  <div class="container">
   <div class="card card-container">
 

 <form class="form-signin" action="http://localhost/sistema_v1/Cuestioanrio-de-Encuestas/usuario/index.php" method="post"> 

 <h3>Registro de Usuario </h3>
  <hr />

 <!--Nombre Usuario-->
 
 <input class="form-control" placeholder="Nombre de Usuario" type="text" name="username" maxlength="32" required>

 
  <!--Password

 <input class="form-control" type="password" placeholder="Password" name="password" maxlength="32" required>
 -->
 
  <!--Nombre Usuario

 <input class="form-control" type="password" placeholder="Verificar Password" name="verpassword" maxlength="32" required>
-->
<!--Password-->

 <input class="form-control" type="text"  placeholder="Telefono" name="telefono" required>


 <!--Password-->

 <input class="form-control" type="text" placeholder="Correo Electrónico" name="email" required>
 
 <!--Password-->

 <input class="form-control" type="text" placeholder="Giro del negocio" name="giro" required>

 
  <!--Password-->

 <input class="form-control" type="text" placeholder="Número de Colaboradores" name="colaborador" required>


 <input class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="submit" value="entrar">
 <!--borrar<input class="form-control" type="reset" name="clear" value="Borrar">-->
 </form>
 
 </div>
  </div>

 </body>
</html>