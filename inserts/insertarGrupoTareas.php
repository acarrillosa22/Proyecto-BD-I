<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$numeroTareas = $_GET['numeroTareas'];
$proyectoAsignado = $_GET['proyectoAsignado'];

$tsql = "ins_Grupo_Tareas '$numeroTareas', '$proyectoAsignado'";

$res = sqlsrv_query($conn, $tsql);

$row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC); 
echo(json_encode($row));
?>
