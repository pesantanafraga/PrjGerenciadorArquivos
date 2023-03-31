<?php
include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Arquivos - Bistec</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <nav class="menu-container">
            <a href="painel.php">
                <img src="./arquivos/Principal.png" alt="Logotipo da Bistec" width="200px">
            </a>
    
            <a href="download.php">Enviar</a>
        
            <a href="logout.php">Sair</a> 
    </nav>

    <h1>Gerenciador de Arquivos Externo Bistec</h1>
    <span class="bemvindo">Seja bem vindo, <?php echo $_SESSION['username']; ?> </span>

    <form action='upload.php' method="post" enctype="multipart/form-data">

        <input type="file" name="file[]" multiple>
        <input type="submit" value="Enviar">

    </form>

    <div class="arquivos-container">
        
    </div>

</body>
</html>