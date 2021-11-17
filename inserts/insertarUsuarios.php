<?php
include '../includes/databaseConnection.php';
$conn = conectar();


$contrasena = "i wanna die";
$nombre = "el pepe";
$notas = "eh puto";
$tarifaHora = 100;
$idUsuarioReferencia = 4;
$registroCreacion = '12-10-25';
$tienePerfil = 1;

$tsql = "ins_usuarios '$contrasena', '$nombre', '$notas', '$tarifaHora', '$idUsuarioReferencia', 
        '$registroCreacion', '$tienePerfil'";

$res = sqlsrv_query($conn, $tsql);

if (!$res) {
    print("SQL statement failed with error:\n");
    print("   ".mssql_get_last_message()."\n");
} else {
    print("One data row inserted.\n");
}

?>