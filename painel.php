<?php
include('protect.php');
?>

<?php include('headtemplate.php'); ?>
<body>

    <?php include('header.php'); ?>
    <div class="containerpainel">
        <h1>Repositório Bistec - Início</h1> 
        
        <h3>Olá, <?php echo $_SESSION['nome'] ?><span class="iconify" data-icon="mdi:user" style="color: white; font-size: 38px"></span>, seja bem-vindo(a) ao nosso repositório.</h3>

        <h1>Upload de Arquivos</h1>
        <h2>Enviar arquivo:</h2> <br>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" id="fileToUpload" multiple> <br> <br>
            <button id="botaosubmit" type="submit" name="submit">Enviar <span class="iconify" data-icon="material-symbols:drive-folder-upload" style="color: black; font-size: 25px;"></span><button>
        </form>
    </div>

    <?php include('footer.php'); ?>
    <script src="./js/main.js"></script>
</body>
</html>