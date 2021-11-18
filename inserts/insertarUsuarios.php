<?php
include '../includes/databaseConnection.php';
$conn = conectar();


$contrasena = $_GET['contrasena'];
$nombre = $_GET['nombre'];
$notas = $_GET['notas'];
$tarifaHora = $_GET['tarifaHora'];
$idUsuarioReferencia = $_GET['id_referencia'];
$registroCreacion = '12-4-21'; //dato quemado para evitar problemas
$tienePerfil = $_GET['tienePerfil'];

$tsql = "ins_usuarios '$contrasena', '$nombre', '$notas', '$tarifaHora', '$idUsuarioReferencia', 
        '$registroCreacion', '$tienePerfil'";

$res = sqlsrv_query($conn, $tsql);

$row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC); 
echo(json_encode($row));
?>