<?php
include('ftpCredenciais.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivos</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<header>
        <nav class="menu">
            <a href="painel.php">Logotipo</a>
            <a href="arquivos.php">Arquivos</a>
            <a href="logout.php">Sair</a>
        </nav>

        <h1>Gerenciador de Arquivos</h1>
    </header>

    <div class="arquivos">
        <?php
            
            //informando o diretorio e indo até ele
            $remote_dir = "";
            ftp_chdir($conn_id, $remote_dir);
            
            //obtendo a lista dos arquivos e pastas dentro do diretório
            $files = ftp_nlist($conn_id, $remote_dir);
            
            //exibindo a lista de arquivos e pastas e permitindo que possa fazer o download
            foreach($files as $file) {
            // Ignora os diretórios "." e ".."
            if($file == "." || $file == "..") {
                continue;
            }
                echo "<a href=\"download.php?file=" . urlencode($file) . "\">" . $file . "</a><br>";
            }

        ?>
    </div>

    <footer>
        <span></span>
    </footer>
</body>
</html>