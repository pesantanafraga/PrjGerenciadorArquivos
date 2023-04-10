<?php

require 'ftpCredenciais.php';

ftp_pasv($conn_id, true);

$remote_dir = "/";

//criando o script de download
$file = $_GET["file"];
$filepath = $remote_dir . $file;

header('Content-Description: File Transfer');
header('Content-Transfer-Encoding: binary');
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"" . $file . "\"");
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Expires: 0');

readfile("ftp://" . $ftp_user . ":" . $ftp_pass . "@" . $ftp_server . $filepath);

//fechando a conexão
ftp_close($conn_id);
