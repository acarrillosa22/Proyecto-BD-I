<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$idPerfil = 1;
$tipo = "PM";

$tsql = "ins_perfil '$tipo'";

$res = sqlsrv_query($conn, $tsql);

if (!$res) {
    print("SQL statement failed with error:\n");
    print("   ".mssql_get_last_message()."\n");
} else {
    print("One data row inserted.\n");
}

?>