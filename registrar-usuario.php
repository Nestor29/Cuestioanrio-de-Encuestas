
<style>
h2.txtusuario {
    text-align: center;
    font-family: arial;
    font-size: 26px;
}

h4.txtusuario2 {
    text-align: center;
    font-family: arial;
    font-size: 26px;
}
h5.txtusuario2 {
    text-align: center;
    font-family: arial;
    font-size: 26px;
}
</style>


<?php

 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "";
 $db_name = "sistema_encuestasv1";
 $tbl_name = "usuarios";
 
 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

 $buscarUsuario = "SELECT * FROM $tbl_name
 WHERE email = '$_POST[email]' ";

 $result = $conexion->query($buscarUsuario);

 $count = mysqli_num_rows($result);

 if ($count == 1) {
 echo "<br />". "El correo electronico ya existe!!!!!!!." . "<br />";

 echo "<a href='registro.php'>Por favor escoga otro Nombre</a>";
 }
 else{

 $form_email = $_POST['email'];

 $query = "INSERT INTO usuarios (id_usuario, email,clave,id_tipo_usuario,telefono,giro,colaborador)
           VALUES ('$_POST[username]', '$form_email','$_POST[password]',2,'$_POST[telefono]','$_POST[giro]','$_POST[colaborador]')";

 if ($conexion->query($query) === TRUE) {
 
 echo "<br />" . "<h2 class='txtusuario'>" . "Usuario Creado Exitosamente!" . "</h2>";
 echo "<h4 class='txtusuario2'>" . "Usuario: " . $_POST['username'] . "</h4>" . "\n\n";
 echo "<h4 class='txtusuario2'>" . "Tu clave es " . $_POST['password'] . "</h4>" . "\n\n";
 echo "<h5 class='txtusuario2'>" . "Hacer Login: " . "<a href='login.php'>Login</a>" . "</h5>"; 
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
   }
 }
 mysqli_close($conexion);
?>