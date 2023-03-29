<?php
include('conexao.php');

if(isset($_POST['username']) || isset($_POST['senha'])){
    if(strlen($_POST['username']) == 0){
        echo "Preencha seu username!";
    }
    else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha!";
    }
    else {
        $username = $mysqli->real_escape_string($_POST['username']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuario WHERE username = '$username' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
           $username = $sql_query->fetch_assoc(); 

           if(!isset($_SESSION)){
            session_start();
           }

           $_SESSION['id'] = $username['id'];
           $_SESSION['username'] = $username['username'];

           header("Location: painel.php");
        }
        else{
            echo "Username e/ou senha incorretos!";
        }
    }
} 
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bistec Cloud - Técnicos</title>
</head>
<body>
    <h1>Bistec Cloud - Técnicos</h1>
    
    <form action="" method="POST">
        <p>
        <label>Username</label>
        <input type="text" name="username">
        </p>

        <p>
        <label>Senha</label>
        <input type="password" name="senha">
        </p>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>