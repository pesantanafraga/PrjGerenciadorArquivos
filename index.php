<?php

include('database.php');

if(isset($_POST['username']) || isset($_POST['senha'])) {
    
    //tratando erros de login faltando informação
    if(strlen($_POST['username']) == 0) {
        echo "<script>alert('Informe seu username!!!');</script>";
    }
    else if(strlen($_POST['senha']) == 0) {
        echo "<script>alert('Informe sua senha!!!');</script>";
    }
    else{
        $username = $connect->real_escape_string($_POST['username']);
        $senha = $connect->real_escape_string($_POST['senha']);

        //fazendo a busca no banco
        $sql_code = "SELECT * FROM usuario WHERE username = '$username' AND senha = '$senha'";
        //trazendo a informação através da query, caso erro será informado
        $sql_query = $connect->query($sql_code) or die("<script>alert('Falha na execução do código SQL!!!');</script>". $connect->error);

        //trazendo o leitor para ler o banco
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            $username = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }
        }

        $_SESSION['id'] = $username['id'];
        $_SESSION['nome'] = $username['nome'];
        $_SESSION['username'] = $username['username'];

        header("Location: painel.php");
    }

}else{
        echo "<script>alert('Username e/ou senha incorretos!!');</script>";
    }            


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repositório Bistec</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://example.com/fontawesome/v5.15.4/js/all.js" data-auto-a11y="true" ></script>
</head>
<body>
    
    <form action="" method="post">

    <h1>Repositório Bistec - Técnicos</h1>

        <div class="container-index">

            <input id="userinput" type="text" name="username" placeholder="Digite seu usuário:">
            <input id="psswdinput" type="password" name="senha" placeholder="Digite sua senha:">
            <button type="submit">Entrar</button>

        </div>

    </form>

</body>
</html>