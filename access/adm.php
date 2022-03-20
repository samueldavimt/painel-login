<?php

    require_once("checkSession.php");
    checkSession();

    $validateLevelAccess = checkSessionAdm();
   
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Administrativa</title>
    <link rel="stylesheet" href="/panel/css/style.css">
</head>
<body>

    <?php require_once('../templates/header.php')?>

    <?php if(!$validateLevelAccess):?>
        <div class="container">
            <h2>Você não está autorizado(a) á acessar esta página!</h2>
        </div>
    <?php else:?>
        <div class="container">
           <h2>Olá <?=$_SESSION['username']?>, seja Bem Vindo á Área Administrativa</h2>
        </div>
    <?php endif?>
</body>
</html>

