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
        echo "Ocorreu um erro ao enviar o arquivo.";
    }
}

ftp_close($conn_id);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload - Files</title>
</head>
<body>
    <?php
        header("Refresh:0, URL=painel.php");
        echo "Redirecionando para o painel...";
    ?>
</body>
</html>
