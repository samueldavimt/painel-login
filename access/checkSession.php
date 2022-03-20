<?php

    if(!isset($_SESSION)){
        session_start();
    }

    function checkSession(){
        if(!isset($_SESSION['logged'])){
            header('Location: /panel/index.php');
            exit;
        }
    }

    function checkSessionAdm(){
        if($_SESSION['levelaccess'] != 'adm'){
            return false;
        }else{
            return true;
        }
    }


?>