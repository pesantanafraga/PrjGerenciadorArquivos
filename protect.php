<?php
     if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['id'])){
        die("<script>alert('Acesso Restrito. Somente usuários credenciados!!!');</script> <p><a href=\"index.php\">Entrar</a></p>");
        
        header("refresh:5;url=index.php");
        echo "Você será redirecionado em 5 segundos...";
    }

