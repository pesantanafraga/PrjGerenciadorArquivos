<?php

$server_host = "br912.hostgator.com.br";
$username = "bistec_admin";
$senha = "cloudbistec7931";
$dbname = "bistec_cloud";

//criando conexão
$connect = new mysqli($server_host, $username , $senha, $dbname);

//tratando caso houver erro
if($connect->error) {
    die("<script>alert('Erro ao efetuar conexão com o banco de dados!!!');</script>". $connect->error);
}
?>