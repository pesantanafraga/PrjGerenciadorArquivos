<?php

// Configuração de conexão FTP
$ftp_server = "ftp.bistec.com.pt";
$ftp_user = "web@bistec.com.pt";
$ftp_pass = "@bart7931";
$conn_id = ftp_connect($ftp_server);
ftp_login($conn_id, $ftp_user, $ftp_pass);
