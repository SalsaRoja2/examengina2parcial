<?php
     session_start();
    if($_SESSION['usuario'] == "admin"){
        header("Location: mostrartxt.php");
    }else{
        header("Location: cuenta.php");
    }
?>