<?php 

	include '../conexion.php';
	$id_encuesta = $_GET['id_encuesta'];

	/* Consulta para extraer título y descripción de la encuesta*/
	$query3 = "SELECT * FROM encuestas WHERE id_encuesta = '$id_encuesta'";
	$resultados3 = $con->query($query3) or die($con->error);

	$row3 = $resultados3->fetch_assoc();
	//echo json_encode($row3);
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Favicon - FIS -->
  <link rel="shortcut icon" href="../imagenes/logo.png">


  <title>Resultados</title>
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
        <form class="form-inline my-2 my-lg-0" style="color: #fff">
          
		  	<?php   
	      	session_start();
		        if (isset($_SESSION['u_usuario'])) {
		          echo "Bienvenido " . $_SESSION['u_usuario'] . "\t";

		          echo "<a href='../cerrar_sesion.php' class='btn btn-danger' style='margin-left: 10px'>Cerrar Sesión</a>";
		        } else {
		          header("Location: ../index.php");
		        }
	       ?>
        </form>
      </div>
  	</nav>

  	<div class="container" style="margin-top: 50px;">
  		
  	<?php

  	$consulta = "SELECT * FROM preguntas WHERE id_encuesta = '$id_encuesta'";
	$resultados2 = $con->query($consulta);

	 ?>

	<hr/>
	<div class="container text-center">
		<h1><?php echo $row3['titulo'] ?></h1>
		<p><?php echo $row3['descripcion'] ?></p>
	</div>
	<hr/>

	<?php
		$i = 1; 
		while ($row2 = $resultados2->fetch_assoc()) {
		
		$id_pregunta = $row2['id_pregunta'];

		/*TITULO*/
		echo "<h3>" . $row2['titulo'] . "</h3>";

		$cantidades = array();
		$titulos = array();
		$tamano = array();
		
				
		$query = "SELECT preguntas.id_pregunta, preguntas.titulo,
			/*COUNT('preguntas.titulo') as count,*/ opciones.valor, opciones.puntos 
			FROM opciones 
			INNER JOIN preguntas ON opciones.id_pregunta=preguntas.id_pregunta 
			INNER JOIN resultados ON opciones.id_opcion=resultados.id_opcion 
			WHERE preguntas.id_pregunta = '$id_pregunta' 
			/*GROUP BY opciones.valor */
			ORDER BY preguntas.id_pregunta";
		//echo $query;
		$resultados = $con->query($query);
		$row = $resultados->fetch_assoc();
		//var_dump($row);
		/*if($resultados = $con->query($query)){
			while ($row = $resultados->fetch_assoc()) {
				$cantidades[$i] = 0;
				$cantidades = $row['puntos'];
				$titulos = $row['valor'];
				
			$opciones = $i - 1;
			//for ($i = 1; $i <= $opciones; $i++) {*/

		?>

			

		<?php 
		/*$i++;
			} 
		}*/
		?>
		<input type="hidden" class="<?php echo "valor$i" ?>" value="<?php echo $row['id_pregunta'] ?>">
		<input type="hidden" class="<?php echo "titulo$i" ?>" value="<?php echo $row['valor'] ?>">
		<input type="hidden" class="<?php echo "tamano$i" ?>" value="<?php echo $row['puntos'] ?>">
		<input type="hidden" class="<?php echo "diferencia$i" ?>" value="<?php echo 100-$row['puntos'] ?>">

		<div class="container" style="width: 50%; margin: 0 auto; width: 400px;">		
			<canvas class="oilChart<?php echo $i ?>" width="600" height="400"></canvas>
		</div>

		


	<?php
		$i++;

	}
  	 ?>

	<div class="container text-center" style="margin-bottom: 20px">
		<a href="reporte.php" class="btn btn-primary" target="_blank">GENERAR REPORTE</a>
		<!--
		<a href="reporte2.php?id_encuesta=<?php echo $id_encuesta ?>" class="btn btn-primary" target="_blank">GENERAR REPORTE2</a>
		-->
	</div>



  	<!-- Optional JavaScript -->
  	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
  	<script src="../js/jquery-3.3.1.min.js"></script>
  	<script src="../js/popper.min.js"></script>
  	<script src="../js/bootstrap.min.js"></script>

	<script src="js/Chart.min.js"></script>
	<script src="js/graficas.js">
	</script>
</body>
</html>