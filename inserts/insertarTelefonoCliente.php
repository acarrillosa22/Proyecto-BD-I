<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$cliente = $_GET['cliente'];
$telefono = $_GET['telefono'];

$tsql = "ins_telefono_clientes '$cliente', '$telefono'";

$res = sqlsrv_query($conn, $tsql);

$row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC); 
echo(json_encode($row));
?>