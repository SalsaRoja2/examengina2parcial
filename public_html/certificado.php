<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XtremeC</title>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Collegiate+One&family=Lobster&display=swap" rel="stylesheet">
    
    
    <style>
        
        input[type=submit] {
          background-color: #04AA6D;
          border: none;
          color: white;
          padding: 18px 32px;
          text-decoration: none;
          margin: 4px 2px;
          cursor: pointer;
        }
        
        input[type=button] {
          background-color: #e62644;
          border: none;
          color: white;
          padding: 18px 32px;
          text-decoration: none;
          margin: 4px 2px;
          cursor: pointer;
        }
    
        body{
            justify-content: center;
            padding-left: 380px;
            background: #9d9d9d;
        }
        
        form{
            padding-left: 30px;
            justify-content: center;
            width: 80%;
            border-collapse: collapse;
            border: 20px solid block;
            background-color: #c1c0c0;
            font-family: 'Alumni Sans Collegiate One', sans-serif;
            font-size: 20px;
            
        }
        
    </style>
</head>
<body>
   
<form action= " <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> " method="post">   
   
   <table>
   
  <?php
       
       session_start();
    
error_reporting(0);

$preguntadas = array(); // declaramos una variable que usaremos de contenedor para las preguntas ya realizadas
$array = array(
    
    'Que entiendes por c++: <br>
    <input type="radio" name="Pregunta1" value="Bien-1" >C++ es un ejemplo de lenguaje de programación compilado, multiparadigma, principalmente de tipo imperativo y orientado a objetos<br>
    <input type="radio" name="Pregunta1" value="Mal">Un Servidor Web<br>
    <input type="radio" name="Pregunta1" value="Mal">Un editor para la creacion de paginas web<br>',
    
    
    'Principales usos de C++: <br>
    <input type="radio" name="Pregunta2" value="Bien-2" >Crear datos complejos.Definir operaciones sobre los datos complejos.Relacionar los datos complejos entre ellos.<br>
    <input type="radio" name="Pregunta2" value="Mal">Creaciones de Bases de Datos y Documentar Archivos<br>
    <input type="radio" name="Pregunta2" value="Mal">Aplicacion de cuentas Bancarias<br>',
    
    
    'Cual es la Sintaxis correcta para escribir "Hello World" en C++? <br>
    <input type="radio" name="Pregunta3" value="Bien-3" > cout << "Hello World"; <br>
    <input type="radio" name="Pregunta3" value="Mal"> print ("Hello World"); <br>
    <input type="radio" name="Pregunta3" value="Mal"> Console.WriteLine("Hello World"); <br>',
    
    
    'Como se insertan comentarios en C++: <br>
    <input type="radio" name="Pregunta4" value="Mal"> $$ <br>
    <input type="radio" name="Pregunta4" value="Bien-4"> // <br>
    <input type="radio" name="Pregunta4" value="Mal"> ** <br>',
    
    
    'Como se crea una variable de tipo entero con valor 5? <br>
    <input type="radio" name="Pregunta5" value="Bien-5" > int x = 5 <br>
    <input type="radio" name="Pregunta5" value="Mal"> x = 5 <br>
    <input type="radio" name="Pregunta5" value="Mal"> num x = 5 <br>',
    
    
    'Cual es la funcion para crear una variable de tipo flotante <br>
    <input type="radio" name="Pregunta6" value="Mal"> int <br>
    <input type="radio" name="Pregunta6" value="Mal"> char <br>
    <input type="radio" name="Pregunta6" value="Bien-6" > double <br>',
    
    'Cual es el operador para comparar si son iguales nuestras incognitas <br>
    <input type="radio" name="Pregunta7" value="Mal"> <> <br>
    <input type="radio" name="Pregunta7" value="Bien-7" > == <br>
    <input type="radio" name="Pregunta7" value="Mal"> = <br>',
    
    'Para declarar un array que tipo se utiliza? <br>
    <input type="radio" name="Pregunta8" value="Mal"> ( ) <br>
    <input type="radio" name="Pregunta8" value="Bien-8" > [ ] <br>
    <input type="radio" name="Pregunta8" value="Mal"> { } <br>',
    
    'Que se utiliza para detener un loop? <br>
    <input type="radio" name="Pregunta9" value="Mal"> stop <br>
    <input type="radio" name="Pregunta9" value="Bien-9" > break <br>
    <input type="radio" name="Pregunta9" value="Mal"> exit <br>',
    
    'Cual es el resultado del siguiente codigo ? <br>
    <img src="images/Ex7.jpg" alt=""> <br>
    <input type="radio" name="Pregunta10" value="Mal"> spaces <br>
    <input type="radio" name="Pregunta10" value="Mal"> spaces in text <br>
    <input type="radio" name="Pregunta10" value="Bien-10" > spacesintext <br>',
    
    'Cual es el resultado del siguiente codigo ? <br>
    <img src="images/Ex6.jpg" alt=""> <br>
    <input type="radio" name="Pregunta11" value="Mal"> Hello <br>
    <input type="radio" name="Pregunta11" value="Bien-11" > Error <br>
    <input type="radio" name="Pregunta11" value="Mal"> World <br>',
    
    'Cual es el resultado del siguiente codigo ? <br>
    <img src="images/Ex1.jpg" alt=""> <br>
    <input type="radio" name="Pregunta12" value="Bien-12" > Error de Copilacion <br>
    <input type="radio" name="Pregunta12" value="Mal"> Base <br>
    <input type="radio" name="Pregunta12" value="Mal"> Ninguna de las anteriores <br>',
    
    'Cual es el resultado del siguiente codigo ? <br>
    <img src="images/Ex2.jpg" alt=""> <br>
    <input type="radio" name="Pregunta13" value="Mal"> 5 <br>
    <input type="radio" name="Pregunta13" value="Bien-13" > Garbage <br>
    <input type="radio" name="Pregunta13" value="Mal"> error al copilar <br>',
    
    'Cual es el resultado del siguiente codigo ? <br>
    <img src="images/Ex3.jpg" alt=""> <br>
    <input type="radio" name="Pregunta14" value="Mal"> Error al copilar <br>
    <input type="radio" name="Pregunta14" value="Bien-14" > 0 <br>
    <input type="radio" name="Pregunta14" value="Mal"> 65535 <br>',
    
    'Cual es el resultado del siguiente codigo ? <br>
    <img src="images/Ex4.jpg" alt=""> <br>
    <input type="radio" name="Pregunta15" value="Bien-15" > 60 13 <br>
    <input type="radio" name="Pregunta15" value="Mal"> 73 73 <br>
    <input type="radio" name="Pregunta15" value="Mal"> 13 60 <br>',
    
   'Cual es el resultado del siguiente codigo ? <br>
    <img src="images/Ex5.jpg" alt=""> <br>
    <input type="radio" name="Pregunta16" value="Mal"> C++ C++ <br>
    <input type="radio" name="Pregunta16" value="Mal"> ++ ++ <br>
    <input type="radio" name="Pregunta16" value="Bien-16" > C++ ++ <br>'

    );
    
$items=count($array)-1;
 
for ($i=1; $i<=8; $i++){
    $var=rand( 0 , $items );
    if (in_array($array[$var], $preguntadas)){ 
        
        
        
        // Buscamos si la pregunta ya se habia hecho
        $i--;  // restamos 1 para reutilizar el indice de la pregunta repetida  
    }else{
        echo $i.') '.$array[$var].'<br>';  // Mostramos la pregunta
        $preguntadas[].=$array[$var];  // y la agregamos a las que ya se hicieron        
    }
}

?> 
  
  <input type="submit" name="submit" value="Enviar Respuestas" >
  <input type="button" name="Boton" value="Cancelar Examen" >
  
  
  </table>
   
 </form>
 
  
 
 <?php
    
    
    
    
    
    
    if($_POST){
            
        $Pregunta1 = $_POST["Pregunta1"];
        $Pregunta2 = $_POST["Pregunta2"];
        $Pregunta3 = $_POST["Pregunta3"];
        $Pregunta4 = $_POST["Pregunta4"];
        $Pregunta5 = $_POST["Pregunta5"];
        $Pregunta6 = $_POST["Pregunta6"];
        $Pregunta7 = $_POST["Pregunta7"];
        $Pregunta8 = $_POST["Pregunta8"];
        $Pregunta9 = $_POST["Pregunta9"];
        $Pregunta10 = $_POST["Pregunta10"];
        $Pregunta11 = $_POST["Pregunta11"];
        $Pregunta12 = $_POST["Pregunta12"];
        $Pregunta13 = $_POST["Pregunta13"];
        $Pregunta14 = $_POST["Pregunta14"];
        $Pregunta15 = $_POST["Pregunta15"];
        $Pregunta16 = $_POST["Pregunta16"];
            
       
        $C = 0;
        $I = 5;
        
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
        if($Pregunta5=="Bien-5"){
            $C+=1;
        }
        if($Pregunta6=="Bien-6"){
            $C+=1;
        }
        if($Pregunta7=="Bien-7"){
            $C+=1;
        }
        if($Pregunta8=="Bien-8"){
            $C+=1;
        }
        if($Pregunta9=="Bien-9"){
            $C+=1;
        }
        if($Pregunta10=="Bien-10"){
            $C+=1;
        }
        if($Pregunta11=="Bien-11"){
            $C+=1;
        }
        if($Pregunta12=="Bien-12"){
            $C+=1;
        }
        if($Pregunta13=="Bien-13"){
            $C+=1;
        }
        if($Pregunta14=="Bien-14"){
            $C+=1;
        }
        if($Pregunta15=="Bien-15"){
            $C+=1;
        }
        if($Pregunta16=="Bien-16"){
            $C+=1;
        }
        if($C >= $I){
            
            date_default_timezone_set('America/Mexico_City');
            
            $hora=date("h-m-s");
            $fechasys=date('d-m-y');
            
            $B = 8;
            $F = $C/$B;
            $F = $F*10;
            $E = $F;
            
            $arch = fopen("Certificado.txt", "a+");
            $datos= $_SESSION['usuario']." "."C++"." ".$E." "."Aprobado"." ".$fechasys." ".$hora."\r\n";
            fwrite($arch, $datos);
    
            fclose($arch);
            
            
            header("Location: Aprobado.php");
            
            
        }else{
            
           
            date_default_timezone_set('America/Mexico_City');
            $hora=date("h-m-s");
            $fechasys=date('d-m-y');
            
            
            
            $B = 8;
            $F = $C/$B;
            $F = $F*10;
            $E = $F;
            
            
            $arch = fopen("Certificado.txt", "a+");
            $datos= $_SESSION['usuario']." "."C++"." ".$E." "."Aprobado"." ".$fechasys." ".$hora."\r\n";
            fwrite($arch, $datos);
    
            fclose($arch);
            
            header("Location: Reprobado.php");
            
            
        }
    }
    
    ?>
    
</body>
</html>




