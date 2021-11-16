<?php
include '../includes/databaseConnection.php';
$conn = conectar();

$idCliente = 1;
$nombre = "Pepe";
$descripcion = "pepeelpepo";
$personaContacto = "pa";
$direccion = "pepelandia";
$notas = "peloverde";

$tsql = "ins_cliente '$nombre', '$descripcion', '$personaContacto', 
        '$direccion', '$notas'" ;

$res = sqlsrv_query($conn, $tsql);

if (!$res) {
    print("SQL statement failed with error:\n");
    print("   ".mssql_get_last_message()."\n");
  } else {
    print("One data row inserted.\n");
  }

?>