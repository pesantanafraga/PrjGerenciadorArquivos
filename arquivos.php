<?php
require 'ftpCredenciais.php';
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
    <script src="https://example.com/fontawesome/v5.15.4/js/all.js" data-auto-a11y="true" ></script>
</head>
<body>
    
    <?php include('header.php'); ?>

    <h1>Gerenciador de Arquivos</h1>

    <div class="arquivos">
        <?php
            
            //informando o diretorio e indo até ele
            $remote_dir = "";
            ftp_chdir($conn_id, $remote_dir);
            
            //obtendo a lista dos arquivos e pastas dentro do diretório
            $files = ftp_nlist($conn_id, $remote_dir);

            //ordenando o array dos arquivos para trazer na listagem
            sort($files);
            
            //exibindo a lista de arquivos e pastas e permitindo que possa fazer o download
            foreach($files as $file) {
            // Ignora os diretórios "." e ".."
            if($file == "." || $file == "..") {
                continue;
            }
                echo "<a href=\"download.php?file=" . urlencode($file) . "\">" . $file . "</a><br>";
            }

            ftp_close($conn_id);
        ?>
    </div>

    <footer>
        <span></span>
    </footer>
    
    <button onclick="topFunction()" id="myBtn" title="Go to top">Voltar para cima</button>
    <script src="./js/main.js"></script>
</body>
</html>