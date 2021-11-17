<?php
include '../includes/databaseConnection.php';
$conn=conectar();

$tsql="select IdCliente from clientes";
$getResults= sqlsrv_query($conn,$tsql) or die('Error');

echo ("<select id=>'ID_clientes' onChange='verClientes()'");

while($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))
{
    echo ("<option>$row[IdCliente]</option>");
}
echo ("</select>");
?>