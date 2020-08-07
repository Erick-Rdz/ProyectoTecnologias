
<?php

include_once '../BD/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

// Recepción de los datos enviados mediante POST desde el JS   
$apellidos = (isset($_POST['apellidos'])) ? $_POST['apellidos'] : '';
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';


?>


