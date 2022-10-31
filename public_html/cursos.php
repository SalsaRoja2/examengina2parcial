<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>XtremeC</title>

    <script src="https://kit.fontawesome.com/8f11a81b5b.js" crossorigin="anonymous"></script>
    <!-- CSS only -->


    <link rel="stylesheet" href="css/flexboxpiedepagina.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/estilocursos.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


</head>


<body>
    <div class="contenedor">
        <nav class="nav navbar navbar-dark bg-dark">
            <ul class="nav justify-content-center nav-pills nav-fill menu-horizontal">
                <li class="nav-item"><a class="nav-link active" style="background-color: #6610f2;" href="pagina1.php">Inicio</a></li>

                <li class="nav-item">
                    <a class="nav-link" href="cursos.html">Cursos</a>
                    <ul class="menu-vertical">

                        <li><a class="nav-link" href="">HTML</a></li>
                        <li><a class="nav-link" href="">CSS</a></li>
                        <li><a class="nav-link" href="">PHP</a></li>
                        <li><a class="nav-link" href="">JAVASCRIPT</a></li>
                    </ul>


                </li>


                <li class="nav-item"><a class="nav-link" href="Contacto.php">Contacto</a></li>


                <li class="nav-item"><a class="nav-link" href="Acerca%20de.html">Acerca de</a></li>
                <li class="nav-item"><a class="nav-link" href="validar.php">Administrador</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="Cuenta.html"><i class="fa-solid fa-user"> </i> Mi cuenta </a>
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
                        <a class="nav-link" href="logout.php">Cerrar sesión</a>

                        <?php
                                }else{

                                
                            ?>
                        <li><a class="nav-link" href="cuenta.php">iniciar sesión</a></li>
                        <li><a class="nav-link" href="regis.php">Registrarse</a></li>

                    </ul>
                    <?php
                            }
                         ?>


                </li>


            </ul>

        </nav>
        <div class="contenedor2">
        <div class="card">
            <figure>
                <img src="images/cppimg.jpg" alt="">
            </figure>
            <div class="contenido">
               <h3>C++</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid id optio cupiditate nesciunt, vitae tenetur. Laborum vitae nisi consectetur a incidunt saepe. Odio ullam, perspiciatis aliquid quasi voluptate illo facere.</p>
                <a href="validar2.php">Hacer Examen</a>
                
            </div>
        </div>
        
        <div class="card">
            <figure>
                <img src="images/phpimg.webp" alt="">
            </figure>
            <div class="contenido">
               <h3>PHP</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid id optio cupiditate nesciunt, vitae tenetur. Laborum vitae nisi consectetur a incidunt saepe. Odio ullam, perspiciatis aliquid quasi voluptate illo facere.</p>
                <a href="#">Hacer Examen</a>
                
            </div>
        </div>
        
        <div class="card">
            <figure>
                <img src="images/ccsimg.jpg" alt="">
            </figure>
            <div class="contenido">
               <h3>CSS</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid id optio cupiditate nesciunt, vitae tenetur. Laborum vitae nisi consectetur a incidunt saepe. Odio ullam, perspiciatis aliquid quasi voluptate illo facere.</p>
                <a href="#">Hacer Examen</a>
                
            </div>
        </div>
        
        <div class="card">
            <figure>
                <img src="images/jsimg.jfif" alt="">
            </figure>
            <div class="contenido">
               <h3>JAVASCRIPT</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid id optio cupiditate nesciunt, vitae tenetur. Laborum vitae nisi consectetur a incidunt saepe. Odio ullam, perspiciatis aliquid quasi voluptate illo facere.</p>
                <a href="#">Hacer Examen</a>
                
            </div>
        </div>
        </div>
      
        <footer>
            <section class="ft-top">

                <div class="ft-top-item">



                    <h2 class="ft-title-top"><i class="fa-solid fa-magnifying-glass"></i>Lo mas Visto</h2>
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
               

            </section>




            <section class="ft-legal">
                <ul class="ft-legal-list">
                    <li>&copy; 2022 C-rtificate Todos los derechos Reservados.</li>

                </ul>
            </section>
            <section class="ft-legal">
                <ul class="ft-legal-list2">


                    <li><a href="pagina1.html">Aviso de privacidad</a></li>
                    <li><a href="pagina1.html">|</a></li>
                    <li><a href="pagina1.html">Contrato Marco de prestación de servicios</a></li>
                    <li><a href="pagina1.html">|</a></li>
                    <li><a href="pagina1.html">Oferta de Servicios Mayoristas</a></li>
                    <li><a href="pagina1.html">|</a></li>
                    <li><a href="pagina1.html">Mapa de Sitio</a></li>

                </ul>
            </section>
        </footer>

    </div>








   
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body></html>