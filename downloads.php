<?php

// Configuração de conexão FTP
$ftp_server = "ftp.bistec.com.pt";
$ftp_user = "web@bistec.com.pt";
$ftp_pass = "@bart7931";
$conn_id = ftp_connect($ftp_server);
ftp_login($conn_id, $ftp_user, $ftp_pass);

// Gerenciador de arquivos na web
echo "<h2>Arquivos no servidor:</h2>";
$files = ftp_nlist($conn_id, ".");
foreach($files as $file){
    echo "<a href='download.php?file=".basename($file)."'>$file</a><br>";
}

$dir = "Downloads";

// Download de arquivo
if(isset($_GET['file'])){
    $filename = $_GET['file'];
    $file = ftp_get($conn_id, $dir, $filename, FTP_BINARY);
    header('Content-type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.$filename.'"');
    echo $file;
}

?>