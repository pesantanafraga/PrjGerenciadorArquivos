<?php
include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repositório - Bistec</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://example.com/fontawesome/v5.15.4/js/all.js" data-auto-a11y="true" ></script>
</head>
<body>

    <?php include('header.php'); ?>
    <div class="containerpainel">
        <h1>Repositório Bistec - Início</h1>
        <h3>Olá, <?php echo $_SESSION['nome'] ?></h3>
        <h2>Enviar arquivo:</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" id="fileToUpload" multiple>
            <input type="submit" value="Enviar" name="submit">
        </form>
    </div>
    <div class="containerutilidades">
        <h3>Links úteis</h3>
        <nav>
            <a href="http://repositorio.futurasistemas.com.br/">REPOSITÓRIO FUTURA</a>
            <a href="https://revendas.smallsoft.com.br/login">SUPORTE SMALLSOFT</a>
            <a href="https://portal.hiper.com.br/#/">HIPERADOR</a>
            <a href="https://ajuda.hiper.com.br/hc/pt-br">AJUDA HIPER</a>
            <a href="http://parceiros.cplug.com.br/">PAINEL REVENDA CPLUG</a>
            <a href="https://bistec.backupmanager.info/login">BISTEC CLOUD</a>
            <a href="eformsnfce.e-datacenter.nddigi...2%2000%3A00%3A00&StoreId=0">MONITOR PORTAL POS CONTROLE</a>
            <a href="eformsnfce.e-datacenter.nddigi...eColdweb/ProcessDocument/Index">COLDWEB PORTAL POS CONTROLE</a>
            <a href="painel.hotspotsocial.xyz">PAINEL BISTEC WIFI</a>
        </nav>
    </div>
    
</body>
</html>