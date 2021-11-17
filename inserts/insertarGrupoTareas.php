<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$numeroTareas = 4;
$proyectoAsignado = 1;

$tsql = "ins_Grupo_Tareas '$numeroTareas', '$proyectoAsignado'";

$res = sqlsrv_query($conn, $tsql);

if (!$res) {
    print("SQL statement failed with error:\n");
    print("   ".mssql_get_last_message()."\n");
} else {
    print("One data row inserted.\n");
}

?>
