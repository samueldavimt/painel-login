<?php

    require_once('./templates/header.php');

    if(!isset($_SESSION)){
        session_start();
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
   <?php if(!isset($logged)):?>
        <?php
            require_once('./access/login.php')    
        ?>
    <?php else:?>
        <div class="container">
            <a class="panel-access" href="./access/panel.php">Acessar Painel</a>
        </div>
    <?php endif?>
</body>
</html>