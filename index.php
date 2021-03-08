<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='author' content='Andrei Ionut Hrisca'>
    <title>Andrei Portfolio</title>
    <meta name="title" content="Andrei Portfolio">
    <meta name='description' content='Portfolio para la asignatura Diseño de DAW.'>
    <meta name='keywords' content='PHP, HTML, SEO, SCSS'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!-- Favicon -->
    <link rel='shortcut icon' href='./assets/img/favicon.ico' sizes='16x16' type='image/ico'>
    <!-- Estilos -->
    <link rel='stylesheet' href='./css/indexExamen.css'>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</head>
<body>
    <main>
        <span id="inicio"></span>
        <header>
            <h1>Andrei Ionut Hrisca</h1>
            <p>Esto es un portfolio realizado por Andrei Ionut Hrisca, en la asignatura de Diseño de interfaces web, en el año 2021, curso Desarrollo de aplicaciones web.</p>
            <nav>
                <span>Desarrollo de aplicaciones web</span>
                <button class="switch" id="switch">
                    <span><i class="fas fa-sun"></i></span>
                    <span><i class="fas fa-moon"></i></span>
                </button>
            </nav>
        </header>

        <section>
            <article>
                <picture>
                    <img src="./assets/img/IndexPages/wordpress.jpg" alt="Perfil picture">
                    <h3>WordPress</h3>
                    <figcaption>Sitio web creado con WordPress.</figcaption>
                    <a href="./wordpress" title="Wordpress">Visitar sitio</a>
                </picture>
                
            </article>

            <article>
                <picture>
                    <img src="./assets/img/IndexPages/media.jpg" alt="Perfil picture">
                    <h3>RWD</h3>
                    <figcaption>Rejilla de resultado de los compañeros. (Media queries y responsive)</figcaption>
                    <a href="./Segundo_Trimestre/classmates.html" title="Promoción DAW 2021">Visitar sitio</a>
                </picture>
            </article>

            <article>
                <picture>
                    <img src="./assets/img/IndexPages/flex.jpg" alt="Imagenes con flexbox">
                    <h3>Flexbox</h3>
                    <figcaption>Flexbox y semantica.</figcaption>
                    <a href="./Segundo_Trimestre/felxbox.html" title="Flexbox">Visitar sitio</a>
                </picture>
            </article>

            <article>
                <picture>
                    <img src="./assets/img/IndexPages/contacto.jpg" alt="Formulario de contacto">
                    <h3>Contacto</h3>
                    <figcaption>Formulario de contacto.</figcaption>
                    <a href="./Segundo_Trimestre/formulario/datos-personales-enviophp.html" title="Contacto">Visitar sitio</a>
                </picture>
            </article>

            <article>
                <picture>
                    <img src="./assets/img/IndexPages/benchmark.jpg" alt="Benchmark test">
                    <h3>Benchmark</h3>
                    <figcaption>Probando el servidor con nuestro Benchmark.</figcaption>
                    <a href="./Segundo_Trimestre/benchmark.php" title="Benchmark">Visitar sitio</a>
                </picture>
            </article>

            <article>
                <picture>
                    <img src="./assets/img/IndexPages/estilos.jpg" alt="Perfil picture">
                    <h3>Guía de estilos</h3>
                    <figcaption>Descripción.</figcaption>
                    <a href="./Segundo_Trimestre/guiaDisenoExamen.html" title="Guía de estilos">Visitar sitio</a>
                </picture>
            </article>

            <article>
                <picture>
                    <img src="./assets/img/IndexPages/pelicula.jpg" alt="Pelicula recomendada">
                    <h3>Peliculón</h3>
                    <figcaption>Pelicula con contenido multimedia.</figcaption>
                    <a href="./Segundo_Trimestre/Pelicula_con_scss.html" title="Pelicula">Visitar sitio</a>
                </picture>
            </article>

            <article>
                <picture>
                    <img src="./assets/img/IndexPages/vintage.jpg" alt="HTML y CSS">
                    <h3>Vintage</h3>
                    <figcaption>HTML desde 0 y estilos con CSS.</figcaption>
                    <a href="./Primer_Trimestre/Ej1_texto.html" title="Vintage">Visitar sitio</a>
                </picture>
            </article>

            
          <!--  <article>
                <picture>
                    <img src="./assets/img/IndexPages/login.jpg" alt="Login y registro">
                    <h3>Sesión</h3>
                    <figcaption>Probando Sesión en PHP.</figcaption>
                    <a href="login.php" title="Sesión">Visitar sitio</a>
                </picture>
            </article> -->
        </section>

        <footer>
            <small>Derechos de autor reservados.</small>
            <address>
                <span>Escrito por <a href="./Segundo_Trimestre/formulario/datos-personales-enviophp.html">Andrei Ionut Hrisca</a></span>
                <span>Visitame en:</span>
                <span>linkedin.com/in/andreiionuthrisca</span>
            </address>
            <span><a href="#inicio" title="Inicio de página">Subir</a></span>
        </footer>
    </main>
    <!-- Scripts -->
    <script src="./js/themes.js"></script>
</body>
</html>