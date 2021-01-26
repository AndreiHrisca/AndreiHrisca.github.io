<?php



// Initialize the session

//session_start();

 

// Check if the user is logged in, if not then redirect him to login page

//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){

//    header("location: login.php");

//    exit;

//}

?> 



<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Ejercicios Diseño de interfaces</title>

    <meta name="description" content="Ejercicios diseño de interfaces 2 DAW.">

    <meta name="keywords" content="HTML, css, scss, php">

    <meta name="author" content="Andrei Ionut Hrisca">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="./assets/img/favicon.ico" sizes="16x16" type="image/ico">

    <link rel="stylesheet" href="./css/indexEstilos.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>



</head>

<body>

    <!--<div id="DatosUsuario">

        <h3>Hola, <b><?php //echo htmlspecialchars($_SESSION["username"]); ?></b></h3>

        <a href="logout.php" class="btn btn-danger">Cierra la sesión</a>

    </div>-->

    
    <!-- Lista de ejercicios -->
    <div class="contenedor">

      <h2>Andrei Website</h2>
      
      <a class="hoverable" href="./registro.php">Probando sesión</a>

      <a class="hoverable" href="./Segundo_Trimestre/formulario/datos-personales-enviophp.html" target="_blank">Contacto</a>

      <a class="hoverable" href="./Segundo_Trimestre/benchmark.php">Benchmark</a>

      <a class="hoverable" href="./Segundo_Trimestre/guiaDisenoExamen.html">Guía de estilos</a>

      <a class="hoverable" href="./Segundo_Trimestre/Pelicula_con_scss.html">Peliculón</a>

      <a class="hoverable" href="./Primer_Trimestre/Ej1_texto.html">Vintage</a>

    </div>





    <!-- Cursor -->

    <div class="cursor">

        <div class="circulo circulo_grande">

          <svg height="30" width="30">

            <circle cx="15" cy="15" r="12" stroke-width="0"></circle>

          </svg>

        </div>

        

        <div class="circulo circulo_pequeno">

          <svg height="10" width="10">

            <circle cx="5" cy="5" r="4" stroke-width="0"></circle>

          </svg>

        </div>

    </div>



    <script src="./js/main.js"></script>



</body>

</html>