<?php

define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','sistemagestionacademico');

define('APP_NAME','SISTEMA DE GESTION ACADEMICA');
define('APP_URL','http://localhost/sistemagestionacademico');
define('KEY_API_MAPS','');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try {
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "conexión exitosa a la base de datos";
} catch (PDOException $e) {
    print_r($e);
    echo "error no se pudo conectar a la base de datos";
}

date_default_timezone_set("America/La_Paz");
$fechaHora = date(format: 'Y-m-d H:i:s');

$fecha_actual = date('Y-m-d');
$dia_actual = date('d');
$mea_actual = date('m');
$anno_actual = date('Y');

$estado_de_registro = 1;