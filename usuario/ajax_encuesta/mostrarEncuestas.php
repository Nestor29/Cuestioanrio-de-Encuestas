
<?php
session_start();   // Necesitamos una sesion

// Incluimos el archivo de conexión a base de datos
include ("../../conexion.php");

$query = "SELECT * FROM encuestas WHERE estado = '1'";
$resultado = $con->query($query);
$tamaño = $resultado->num_rows;

$data = "";

if ($tamaño == 0) {
    $data .= "No hay encuestas disponibles";
} elseif ($tamaño > 0) {

// Diseñamos el encabezado de la tabla
$data = '
    <table class="table table-bordered table-hover table-condensed">
        <thead class="thead-dark">
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Fecha Final</th>
                <th>Accciones</th>
            </tr>
        </thead>';

while ($row = $resultado->fetch_assoc()) {
    $query = "SELECT * FROM resultados WHERE id_usuario = '". $_SESSION['id_usuario'] ."' AND id_encuesta = '".$row['id_encuesta']."' limit 1 ";
    $res = $con->query($query);
    $encontrado = $res->num_rows;  
    
    $showBoton = $encontrado >= 1 ? 'Terminada' : '<a class="btn btn-primary" href="responder.php?id_encuesta=' . $row['id_encuesta'] . '">Responder</a>';
    $data .= '
        <tbody>
            <tr>
                <td>' . $row['titulo'] . '</td>
                <td>' . $row["descripcion"] . '</td>
                <td>' . $row["fecha_final"] . '</td>
                <td>
                    <a class="btn btn-primary" onClick="desactivaBoton(this.id)" href="responder.php?id_encuesta=' . $row['id_encuesta'] . '">Responderr</a>
                </td>
            </tr>
        </tbody>';
}


$data .= '</table>';

}

echo $data;