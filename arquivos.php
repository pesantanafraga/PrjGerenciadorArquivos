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
            
            // Definir o diretório que será listado
            $dir = "https://bistec.com.pt/web/";
            // Verificar se o diretório existe
            if (is_dir($dir)) {         
            // Obter uma lista de arquivos e pastas no diretório
            $files = scandir($dir);

            // Remover "." e ".." da lista de arquivos
            $files = array_diff($files, array(".", ".."));

            // Loop pelos arquivos
            foreach ($files as $file) {
            // Exibir o nome do arquivo com um link para download
            echo "<a href=\"{$dir}/{$file}\" download>{$file}</a><br>";
            }
            } else {
            echo "O diretório não existe.";
            }

        ?>
    </div>

    <footer>
        <span></span>
    </footer>
</body>
</html>