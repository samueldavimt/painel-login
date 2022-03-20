<?php

        require_once("validation.php");

        $logins = [
            ['Id'=>1, 'LevelAccess'=>'adm', 'UserName'=>'Davi', 'Email'=>'davi@system.com', 'Password'=>'arch'],

            ['Id'=>2, 'LevelAccess'=>'user', 'UserName'=>'Julia', 'Email'=>'julia@system.com', 'Password'=>'ubuntu']
        ];


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
                    
                    foreach($logins as $key => $login){
                        $loginEmail = $login['Email'];
                        $loginPassword = $login['Password'];
                        
                        if($loginEmail == $email && $loginPassword == $password){
                            $_SESSION['logged'] = true;
                            $_SESSION['username'] = $login['UserName'];
                            $_SESSION['levelaccess'] = $login['LevelAccess'];
                            header('Location: /panel/index.php');
                            exit;
                        }else{
                            $msgError = 'Erro: Email ou Senha Inválido(os)';
                        }

                    }
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
    
    <form action="/panel/index.php" method="POST">

        <input type="text" name="email" placeholder="Seu Email" autocomplete="off">
        
        <input type="password" name="password" placeholder="Sua Senha" autocomplete="off">
        
        <input type="submit" value="Entrar" name="Login">
    </form>
</div>