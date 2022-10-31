<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XtremeC</title>

    <script src="https://kit.fontawesome.com/8f11a81b5b.js" crossorigin="anonymous"></script>
    <!-- CSS only -->


    <link rel="stylesheet" href="css/flexboxpiedepagina.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/carrousel.css">

<link rel="stylesheet" href="css/normal.css">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>


<body>
    <div class="contenedor">
        <nav>
            <ul class="menu-horizontal">
                <li><a href="">Inicio</a></li>

                <li>
                    <a href="">Cursos</a>
                    <ul class="menu-vertical">

                        <li><a href="">HTML</a></li>
                        <li><a href="">CSS</a></li>
                        <li><a href="">PHP</a></li>
                        <li><a href="">JAVASCRIPT</a></li>
                    </ul>


                </li>


                <li><a href="">Contacto</a></li>


                <li><a href="">Acerca de</a></li>
                <li>
                    <a href=""><i class="fa-solid fa-user"> </i> Mi cuenta </a>
                    <ul class="menu-vertical">
                    <?php
                        date_default_timezone_set('America/Mexico_City');
                        $today = getdate();
                        $hora=$today["hours"];
                        
                        $usrh="";
                        if ($hora<=12) {
                        $usrh="Buenos dias ";
                        }elseif($hora<19 && $hora >12){
                        $usrh="Buenas tardes ";
                        }elseif($hora<=24 && $hora >=19){
                        $usrh="Buenas noches ";
                        }
                                session_start();
                                if(isset($_SESSION['usuario'])){

                                    $var = $usrh.$_SESSION['usuario'];
                                    echo "<p style='color:white;'>$var </p>";
                                    ?>
                                    <a href="logout.php">Cerrar sesión</a>
                                        
                            <?php
                                }else{

                                
                            ?>
                        <li><a href="cuenta.php">iniciar sesión</a></li>
                        <li><a href="regis.php">Registrarse</a></li>

                    </ul>
                         <?php
                            }
                         ?>       


                </li>


            </ul>

        </nav>
        <?php
            
            
            $file=fopen("Certificado.txt", "r");
            $band=0; //para saber si la cuenta y contrasena estan en el archivo
            while(!feof($file)){
                $linea=fgets($file);
                if ($linea != ""){
                $aux=preg_split("/[\s,]+/",$linea);   /*https://www.w3schools.com/php/func_regex_preg_split.asp
                                                        https://www.w3schools.com/php/php_ref_regex.asp*/
                $user = $aux[0];
                $cert = $aux[1];
                $calif=$aux[2];
                $estado=$aux[3];
                $fecha=$aux[4];
                $hora=$aux[5];
                
                
                }
            }   
            fclose($file);

           
        ?>
        <div style="padding-top:20px;" class="container">
            <table class="table table-hover">
                <tr>
                    <th>Usuario</th>
                    <th>Certificado</th>
                    <th>Calificacion</th>
                    <th>Estado</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                </tr>
                <?php
                     $file=fopen("Certificado.txt", "r");
                     $band=0; //para saber si la cuenta y contrasena estan en el archivo
                     while(!feof($file)){
                         $linea=fgets($file);
                        if ($linea != ""){
                         $aux=preg_split("/[\s,]+/",$linea);   /*https://www.w3schools.com/php/func_regex_preg_split.asp
                                                                 https://www.w3schools.com/php/php_ref_regex.asp*/
                         $user = $aux[0];
                         $cert = $aux[1];
                         $calif=$aux[2];
                         $estado=$aux[3];
                         $fecha=$aux[4];
                         $hora=$aux[5];
                         
                         
                         }
                         echo "<tr>";
                         echo "<td> $user </td>";
                         echo "<td> $cert </td>";
                         echo "<td> $calif </td>";
                         echo "<td> $estado </td>";
                         echo "<td> $fecha </td>";
                         echo "<td> $hora </td>";
                         echo "</tr>";
                     }   
                     fclose($file);
                   
                    
                ?>
            </table>
        </div>
        
        <footer>
            <section class="ft-top">

                <div class="ft-top-item">



                    <h2 class="ft-title-top"></i>Lo mas Visto</h2>
                    <ul>
                        <li><a href="#" style="color: whitesmoke">Cursos</a></li>
                        <li><a href="#" style="color: whitesmoke">Pagos</a></li>
                        <li><a style="color: whitesmoke" href="#">Recibo</a></li>


                    </ul>
                </div>
                <div class="ft-top-item">
                    <h2 class="ft-title-top"><i class="fa-regular fa-lightbulb"></i>Guias y manuales</h2>
                    <ul>
                        <li><a href="#" style="color: whitesmoke">Encuentra manuales,guias <br> articulos y preguntas frecuentes.</a></li>

                    </ul>
                </div>
                <div class="ft-top-item">
                    <h2 class="ft-title-top"><i class="fa-regular fa-message"></i>Contactanos</h2>
                    <ul>
                        <li><a style="color: whitesmoke" href="formularios.html">Nuestros Asesores <br> estan capacitados para atender tus dudas</a></li>

                    </ul>
                </div>

            </section>

            <section class="ft-main">
                <div class="ft-main-item">
                    <p>Suscribete Para mas informacion</p>
                    <form>
                        <input type="email" name="email" placeholder="Enter email address">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
                <div class="ft-main-item">


                    <h2 class="ft-title">Certificados</h2>
                    <ul>
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">JAVASCRIPT</a></li>
                        <li><a href="#">C++</a></li>
                        <li><a href="#">PHP</a></li>
                        <li><a href="#">CSS</a></li>
                    </ul>
                </div>
                <div class="ft-main-item">
                    <h2 class="ft-title">Contactanos!</h2>
                    <ul>
                        <li><a href="#">Contacto</a></li>
                        
                    </ul>
                </div>
                <div class="ft-main-item">
                    <h2 class="ft-title">Conoce Mas</h2>
                    <ul>
                        <li><a href="#">Acerca de</a></li>
                        <li><a href="#">Cursos</a></li>
                     
                    </ul>
                </div>

            </section>  




            <!-- Footer legal -->
            <section class="ft-legal">
                <ul class="ft-legal-list">
                    <li>&copy; 2022 C-rtificate Todos los derechos Reservados.</li>

                </ul>
            </section>
            <section class="ft-legal">
                <ul class="ft-legal-list2">


                    <li><a href="#">Aviso de privacidad</a></li>
                    <li><a href="#">|</a></li>
                    <li><a href="#">Contrato Marco de prestación de servicios</a></li>
                    <li><a href="#">|</a></li>
                    <li><a href="#">Oferta de Servicios Mayoristas</a></li>
                    <li><a href="#">|</a></li>
                    <li><a href="#">Mapa de Sitio</a></li>

                </ul>
            </section>
        </footer>

    </div>







    <div class="container">
        <footer>

        </footer>
    </div>


    <script src="js/carrousel.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body></html>
