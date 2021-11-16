<?php
//include '../includes/databaseConnection.php';
//$conn = conectar();


// Idlogs int IDENTITY(1,1) not null,
//     FechaRegistro date not null,
//     Descripcion varchar(30),
//     TarifaTotal numeric(10) not null,
//     TotalHoras int not null,
// 	fecha_hora_inicio datetime,
// 	fecha_hora_fin datetime,
// 	TieneM int not null,--ID de la modalidad del log
// 	ContenidoProyecto int not null, --ID del proyecto al que pertenece
// 	Ordenados int,--ID del Miembro de equipo que creo el log
// )

$fechaRegistro = date("D,M,Y");
$descripcion = "quiero llorar";
$tarifaTotal = 1000;
$totalHoras = 420;
$fechaHoraInicio = date("D,M,Y");
$fechaHoraFin = date("D,M,Y");
$tieneM = 1;
$contenidoProyecto = 1;
$ordenados = 1;

$tsql = "ins_logs '$fechaRegistro', '$descripcion', '$tarifaTotal', '$totalHoras', '$fechaHoraInicio',
        '$fechaHoraFin', '$tieneM', '$contenidoProyecto', '$ordenados'";

$res = sqlsrv_query($conn, $tsql);

if (!$res) {
    print("SQL statement failed with error:\n");
    print("   ".mssql_get_last_message()."\n");
    } else {
    print("One data row inserted.\n");
    }

       


?>