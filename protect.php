<?php
     if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['id'])){
        die("<script>alert('Acesso Restrito. Somente usuários credenciados!!!');</script>" . header("refresh:0;url=index.php"));
        
    }

