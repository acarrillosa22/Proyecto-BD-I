<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$usuario = $_GET['usuario'];
$email = $_GET['email'];

$tsql = "ins_email_usuarios '$usuario', '$email'";

$res = sqlsrv_query($conn, $tsql);

$row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC); 
echo(json_encode($row));
?>