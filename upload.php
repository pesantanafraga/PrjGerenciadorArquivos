<?php

function connectFTP() {

//Configurações de conexão FTP
    $ftp_server = 'ftp.bistec.com.pt';
    $ftp_username = 'web@bistec.com.pt';
    $ftp_password = '@bart7931';
    $port = 21;
    $timeout = 9000;

    $ftp = ftp_connect($ftp_server, $port , $timeout) or die("<script>alert('Falha ao se conectar com o servidor FTP!');</script>");


    $login = ftp_login($ftp, $ftp_username, $ftp_password);
    if(!$login){
        echo "<script>alert('Falha ao se credenciar com o servidor FTP!');</script>";
    }

}


function uploadFile($localFile, $remoteFile) {

    $localFile = "$_FILES";
    $remoteFile = "public_html/web";
    
    $ftp = $this->connectFTP();

    if(!is_resource($ftp)){
        return false;
    }

    if(!is_file($localFile)){
        return false;
        echo "<script>alert('Arquivo de origem '{$localFile}' não existe!');</script>";
    }

    ftp_pasv($ftp, true);

    //Fazendo upload do arquivo
    $upload = ftp_put($ftp, $remoteFile, $localFile, FTP_BINARY);
    if($upload){
        echo "<script>alert('Arquivo enviado com sucesso =)');</script>";
    }
    else {
        echo "<script>alert('Falha ao enviar o arquivo!');</script>";
    }

    ftp_close($ftp);
    return true;
}
