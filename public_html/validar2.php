<?php
     session_start();
    if(isset($_SESSION['usuario'])){
        
        if($_POST['estado'] == "pagado"){
            header("Location: certificado.php");
        }else{
            header("Location: pago.php");
        }
     }else{
        header("Location: cuenta.php");
     }
    
?>