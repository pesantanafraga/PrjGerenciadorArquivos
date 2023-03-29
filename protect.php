<?php
     if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['id'])){
        die("Acesso Restrito. Somente usuários credenciados!!! <p><a href=\"index.php\">Entrar</a></p>");
    }
?>