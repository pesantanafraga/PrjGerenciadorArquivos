<?php
require 'ftpCredenciais.php';
?>

<?php include('headtemplate.php'); ?>
<body>
    <?php include('header.php'); ?>
    <h1>Gerenciador de Arquivos <span class="iconify" data-icon="ic:baseline-file-download" style="color: white; font-size: 35px;"></span>
</h1>

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
    
    <button onclick="topFunction()" id="myBtn" title="Go to top">Voltar para cima</button>
    <script src="./js/main.js"></script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
</body>
</html>