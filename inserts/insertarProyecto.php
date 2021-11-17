<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$tarifaPorHora = 666;
$descripcion = "a";
$nombre = "bases1";
$modalidadAsignada = 1;
$abiertoPor = 1;

$tsql = "ins_proyecto '$tarifaPorHora', '$descripcion', '$nombre', 
        '$modalidadAsignada', '$abiertoPor'";

$res = sqlsrv_query($conn, $tsql);

if (!$res) {
    print("SQL statement failed with error:\n");
    print("   ".mssql_get_last_message()."\n");
} else {
    print("One data row inserted.\n");
}

?>