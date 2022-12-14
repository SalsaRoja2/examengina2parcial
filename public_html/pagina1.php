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
    <link rel="shortcut icon" href="images/favicon.ico">

</head>


<body>
    <div class="contenedor">
        <nav class="nav navbar navbar-dark bg-dark">
            <ul class="nav justify-content-center nav-pills nav-fill menu-horizontal">

            <li class="nav-item" ><img src="images/logo.png" alt="" width="230px"></li>
                <li class="nav-item"><a class="nav-link active" style="background-color: #6610f2;" href="pagina1.php">Inicio</a></li>

                <li class="nav-item">
                    <a class="nav-link" href="cursos.php ">Cursos</a>
                    <ul class="menu-vertical">

                        <li><a class="nav-link" href="">C++</a></li>
                        <li><a class="nav-link" href="">CSS</a></li>
                        <li><a class="nav-link" href="">PHP</a></li>
                        <li><a class="nav-link" href="">JAVASCRIPT</a></li>
                      

                    </ul>


                </li>


                <li class="nav-item"><a class="nav-link" href="Contacto.php">Contacto</a></li>


                <li class="nav-item"><a class="nav-link" href="Acerca%20de.html">Acerca de</a></li>
                <li class="nav-item"><a class="nav-link" href="validar.php">Administrador</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="cuenta.php"><i class="fa-solid fa-user"> </i> Mi cuenta </a>
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
                        <a class="nav-link" href="logout.php">Cerrar sesi??n</a>

                        <?php
                                }else{

                                
                            ?>
                        <li><a class="nav-link" href="cuenta.php">iniciar sesi??n</a></li>
                        <li><a class="nav-link" href="regis.php">Registrarse</a></li>

                    </ul>
                    <?php
                            }
                         ?>


                </li>


            </ul>

        </nav>
        

        <main>
            <div class="container-slaider">
                <div class="slider" id="slider">
                    <div class="slider__section">

                        <img src="images/2c66a7c617b834535487fbc24a7c3d82.jpg" alt="" class="slider__img">
                    </div>
                    <div class="slider__section">

                        <img src="images/9216bcd74a3d55de1a26021541003489.jpg" alt="" class="slider__img">

                    </div>
                    <div class="slider__section">

                        <img src="images/fondos%20animados2_zpsdbpvulbd.gif" alt="" class="slider__img">

                    </div>
                </div>
                <div class="slider__btn slider__btn--right " id="right">&#62;</div>
                <div class="slider__btn slider__btn--left" id="left">&#60;</div>


            </div>


        </main>


        <div id="sidebar">
            <div class="contenedor1">
                <div class="imagen">
                    <figure>
                        <img src="images/imagengrid.jpg" alt="">
                        <div class="capa">
                            <h3>Busca los mejores cursos para ti</h3>
                            <p>constantemente estamos renovando y revisando los
                                cursos que podr??an gustarte estate al pendiente porque hay siempre diferentes
                            </p>
                        </div>
                    </figure>
                </div>
            </div>


        </div>

        <div id="content1">
            <h1 style="text-align: center;color: orange; align-content: center;padding-top: 20px; padding-bottom:">Porque certificarte con nosotros?</h1>
            <div class="contenedor1">


                <div id="c1">
                    <h2>Trabajo</h2>

                </div>
                <div id="c2">
                    <h2>Becas</h2>
                </div>
                <div id="c3">
                    <h2>Excelentes Resultados</h2>
                </div>
                <div id="p1">
                    <p>Las oportunidades de trabajo con nuestro certificado aumentan y son a??n mas seguras!</p>

                </div>
                <div id="p2">
                    <p>Tenemos beca, puedes participar mandandonos un correo electronico!</p>

                </div>
                <div id="p3">
                    <p>el 80% de las personas que compran nuestros cursos obtienen aumentos o mejores trabajos</p>

                </div>

            </div>

        </div>

        <div id="content2">

            <h1 style="text-align: center;color: orange; align-content: center;padding-top: 20px; padding-bottom:">Programamos Expertos</h1>
            <div class="contenedor1">



                <div id="c2">

                </div>




                <div id="p2">
                    <p>Si quieres Aprender a Programar, Con Xtreme Code te vamos a ense??ar</p>

                </div>


            </div>

        </div>
        <div id="content3"> <div class="imagen">
                 
                        
                         
                        <div class="capa">
                          <h3 style="text-align: center; color: orange;">Quienes somos?</h3>
                            <p style="text-align: center; color: whitesmoke;">somos una organizaci??n fundada por expertos en programaci??n que  constantemente  estan </p><p style="text-align: center; color: whitesmoke;">actualizandose para tener las mejores certificaci??nes a nivel mundial </p>
                            <p style="text-align: center;color: whitesmoke;">siempre estamos en constante busqueda de las mejores herramientas </p>
                             <p style="text-align: center;color: whitesmoke;">para poder que las personas que deseen aprendera programar</p>
                              <p style="text-align: center;color: whitesmoke;">puedan hacerlo</p>
                        </div>
                 
                </div></div>
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

                
                
            <?php

$host= $_SERVER["HTTP_HOST"];

$url= $_SERVER["REQUEST_URI"];

$archivo="";
function actualizacion($nombre){
$archivo = $_SERVER['DOCUMENT_ROOT'].$nombre;
$actual = date("d/m/Y",filemtime($archivo));
return 'Actualizado: '.$actual;
}
$nombre ='http://" . $host . $url';
echo actualizacion($archivo);
?>


            <!-- Footer legal -->
            <section class="ft-legal">
                <ul class="ft-legal-list">
                    <li>&copy; 2022 C-rtificate Todos los derechos Reservados.</li>

                </ul>
            </section>
            <section class="ft-legal">
                <ul class="ft-legal-list2">


                    <li><a href="pagina1.html">Aviso de privacidad</a></li>
                    <li><a href="pagina1.html">|</a></li>
                    <li><a href="pagina1.html">Contrato Marco de prestaci??n de servicios</a></li>
                    <li><a href="pagina1.html">|</a></li>
                    <li><a href="pagina1.html">Oferta de Servicios Mayoristas</a></li>
                    <li><a href="pagina1.html">|</a></li>
                    <li><a href="pagina1.html">Mapa de Sitio</a></li>

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
