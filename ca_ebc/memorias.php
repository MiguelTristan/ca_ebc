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
            <div class="alert alert-info text-center m-1 animated zoomInDown" role="alert">
            Detalles
            </div>
            
            <!-- memorais -->
            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                <i class="fas fa-hand-point-down"></i> Formación de recursos humanos
                </button>
            </p>
            <div class="collapse" id="collapseExample2">
            <div class="card card-body">
                <ul class="text-muted text-justify">
                    <li> <strong>2012</strong>      Impacto Por Dendroctonus Mexicanus en los Bosques de Pinus en el Municipio de Huasca de Ocampo, Estado de Hidalgo. Iván Fragoso García
Grado Licenciatura
</li>
                    <li><strong>2012</strong>      Diagnóstico y Efecto de Andricus Quercuslaurinus en Quercus Laurina en el Predio “La Victoria” Municipio de Acaxochitlán, Hidalgo.. Yenni Leidy Hernández Hernández.
Grado Licenciatura
</li>
                    <li><strong>2014</strong>      Reutilización de la merma generada en el proceso de amarantojitos botaneros en la empresa San Miguel de proyectos agropecuarios S.P.R.DE.R.S. Leticia González Jiménez
Grado Licenciatura
</li>
                    <li><strong>2015</strong>      Bióxido de Carbono Súper crítico, como una Alternativa a la Generación de Residuos en la Recuperación de Productos Naturales. Victor Arturo Baños Ruiz
Grado Licenciatura
</li>
                    <li><strong>2016</strong>      Escalamiento de la Producción de surfactantes Bioquímicos para la Recuperación Mejorada de Hidrocarburos. Javier Sánchez Hernández.
Grado Licenciatura 
</li>
                    <li><strong> 201</strong>7      Propuesta de Mejora en el Procedimiento de Implementación del Programa Estatal de Auditoría Ambiental de PROESPA Hidalgo. Adriana González Rodríguez
Grado Licenciatura
</li>
                    <li><strong>2017</strong>      Estudio de riesgo para prevenir el crecimiento del chapulín mediante modelo de simulación dinámica en el altiplano Hidalguense. María Luisa Cruz López.
Grado Licenciatura
</li>
                    <li><strong>2017</strong> Caracterización de Agua residual del río Tula de Allende en el municipio de San Salvador Hidalgo para conocer su vialidad como agua de riego. Nallely Hernández Pérez
Grado Licenciatura 
</li>
                    <li><strong>2017</strong> Análisis de la desviación estándar del método análitico en la determinación de la concentración de Hidróxido de calcio  de acuerdo a la norma ASTMC-25.28.4.2. Diana Cristal Mejía López.
Grado Licenciatura
</li>
                    <li><strong>2018</strong> Estudio para el tratamiento, disposición y manejo final  de los lodos generados de la planta potabilizadora el BORDO de CAASIM. Tania Muñoz Pérez.
Grado Licenciatura
</li>
                    <li><strong>2018</strong> Evaluación de la actividad antibacterial en una colección de cepas Bacillus SP. Víctor Iván Oliva Espinosa
Grado Licenciatura
</li>
                    <li><strong>2015</strong> Conformación de equipos de trabajo que potencialicen  el aprendizaje en las prácticas del laboratorio de Química. Alejandra Hernández Espinosa. 
Grado Maestría
</li>
                    <li><strong>2016</strong> El juego de marcos como estrategia didáctica para la comprensión del significado de la derivada, a través problemas cotidianos.Eloy Cornejo Pérez
Grado Maestría
</li>
                    <li><strong>2018</strong>. Los estilos de aprendizaje como estrategia para mejorar el rendimiento académico.Yenny Hernández Hernández
Investigación en proceso para  obtener el grado de maestría
</li>
                </ul>
            </div>
            </div>
            <!-- fin memrias -->

            <!-- seccion -->
            <div>
                <hr class="featurette-divider">
                    <!-- Menu con todos los sitios y mini sitios de la página -->
                    <?php include ('../lib18/coreFRONTx/main/tmenu-footer/menufooter.php'); ?>
                </hr>
            </div>
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
