<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$perteneceLog = $_GET['perteneceLog'];
$perteneceTarea = $_GET['perteneceTarea'];

$tsql = "ins_Registro_tareas '$perteneceLog', '$perteneceTarea'";

$res = sqlsrv_query($conn, $tsql);

$row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC); 
echo(json_encode($row));

?>