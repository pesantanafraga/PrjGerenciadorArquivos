<?php

include('ftpCredenciais.php');


// Upload de arquivo
if(isset($_POST['submit'])){
    $target_dir = "/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    if (ftp_put($conn_id, $target_file, $_FILES["fileToUpload"]["tmp_name"], FTP_BINARY)) {
        echo "<script>alert('Arquivos enviados com sucesso!');</script>";
    } else {
        echo "<script>alert('Ocorreu um erro ao enviar o arquivo!');</script>";
    }
}

ftp_close($conn_id);

?>

<?php include('headtemplate.php'); ?>
<body>
    <?php
        echo '<h1><a href="painel.php" style="text-decoration: underline;">Voltar para o painel</a></h1>    ';
    ?>
</body>
</html>
