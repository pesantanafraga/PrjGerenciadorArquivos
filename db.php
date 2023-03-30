<?php

$host = 'br912.hostgator.com.br';
$usuario = 'bistec_admin';
$senha = 'cloudbistec7931';
$database = 'bistec_cloud';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error){
    die("Falha ao se conectar com o banco de dados :" . $mysqli->error);
}