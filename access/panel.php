


<?php
    require_once('checkSession.php');

    checkSession();

    $userName = $_SESSION['username'];
    $levelAccess = $_SESSION['levelaccess'];

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require_once("../templates/header.php")?>

    <div class="container">
        <h2>Olá <?=$userName?>, Seja Bem Vindo(a)!</h2>
        <h3>Esse é o seu Painel de usuário!</h3>
        <h3>Nível de Acesso: <?=$levelAccess?></h3>
        <div class="links">
            <a href="../index.php">Home</a>
            <a href="adm.php">Área Administrativa</a>
        </div>
    </div>

    
    
</body>
</html>