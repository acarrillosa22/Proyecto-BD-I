<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$numeroMiembros = $_GET['numeroMiembros'];
$proyectoAsignado = $_GET['proyectoAsignado'];

$tsql = "ins_Equipo '$numeroMiembros', '$proyectoAsignado'";

$res = sqlsrv_query($conn, $tsql);

$row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC); 
echo(json_encode($row));
?>