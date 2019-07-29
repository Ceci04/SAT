<?php
require('../config/conexion.php');
require('components/menu.php');

$numeroTarea = $_GET['numeroCaso'];

$selectTarea = "SELECT * FROM Tareas WHERE numeroTarea = '$numeroTarea'";
$resultTarea = mysqli_query($conexion, $selectTarea);

while ($row = mysqli_fetch_assoc($resultTarea)) {
    $tituloTarea = $row['tituloTarea'];
    $descripcionTarea = $row['descripcionTarea'];
    $estadoTarea = $row['estadoTarea'];
    $personaAsignada = $row['personaAsignadaTarea'];
    $importanciaTarea = $row['importanciaTarea'];
    $fechaAlta = $row['fechaAltaTarea'];
    $creadorTarea = $row['creadorTarea'];
    $categoriaTarea = $row['categoriaTarea'];
}

switch ($estadoTarea) {
    case 'Nueva Tarea':
        $estadoTarea = '<div class="bola verde"></div>';
        break;
    case 'Curso':
        $estadoTarea = '<div class="bola azul"></div>';
        break;
    case 'Pausa':
        $estadoTarea = '<div class="bola narganja"></div>';
        break;
    case 'Pendiente Usuario':
        $estadoTarea = '<div class="bola amarillo"></div>';
        break;
    case 'Revision':
        $estadoTarea = '<div class="bola amarillo"></div>';
        break;
    case 'Detenido':
        $estadoTarea = '<div class="bola rojo"></div>';
        break;
    case 'Finalizado':
        $estadoTarea = '<div class="bola negro"></div>';
        break;
    default:
        $estadoTarea = '<div class="bola blanco"></div>';
        break;
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel de Control</title>

    <link rel="stylesheet" href="../public/css/main.css">

</head>

<body>

    <div class="contenido">

        <?php echo ($menu); ?>

        <div class="ficha">
            <div class="cabecera">
                <?php echo ($numeroTarea); ?>
                <?php echo ($estadoTarea); ?>
            </div>
        </div>

    </div>

</body>

</html>