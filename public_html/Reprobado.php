<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XtremeC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

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
  
  <nav class="nav navbar navbar-dark bg-dark">
            <ul class="nav justify-content-center nav-pills nav-fill menu-horizontal">
                <li class="nav-item"><a class="nav-link active" style="background-color: #6610f2;" href="pagina1.html">Inicio</a></li>

                <li class="nav-item">
                    <a class="nav-link" href="Cursos.html">Cursos</a>
                    <ul class="menu-vertical">

                        <li><a class="nav-link" href="">HTML</a></li>
                        <li><a class="nav-link" href="">CSS</a></li>
                        <li><a class="nav-link" href="">PHP</a></li>
                        <li><a class="nav-link" href="">JAVASCRIPT</a></li>
                    </ul>


                </li>


                <li class="nav-item"><a class="nav-link" href="Contacto.html">Contacto</a></li>


                <li class="nav-item"><a class="nav-link" href="Acerca%20de.html">Acerca de</a></li>
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
   
   <div class="card bg-danger">
    <div class="card-body text-center">
      
     <div class="container">
  <div class="alert alert-danger">
    <strong>Lamentamos Decirte Que No Pasaste</strong> Pulsa a Continuacion<a href="pagina1.php" class="alert-link"> Para Volver a la Pagina de Inicio</a>.
  </div>
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
                <div class="ft-main-item">


                    <h2 class="ft-title">Nuestros servicios</h2>
                    <ul>
                        <li><a href="#">ejemplo1</a></li>
                        <li><a href="#">ejemplo2</a></li>
                        <li><a href="#">ejemplo4</a></li>
                        <li><a href="#">asd</a></li>
                        <li><a href="#">asd</a></li>
                    </ul>
                </div>
                <div class="ft-main-item">
                    <h2 class="ft-title"></h2>
                    <ul>
                        <li><a href="#">asd</a></li>
                        <li><a href="#">asd</a></li>
                        <li><a href="#">asd</a></li>
                        <li><a href="#">asd</a></li>
                    </ul>
                </div>
                <div class="ft-main-item">
                    <h2 class="ft-title">Conoce Mas</h2>
                    <ul>
                        <li><a href="#">asd</a></li>
                        <li><a href="#">asd</a></li>
                        <li><a href="#">asd</a></li>
                        <li><a href="#">asd</a></li>
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
    
</body>
</html>