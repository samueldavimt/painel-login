<?php
        require_once("./access/validation.php");

        $msgError = null;
        if(isset($_POST['Login'])){
            if(isset($_POST['email']) && isset($_POST['password'])){

                $email = $_POST['email'];
                $password = $_POST['password'];

                $arrayValues = [
                    'email'=> $email,
                    'password'=> $password
                ];
            
                $validateDates = $validator->handleChecks($arrayValues);
                
                $alerts = $validator->getAlerts();

                if(count($alerts) > 0){
                    $msgError = $alerts[0];
                }else{
                    
                }
                

               

                
            }
        }

?>

<div class="container">
    <h3>Login para o Painel</h3>

    <?php if($msgError != null):?>
        <div class="login-error">
            <p><?=$msgError?></p>
        </div>
    <?php endif?>
    <form action="./index.php" method="POST">

        <input type="text" name="email" placeholder="Seu Email" autocomplete="off">
        
        <input type="password" name="password" placeholder="Sua Senha" autocomplete="off">
        
        <input type="submit" value="Entrar" name="Login">
    </form>
</div>