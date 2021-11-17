<?php
include '../includes/databaseConnection.php';
$conn = conectar();

//$idCliente = $_GET['cedula'];
$nombre = $_GET['nombre'];
$descripcion = $_GET['descripcion'];
$personaContacto = $_GET['personaContacto'];
$direccion = $_GET['direccion'];
$notas = $_GET['notas'];

$tsql = "ins_cliente '$nombre', '$descripcion', '$direccion',
        '$personaContacto', '$notas'" ;

$res = sqlsrv_query($conn, $tsql);

$row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC); 
echo(json_encode($row));

?>