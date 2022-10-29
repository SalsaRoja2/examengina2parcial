<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Certificado</title>
</head>
<body>
   
<form action= " <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> " method="post">   
   
  <?php
    
    

$preguntadas = array(); // declaramos una variable que usaremos de contenedor para las preguntas ya realizadas
$array = array(
    
    'Que entiendes por c++: <br>
    <input type="radio" name="Pregunta1" value="Bien-1" checked="checked" >Es un lenguaje Bien Chido<br>
    <input type="radio" name="Pregunta1" value="Mal">Es una puta mierda<br>
    <input type="radio" name="Pregunta1" value="Mal">Es una puta mierda<br>',
    
    
    'Principales usos de C++: <br>
    <input type="radio" name="Pregunta2" value="Bien-2" checked="checked" >Programar<br>
    <input type="radio" name="Pregunta2" value="Mal">Hacer Hosting<br>
    <input type="radio" name="Pregunta2" value="Mal">Editor Web<br>',
    
    
    'Te gusta C++: <br>
    <input type="radio" name="Pregunta3" value="Bien-3" checked="checked" >Si<br>
    <input type="radio" name="Pregunta3" value="Mal">No<br>
    <input type="radio" name="Pregunta3" value="Mal">Mas o menos<br>',
    
    
    'Programarias en C++: <br>
    <input type="radio" name="Pregunta4" value="Mal">No<br>
    <input type="radio" name="Pregunta4" value="Bien-4" checked="checked" >Si<br>
    <input type="radio" name="Pregunta4" value="Mal">Mas o menos<br>'

    );
$items=count($array)-1;
 
for ($i=1; $i<=3; $i++){
    $var=rand( 0 , $items );
    if (in_array($array[$var], $preguntadas)){ // Buscamos si la pregunta ya se habia hecho
        $i--;  // restamos 1 para reutilizar el indice de la pregunta repetida  
    }else{
        echo $i.') '.$array[$var].'<br>';  // Mostramos la pregunta
        $preguntadas[].=$array[$var];  // y la agregamos a las que ya se hicieron        
    }
}

?> 
  
  <input type="submit" name="submit" value="Enviar">
   
 </form>
 
 <?php
    
    if($_POST){
        $Pregunta1 = $_POST["Pregunta1"];
        $Pregunta2 = $_POST["Pregunta2"];
        $Pregunta3 = $_POST["Pregunta3"];
        $Pregunta4 = $_POST["Pregunta4"];
        $C = 0;
        $I = 2;
        if($Pregunta1=="Bien-1"){
            $C+=1;
        }
        if($Pregunta2=="Bien-2"){
            $C+=1;
        }
        if($Pregunta3=="Bien-3"){
            $C+=1;
        }
        if($Pregunta4=="Bien-4"){
            $C+=1;
        }
        if($C >= $I){
            echo "Pasaste el examen";
        }
    }
    
    ?>
  
    
</body>
</html>




