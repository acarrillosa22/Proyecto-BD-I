<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$id = 1;
 
$tsql = "select Descripcion, FechaRegistro, TarifaTotal, TotalHoras, fecha_hora_inicio, fecha_hora_fin, TieneM, ContenidoProyecto, 
        Ordenados from logs  where Idlogs = 1";

$res = sqlsrv_query($conn, $tsql);

if (!$res) {
    print("SQL statement failed with error:\n");
    print("   ".mssql_get_last_message()."\n");
} else {
    $row = sqlsrv_fetch_array($res, SQLSRV_FETCH_ASSOC); 
    echo(json_encode($row));
}
?>