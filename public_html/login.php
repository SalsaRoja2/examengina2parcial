<?php
 
$usuario = $_POST["usr"];
$palabra_secreta = $_POST["contra"];

 
$file=fopen("usu.txt", "r");
$band=0; //para saber si la cuenta y contrasena estan en el archivo
while(!feof($file)){
    $linea=fgets($file);
    if ($linea != ""){
      $aux=preg_split("/[\s,]+/",$linea);   /*https://www.w3schools.com/php/func_regex_preg_split.asp
                                            https://www.w3schools.com/php/php_ref_regex.asp*/
      $user = $aux[0];
      $contrasena = $aux[1];
     
      if ($user===$usuario && $contrasena === $palabra_secreta){            
            $band=1; break;
     }
    }
}   
fclose($file);

# Luego de haber obtenido los valores, ya podemos comprobar:
if ($band==1){
     
    session_start();
    $micarrito=[];
     
    $_SESSION["usuario"] = $usuario;
    $_SESSION["compras"] = $micarrito;

    # Luego redireccionamos a la pagina "Secreta"
    header("Location: index.php");
    }else{
    # No coinciden, asi  que simplemente imprimimos un
    # mensaje diciendo que es incorrecto
        echo "El usuario o la contrasena son incorrectos";
    }
 
?>