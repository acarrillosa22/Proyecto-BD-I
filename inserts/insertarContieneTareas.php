<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$proyecto = 2;
$tarea = 2;

$tsql = "ins_Contiene_Tareas '$proyecto', '$tarea'";

$res = sqlsrv_query($conn, $tsql);

if (!$res) {
    print("SQL statement failed with error:\n");
    print("   ".mssql_get_last_message()."\n");
} else {
    print("One data row inserted.\n");
}
?>