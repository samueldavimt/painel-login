<?php
    if(isset($_GET['logout'])){
       if($_GET['logout'] == true){

            if(!isset($_SESSION)){
                session_start();
            }
        
            $_SESSION = array();
            session_destroy();
            header('Location: /panel/index.php');
            exit;
       }
    }
?>


<header>
    <div class="header-container">
        <h2>LOGO</h2>
        <nav>
            <ul>
                <li><a href="/panel/index.php">Home</a></li>
                <li><a href="/panel/access/panel.php">Painel</a></li>
                <!-- <li><a href="/panel/access/logout.php">Logout</a></li> -->
                <li><a href="?logout=true">Logout</a></li>
            </ul>
        </nav>
    </div>
</header>
