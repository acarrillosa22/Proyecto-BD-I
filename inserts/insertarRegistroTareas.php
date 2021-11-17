<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$perteneceLog = 1;
$perteneceTarea = 2;

$tsql = "ins_Registro_tareas '$perteneceLog', '$perteneceTarea'";

$res = sqlsrv_query($conn, $tsql);

if (!$res) {
    print("SQL statement failed with error:\n");
    print("   ".mssql_get_last_message()."\n");
} else {
    print("One data row inserted.\n");
}
?>