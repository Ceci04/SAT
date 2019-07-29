<?php

$listadoTarea = "<table><tr class='cabecera'><td>Numero Tarea</td><td>Titulo</td><td class='descripcion'>Descripción</td><td>Estado</td><td>Persona Asignada</td><td>Importancia</td><td></td></tr>";

$selectTareas = "SELECT * FROM Tareas";
$resultTareas = mysqli_query($conexion, $selectTareas);

while ($row = mysqli_fetch_assoc($resultTareas)) {
    $numeroTarea = $row['numeroTarea'];
    $tituloTarea = $row['tituloTarea'];
    $descripcionTarea = $row['descripcionTarea'];
    $estadoTarea = $row['estadoTarea'];
    $personaAsignada = $row['personaAsignadaTarea'];
    $importanciaTarea = $row['importanciaTarea'];

    $listadoTarea .= "<tr><td>$numeroTarea</td><td>$tituloTarea</td><td class='descripcion'>$descripcionTarea</td><td>$estadoTarea</td><td>$personaAsignada</td><td>$importanciaTarea</td><td><a href='https://$dominio/views/infoTask.php?numeroCaso=$numeroTarea'>" . '<svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="info-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-info-circle fa-w-16 fa-2x"><path fill="currentColor" d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-36 344h12V232h-12c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h48c6.627 0 12 5.373 12 12v140h12c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12h-72c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12zm36-240c-17.673 0-32 14.327-32 32s14.327 32 32 32 32-14.327 32-32-14.327-32-32-32z" class=""></path></svg>' . "</a></td></tr>";
}

$listadoTarea .= "</table>";

$listadoIncidencia = "<table><tr class='cabecera'><td>Numero Incidencia</td><td>Titulo</td><td class='descripcion'>Descripción</td><td>Estado</td><td>Persona Asignada</td><td>Importancia</td><td></td></tr>";

$selectIncidencia = "SELECT * FROM Incidencias";
$resultIncidencia = mysqli_query($conexion, $selectIncidencia);

while ($row = mysqli_fetch_assoc($resultIncidencia)) {
    $numeroIncidencia = $row['numeroIncidencia'];
    $tituloIncidencia = $row['tituloIncidencia'];
    $descripcionIncidencia = $row['descripcionIncidencia'];
    $estadoIncidencia = $row['estadoIncidencia'];
    $personaAsignada = $row['personaAsignadaIncidencia'];
    $importanciaIncidencia = $row['importanciaIncidencia'];

    $listadoIncidencia .= "<tr><td>$numeroIncidencia</td><td>$tituloIncidencia</td><td class='descripcion'>$descripcionIncidencia</td><td>$estadoIncidencia</td><td>$personaAsignada</td><td>$importanciaIncidencia</td><td><a href='https://$dominio/views/infoTask.php'>" . '<svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="info-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-info-circle fa-w-16 fa-2x"><path fill="currentColor" d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-36 344h12V232h-12c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h48c6.627 0 12 5.373 12 12v140h12c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12h-72c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12zm36-240c-17.673 0-32 14.327-32 32s14.327 32 32 32 32-14.327 32-32-14.327-32-32-32z" class=""></path></svg>' . "</a></td></tr>";
}

$listadoIncidencia .= "</table>";
