<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$miembroEquipo = $_GET['miembroEquipo'];
$proyecto = $_GET['proyecto'];

$tsql = "ins_trabaja_proyecto '$miembroEquipo', '$proyecto'";

$res = sqlsrv_query($conn, $tsql);

$row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC); 
echo(json_encode($row));
?>