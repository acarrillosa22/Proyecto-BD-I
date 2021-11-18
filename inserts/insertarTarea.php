<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$descripcion = $_GET['descripcion'];
$tarifaHora = $_GET['tarifaHora'];
$tipo = $_GET['tipo'];
$componeGrupo = $_GET['componeGrupo'];

$tsql = "ins_tareas '$descripcion', '$tarifaHora', '$tipo', '$componeGrupo'";

$res = sqlsrv_query($conn, $tsql);

$row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC); 
echo(json_encode($row));

?>