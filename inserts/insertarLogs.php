<?php
include '../includes/databaseConnection.php';
$conn = conectar();


$descripcion = $_GET['descripcion'];
$fechaRegistro = strtotime($_GET['fecha_registro']);
$fechaRegistro = date('Y-m-d H:i:s', $fechaRegistro);
$tarifaTotal = $_GET['tarifaTotal'];
$totalHoras = $_GET['totalHoras'];
$fechaHoraInicio = '12-5-26';
$fechaHoraFin = '12-5-26';
$tieneM = $_GET['tieneM'];
$contenidoProyecto = $_GET['contenidoProyecto'];
$ordenados = $_GET['ordenados'];


$tsql = "ins_logs  '$descripcion','$fechaRegistro', '$tarifaTotal', '$totalHoras', '$tieneM', 
        '$contenidoProyecto', '$ordenados', '$fechaHoraFin', '$fechaHoraInicio'";

$res = sqlsrv_query($conn, $tsql);

$row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC); 
echo(json_encode($row));

?>