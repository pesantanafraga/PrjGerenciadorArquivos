<?php

$arquivos = $_FILES['file'];
$names = $arquivos['name'];
$tmp_name = $arquivos['tmp_name'];

foreach ($names as $index => $name) {
    $extension = pathinfo($name, PATHINFO_EXTENSION);
    $newNome = uniqid().'.'.$extension;
    move_uploaded_file($tmp_name[$index],'$remote_file_path'.$newNome);
}

//Configurações de conexão FTP
$ftp_server = 'ftp.bistec.com.pt';
$ftp_username = 'web@bistec.com.pt';
$ftp_password = '@bart7931';

//Conectando ao servidor FTP
$ftp_connection = ftp_connect($ftp_server);
$login_result = ftp_login($ftp_connection, $ftp_username, $ftp_password);

//Verificando se houve a conexão
if ((!$ftp_connection) || (!$login_result)) {
    echo "<script>alert('Falha ao conectar com o servidor FTP!!');</script>";
    exit;
}

//Configurações de upload
$local_file_path = "C:\xampp\htdocs\cloudbistec";
$remote_file_path = "public_html/web";



//Fazendo o upload do arquivo
if (ftp_put($ftp_connection, "$remote_file_path", "$local_file_path", FTP_BINARY)) {
    echo "<script>alert('Arquivo enviado com sucesso!!');</script>";
} else{
    echo "<script>alert('Falha ao enviar o arquivo!!');</script>";
}
    
//Finalizando conexão com o servidor FTP
ftp_close($ftp_connection);
