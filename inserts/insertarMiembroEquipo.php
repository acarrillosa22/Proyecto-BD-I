<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$usuario = $_GET['usuario'];
$asignar = $_GET['asignar'];
$equipo = $_GET['equipo'];
$tareaFavorita = $_GET['tareaFavorita'];

$tsql = "ins_Miembro_Equipo '$usuario', '$asignar', '$equipo', '$tareaFavorita'";

$res = sqlsrv_query($conn, $tsql);

$row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC); 
echo(json_encode($row));
?>