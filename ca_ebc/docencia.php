<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include ('./dotk/00head/analitycs.html'); ?>
        <?php include ('./dotk/00head/cabecera.html'); ?>
        <?php include ('./dotk/00head/estilos.html'); ?>
        <!-- libreria Animate-css -->
        <link href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css" rel="stylesheet">
        </link>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/imagehover.css/1.0/css/imagehover.min.css">
    </head>
    <body>
        <a id="arriba">
        </a>
        <header>
            <!-- Logos e imagen de hidalgo -->
            <?php include ('../lib18/seph/hf/header.html'); ?>
            <nav>
                <!-- Menu principal superior -->
                <?php include ('../lib18/coreFRONTx/01header/nav/menu-superior/menu.html'); ?>
            </nav>
        </header>
        <!-- Menu menu-pegajoso DarkDesign -->
        <?php include ('./dotk/01header/02begajoso/menu-pegajoso.html'); ?>
        <main class="main container">
            <div class="alert alert-info text-center m-1 animated zoomInDown" role="alert">
                Programas Educativos Atendidos
            </div>

            <!-- Cards -->
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top" src="./media/img/ciru.jpeg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title text-center"><a href="http://www.upp.edu.mx/ofertaeducativa/?page_id=17">Visitar</a></h5>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="./media/img/mecatro.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title text-center"><a href="http://www.upp.edu.mx/ofertaeducativa/?page_id=90">Visitar</a></h5>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="./media/img/biotec.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title text-center"><a href="http://www.upp.edu.mx/ofertaeducativa/?page_id=45">Visitar</a></h5>
            </div>
              </div>
            </div>
            <!-- Fin cards -->

            <!-- Hielra 1 -->
            <div class="card-deck">
                <div class="card mb-5">
                <figure class="card-img-top imghvr-push-up mb-2">
                    <img src="./media/img/FullSizeRender-2.jpg">
                    <figcaption>
                        <h3 class="ih-fade-up">Tutorías</h3>
                        <p class="ih-zoom-in ih-delay-md">
                            <i class="small">Hernández E.A. Con grupos del Programa educativo de Ingeniería en Biotecnología
Benítez C. L. Con grupos del PE Ingeniería en Biotecnología
Martínez R.R.C. </i>
                        </p>
                    </figcaption>
                    <button class="btn btn-primary btn-block"><i class="fas fa-hand-point-up"></i></button>
                </figure> 
                <a href="#" target="_blank"><button class="btn btn-primary btn-lg btn-block">Leer mas</button></a>
                </div>
                <div class="card mb-5">
                <figure class="card-img-top imghvr-zoom-out mb-2">
                    <img src="./media/img/C8.jpg">
                    <figcaption>
                        <h3 class="ih-fade-up">Proyectos</h3>
                        <p class="ih-zoom-in ih-delay-md">
                            <i>
                                <ul>
                                    <li>Identificación de estrategias de aprendizaje que favorezcan el desarrollo de habilidades reflexivas.</li>
                                    <li>Factores que detonen la vulnerabilidad en el desempeño de alumnos y profesores en el contexto universitario.</li>
                                </ul>
                            </i>
                        </p>
                    </figcaption>
                    <button class="btn btn-primary btn-block"><i class="fas fa-hand-point-up"></i></button>
                </figure> 
                <a  href="#proye">
                <button class="btn btn-primary btn-lg btn-block">Leer mas</button>
                </a>
                </div>
                <div class="card mb-5">
                <figure class="card-img-top imghvr-shutter-in-out-diag-2 mb-2">
                    <img src="./media/img/C2.jpg" height="470px">
                    <figcaption>
                        <h3 class="ih-fade-up">Convenios</h3>
                        <p class="ih-zoom-in ih-delay-md">
                            <i>Acuerdos logrados con personas y entidades sobre un asuntos de interes.</i>
                        </p>
                    </figcaption>
                    <button class="btn btn-primary btn-block"><i class="fas fa-hand-point-up"></i></button>
                </figure> 
                <a href="#conve">
                <button class="btn btn-primary btn-lg btn-block">Leer mas</button>
                </a>
                </div>
                </div>
                <!-- Fin hilera 1 -->

        </main>
        <footer>
            <!-- footer de gobierno del estado -->
            <?php include ('../lib18/seph/hf/footer.html'); ?>
        </footer>
        <!-- Librerias javascript -->
        <?php include ('../lib18/coreFRONTx/09js/java.html'); ?>
        <!-- Script para dar la animacion al boton flotante que lleva arriba -->
        <a class="back-to-top" href="#">
            Volver arriba
        </a>
        <script src="../lib18/coreFRONTx/10boton-arriba/script.js">
        </script>
        <!-- libreria Animate -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js">
        </script>
        <script>
            new WOW().init();
        </script>
    </body>
</html>
