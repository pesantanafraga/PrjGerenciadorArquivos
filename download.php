<?php

include('ftpCredenciais.php');
include('arquivos.php');

ftp_pasv($conn_id, true);

//criando o script de download
$file = $_GET["file"];
$filepath = $remote_dir . $file;

header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"" . $file . "\"");

readfile("ftp://" . $ftp_user . ":" . $ftp_pass . "@" . $ftp_server . $filepath);

//fechando a conexão
ftp_close($conn_id);
