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
</head>
<body>
<header>
        <nav class="menu">
            <a href="painel.php">Logotipo</a>
            <a href="downloads.php">Downloads</a>
            <a href="logout.php">Sair</a>
        </nav>

        <h1>Repositório Bistec - Início</h1>
        <h3>Olá, <?php echo $_SESSION['nome'] ?></h3>
    </header>

    <h2>Enviar arquivo:</h2>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <input type="file" name="fileToUpload" id="fileToUpload" multiple>
  <input type="submit" value="Enviar" name="submit">
</form>

    <div class="arquivos-container">
        
    </div>

</body>
</html>