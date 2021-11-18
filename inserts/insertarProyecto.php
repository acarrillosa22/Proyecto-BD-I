<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$tarifaPorHora = $_GET['tarifaPorHora'];
$descripcion = $_GET['descripcion'];
$nombre = $_GET['nombre'];
$modalidadAsignada =$_GET['modalidadAsignada'];
$abiertoPor = $_GET['abiertoPor'];

$tsql = "ins_proyecto '$tarifaPorHora', '$descripcion', '$nombre', 
        '$modalidadAsignada', '$abiertoPor'";

$res = sqlsrv_query($conn, $tsql);

$row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC); 
echo(json_encode($row));

?>