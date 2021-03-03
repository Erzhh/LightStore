<?php 
    session_start();
    if(!isset($_SESSION['login']) && !isset($_SESSION['password']) || ($_SESSION['role']==2)){
        header('Location: ../registr.php');
    }
?>