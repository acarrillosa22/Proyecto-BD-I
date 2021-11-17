<?php
include '../includes/databaseConnection.php';
$conn=conectar();

$tsql="select IdTareas from tareas";
$getResults= sqlsrv_query($conn,$tsql) or die('Error');

echo ("<select>");

while($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))
{
    echo ("<option>$row[IdCliente]</option>");
}

echo ("</select>");
?>