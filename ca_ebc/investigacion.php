<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include ('./dotk/00head/analitycs.html'); ?>
        <?php include ('./dotk/00head/cabecera.html'); ?>
        <?php include ('./dotk/00head/estilos.html'); ?>
        <!-- libreria Animate-css -->
        <link href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css" rel="stylesheet">
        </link>
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
            
        <!-- proyecto -->
                <div class="card-deck">
                <div class="card border-success mb-3" style="max-width: 18rem;">
                    <div class="card-header" id="proye">Proyectos</div>
                    <div class="card-body text-success">
                        <p class="card-text">
                            <ul>
                                <li>Innovación cognitiva en estudiantes con vulnerabilidad académica a través del desarrollo de competencias resilientes.</li>
                                <li>Llevando la Biotecnología a las escuelas primarias del municipio de Zempoala, Hgo.</li>
                                <li>Llevando la Biotecnología a las escuelas primarias de Mineral de la Reforma, Hgo.</li>
                                <li>Estudio de la instrumentación didáctica de las Asignaturas de Desarrollo Humano en las Universidades Politécnicas del Estado de Hidalgo</li>
                                <li>Promoción de aptitudes resilientes en Estudiantes de Secundaria. UAEH</li>
                                <li>Centro de aprendizaje del área académica de Ciencias de la Educación. UAEH</li>
                            </ul>
                        </p>
                    </div>
                </div>

                <div class="card border-success mb-3" style="max-width: 18rem;">
                    <div class="card-header" id="conve">Convenios</div>
                    <div class="card-body text-success">
                        <h5 class="card-title">Logrados</h5>
                        <p class="card-text">
                        Redes: 
                        <ul>
                            <li>AIRE, España</li>
                            <li>COMIE</li>
                            <li>SUV UDG</li>
                            <li>SUNEO , Oaxaca</li>
                            <li>CRETAM</li>
                            <li>UABC /  ITSON</li>
                        </ul>
                        </p>
                    </div>
                </div>
                </div>
                
                <!-- fin proyecto -->

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
