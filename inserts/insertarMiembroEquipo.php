<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$usuario = 3;
$asignar = 4;
$equipo = 3;
$tareaFavorita = 2;

$tsql = "ins_Miembro_Equipo '$usuario', '$asignar', '$equipo', '$tareaFavorita'";

$res = sqlsrv_query($conn, $tsql);

if (!$res) {
    print("SQL statement failed with error:\n");
    print("   ".mssql_get_last_message()."\n");
} else {
    print("One data row inserted.\n");
}
?>