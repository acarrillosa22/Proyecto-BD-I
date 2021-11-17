<?php
include '../includes/databaseConnection.php';
$conn = conectar();


$descripcion = "quiero llorar";
$fechaRegistro = '12-10-25';
$tarifaTotal = 1000;
$totalHoras = 420;
$fechaHoraInicio = '12-10-25';
$fechaHoraFin = '12-10-25';
$tieneM = 1;
$contenidoProyecto = 2;
$ordenados = 4;


$tsql = "ins_logs  '$descripcion','$fechaRegistro', '$tarifaTotal', '$totalHoras', '$tieneM', 
        '$contenidoProyecto', '$ordenados', '$fechaHoraFin', '$fechaHoraInicio'";

$res = sqlsrv_query($conn, $tsql);

if (!$res) {
    print("SQL statement failed with error:\n");
    print("   ".mssql_get_last_message()."\n");
} else {
    print("One data row inserted.\n");
}

?>