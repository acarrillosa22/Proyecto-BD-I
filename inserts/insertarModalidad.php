<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$tipo = "nocturna";

$tsql = "ins_modalidad '$tipo'";

$res = sqlsrv_query($conn, $tsql);

if (!$res) {
    print("SQL statement failed with error:\n");
    print("   ".mssql_get_last_message()."\n");
    } else {
    print("One data row inserted.\n");
    }

?>