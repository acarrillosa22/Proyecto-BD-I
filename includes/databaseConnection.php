<?php

$dbServerName = ".";
$dbUsername = "sa";
$dbPassword = "Quesada123";
$dbName = "ProyectoBasesAJP";

$connectionOptions = array(
    "Database" => "ProyectoBasesAJP", 
    "CharacterSet" => "UTF-8",
    "Uid" => $dbUsername,
    "PWD" => $dbPassword
);


function conectar()
{
    global $dbServerName, $connectionOptions;
    $conn = sqlsrv_connect($dbServerName, $connectionOptions) or die('Error al conectar con la base de datos');
    return ($conn);
    
}

conectar();


?>