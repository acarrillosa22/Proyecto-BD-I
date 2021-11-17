<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$cliente = 1;
$email = 'mucho@texto.com';

$tsql = "ins_emails_cliente '$cliente', '$email'";

$res = sqlsrv_query($conn, $tsql);

if (!$res) {
    print("SQL statement failed with error:\n");
    print("   ".mssql_get_last_message()."\n");
} else {
    print("One data row inserted.\n");
}
?>