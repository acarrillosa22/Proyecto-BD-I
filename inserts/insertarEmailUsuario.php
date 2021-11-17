<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$usuario = 3;
$email = 'mucho@texto.com';

$tsql = "ins_email_usuarios '$usuario', '$email'";

$res = sqlsrv_query($conn, $tsql);

if (!$res) {
    print("SQL statement failed with error:\n");
    print("   ".mssql_get_last_message()."\n");
} else {
    print("One data row inserted.\n");
}
?>