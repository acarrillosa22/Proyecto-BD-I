<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$descripcion = "unatareafacil";
$tarifaHora = 1000;
$tipo = 'Especifica';
$componeGrupo = null;

$tsql = "ins_tareas '$descripcion', '$tarifaHora', '$tipo', '$componeGrupo'";

$res = sqlsrv_query($conn, $tsql);

if (!$res) {
    print("SQL statement failed with error:\n");
    print("   ".mssql_get_last_message()."\n");
} else {
    print("One data row inserted.\n");
}

?>