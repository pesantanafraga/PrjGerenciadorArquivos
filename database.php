<?php

$server_host = "localhost";
$username = "bistec_admin";
$senha = "cloudbistec7931";
$dbname = "bistec_cloud";

//criando conex達o
$connect = new mysqli($server_host, $username , $senha, $dbname);

//tratando caso houver erro
if($connect->error) {
    die("<script>alert('Erro ao efetuar conex達o com o banco de dados!!!');</script>". $connect->error);
}
?>