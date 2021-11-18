<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$tipo = $_GET['tipo'];

$tsql = "ins_perfil '$tipo'";

$res = sqlsrv_query($conn, $tsql);

$row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC); 
echo(json_encode($row));

?>