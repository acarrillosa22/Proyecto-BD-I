<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$cliente = $_GET['cliente'];
$email = $_GET['email'];

$tsql = "ins_emails_cliente '$cliente', '$email'";

$res = sqlsrv_query($conn, $tsql);

$row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC); 
echo(json_encode($row));

?>