<?php


    if(!isset($_SESSION)){
        session_start();
    }

?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require_once('./templates/header.php');?>
    
   <?php if(!isset($_SESSION['logged'])):?>
        <?php
            require_once('./access/login.php')    
        ?>
    <?php else:?>
        <div class="container">
            <a class="panel-access" href="/panel/access/panel.php">Acessar Painel</a>
        </div>
    <?php endif?>
</body>
</html>