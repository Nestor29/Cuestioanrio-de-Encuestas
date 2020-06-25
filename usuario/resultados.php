<?php 
	include '../conexion.php';
	$id_resultado = $_GET['id_resultado'];

	/* Consulta para extraer título y descripción de la encuesta*/
	$query = "SELECT * FROM encuestas WHERE estado = 1 ";
	$qencuestas = $con->query($query) or die($con->error);
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
		<hr/>
		<div class="container text-center">
			<h1>SEGMENTOS</h1>
			<p>Reporte General</p>
		</div>
		<hr/>

	<?php
	$i = 0; 
	while ($encuestas = $qencuestas->fetch_array()) {
	
		$id_segmento = $encuestas['id_encuesta'];

		/*TITULO*/
		echo "<h3>" . $encuestas['titulo'] . "</h3>";

		$cantidades = array();
		$titulos = array();
		$tamano = array();
		
		$query_resultados = "SELECT p.titulo,r.puntos FROM resultados as r 
							INNER JOIN preguntas as p ON r.id_pregunta = p.id_pregunta
							WHERE r.id_encuesta = '".$id_segmento."' AND r.id_usuario = '".$_GET['id_resultado']."' ";

		$resultados2 = $con->query($query_resultados);

		if($resultados2->num_rows==0){ 
			echo '<div class="col-md-6">No se ha contestado</div>'; 
		}else{
		
			?>
			<div class="row">
				<div class="col-md-6">
					Preguntas: </br>
				
			<?php

			$j = 1;
			while ($respuestas = $resultados2->fetch_array()) {
				echo $tit = $j;
				echo $tit2 = ".- ".$respuestas['titulo']."</br>";
		?>
		
		<input type="hidden" class="titulo<?php echo $i+1 ?>" value="<?php echo $tit; ?>">
		<input type="hidden" class="tamano<?php echo $i+1 ?>" value="<?php echo $respuestas['puntos']; ?>">
			
		<?php  	$j++;
			}  
		?>
		</div>
		<div class="col-md-6">
			
			<div class="container chart" style="width: 50%; margin: 0 auto; width: 400px;">		
				<canvas class="oilChart<?php echo $i+1 ?>" width="600" height="400"></canvas>
			</div>
		</div>

		<?php 
		}		
		$i++;
		echo '</div>';
	}
  	?>
	
	

	<div class="container text-center" style="margin-bottom: 20px">
		<!--a href="reporte.php" class="btn btn-primary" target="_blank">GENERAR REPORTE</a-->
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