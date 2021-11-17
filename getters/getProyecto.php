<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$id = 2;
 
$tsql = "select nombre, Descripcion, Tarifa_por_hora, modalidadAsignada, abiertopor from proyecto where IdProyecto = 2";

$res = sqlsrv_query($conn, $tsql);

if (!$res) {
    print("SQL statement failed with error:\n");
    print("   ".mssql_get_last_message()."\n");
} else {
    $row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC); 
    echo(json_encode($row));
}
?>