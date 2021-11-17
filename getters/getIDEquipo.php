<?php
include '../includes/databaseConnection.php';
$conn=conectar();

$tsql="select IdEquiposTrabajo from  equipos_de_trabajo";
$getResults= sqlsrv_query($conn,$tsql) or die('Error');

while($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))
{
    echo ("<option>$row[id]</option>");
}
?>