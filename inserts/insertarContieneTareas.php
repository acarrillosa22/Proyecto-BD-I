<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$proyecto = $_GET['proyecto'];
$tarea = $_GET['tarea'];

$tsql = "ins_Contiene_Tareas '$proyecto', '$tarea'";

$res = sqlsrv_query($conn, $tsql);

$row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC); 
echo(json_encode($row));
?>