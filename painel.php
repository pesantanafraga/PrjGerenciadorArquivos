<?php
include('protect.php');
include('upload.php');

if(!isset($_POST['acao'])){
    //formulário enviado!
    $arquivo = $_FILES['file'];

}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Arquivos - Bistec</title>
</head>
<body>
    <h1>Gerenciador de Arquivos Externo Bistec</h1>
    <span>Seja bem vindo, <?php echo $_SESSION['username']; ?> </span>

    <form action="" method="post" enctype="multipart/form-data">

        <input type="file" name="file">
        <input type="submit" name="acao" value="Enviar">

    </form>

    <p><a href="logout.php">Sair</a></p>
</body>
</html>