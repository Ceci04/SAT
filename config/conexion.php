<?php
session_start();
$dominio = $_SERVER['SERVER_NAME'];

$host = '82.98.181.65';
$user = 'satdb';
$pass = 'satdb5925';
$bd = 'satdb';

$conexion = mysqli_connect($host, $user, $pass, $bd);

if (!$conexion) {
    ?>
    <script>
        alert('Error, No se ha establecido conexion con la base de datos.');
    </script>
<?php
}


?>