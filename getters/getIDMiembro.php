<?php
include '../includes/databaseConnection.php';
$conn=conectar();

$tsql="select IDMIembro from clientes order by IDMIembro";
$getResults= sqlsrv_query($conn,$tsql) or die('Error');

while($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))
{
    echo ("<option>$row[id]</option>");
}
?>