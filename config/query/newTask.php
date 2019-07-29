<?php
require('../conexion.php');

$selectTareas = "SELECT * FROM Tareas";
$resultTareas = mysqli_query($conexion, $selectTareas);

while ($row = mysqli_fetch_assoc($resultTareas)) {
    $numeroTarea = $row['numeroTarea'];
}

$numeroTarea++;

$tituloTarea = $_POST['tituloTarea'];
$categoria = $_POST['categoria'];
$importancia = $_POST['importancia'];
$descripcion = $_POST['descripcion'];
$fecha = date("d/m/Y");
$creador = $_SESSION['usuario'];

if ($categoria == 'nutec' || $categoria == 'telefonos' || $categoria == 'impresoras' || $categoria == 'desarrollo') {
    $personaAsignada = 'adrian';
} else {
    $personaAsignada = 'roger';
}

$estado = 'Nueva Tarea';

if (!empty($tituloTarea)) {
    $insertTarea = "INSERT INTO Tareas VALUES('$numeroTarea', '$tituloTarea','$descripcion','$estado','$categoria','$fecha','$personaAsignada','$creador','$importancia')";
    $resultTarea = mysqli_query($conexion, $insertTarea);

    if ($resultTarea) {
        header("Location: https://$dominio/views/home.php");
    }else{
        echo($insertTarea);
    }
}
