<?php
include('painel.php');

// Configuração de conexão FTP
$ftp_server = "ftpupload.net";
$ftp_username = "epiz_33867279";
$ftp_password = "U611KqcRxWE6";

// Conexão com FTP
$conn_id = ftp_connect($ftp_server) or die("Não foi possível estabeler uma conexão com o servidor!");

// Login no FTP
$login_result = ftp_login($conn_id, $ftp_username, $ftp_password);

// Arquivo local para upload
$local_file = $arquivo;

// Arquivo remoto para upload
$remote_file = "CLOUD";

// Upload do Arquivo
if(ftp_put($conn_id, $remote_file, $local_file, FTP_ASCII)) {
    echo "Arquivo enviado com sucesso!";
}
else {
    echo "Erro ao enviar arquivo";
}

// Finalizando a conexão com o servidor FTP
ftp_close($conn_id);
?>