<?php
require('../config/conexion.php');
require('components/menu.php');

$selectTareas = "SELECT * FROM Tareas";
$resultTareas = mysqli_query($conexion, $selectTareas);

while ($row = mysqli_fetch_assoc($resultTareas)) {
    $numeroTarea = $row['numeroTarea'];
}

$numeroTarea++;

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

        <div class="formulario">
            <form action="../config/query/newTask.php" method="post">
                <table>
                    <tr>
                        <td colspan="3">
                            <input type="text" name="numeroTarea" placeholder="<?php echo ($numeroTarea); ?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="tituloTarea" placeholder="Titulo de la Tarea">
                        </td>
                        <td>
                            <select name="categoria">
                                <option value="nutec" default>Nutec</option>
                                <option value="internet">Internet</option>
                                <option value="correo">Correo</option>
                                <option value="office">Paquete Office</option>
                                <option value="impresoras">Impresoras</option>
                                <option value="perifericos">Perifericos</option>
                                <option value="telefonos">Telefonos</option>
                                <option value="onedrive">OneDrive</option>
                                <option value="desarrollo">Desarrollo</option>
                            </select>
                        </td>
                        <td>
                            <select name="importancia" class="importancia">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <textarea name="descripcion" cols="80" rows="10" placeholder="Descripción de la Tarea"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <input type="submit" value="Enviar">
                        </td>
                    </tr>
                </table>
            </form>
        </div>

    </div>

</body>

</html>