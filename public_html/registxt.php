<?php
     
 
    $usuario = $_POST["usur"];
    $contra = $_POST["contras"];
    $nombre =$_POST["nombrec"];
    $correo=$_POST["correo"];
     
    $arch = fopen("usuarios.txt","a+");
    $datos= $usuario." ".$contra." ".$nombre." ".$correo."\r\n";
    fwrite($arch, $datos);
    
    fclose($arch);
   
     
    header("Location: cuenta.php");

?>