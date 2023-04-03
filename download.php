<?php

// Gerenciador de arquivos na web
echo "<h2>Arquivos no servidor:</h2>";
$files = ftp_nlist($conn_id, ".");
foreach($files as $file){
    echo "<a href='download.php?file=".basename($file)."'>$file</a><br>";
}

// Download de arquivo
if(isset($_GET['file'])){
    $filename = $_GET['file'];
    $file = ftp_get($conn_id, 'php://output', $filename, FTP_BINARY);
    header('Content-type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.$filename.'"');
    echo $file;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Teste</h1>
</body>
</html>