<?php



/**

 * PHP Script to benchmark PHP 

 *

 * inspired by / thanks to:

 * - www.php-benchmark-script.com  (Alessandro Torrisi)

 * - www.webdesign-informatik.de

 *

 * @author @hm

 * @license MIT

 */

// -----------------------------------------------------------------------------

// Setup

// -----------------------------------------------------------------------------

//set_time_limit(60); // 1 minuto // 2 minutos para pruebas remotas



$options = array();



// -----------------------------------------------------------------------------

// Main

// -----------------------------------------------------------------------------

// check performance



$benchmarkResult = test_benchmark($options);

$systemResult = datos_Sysinfo($options);



// html output

echo "<!DOCTYPE html>\n<html lang='es'><head>\n";



echo '

    <meta charset="UTF-8">

    <title>Guia De Estilos Examen</title>

    <meta name="description" content="Testeando el servidor.">

    <meta name="keywords" content="PHP, speed test, velodidad servidor">

    <meta name="author" content="Andrei Ionut Hrisca">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../assets/img/favicon.ico" sizes="16x16" type="image/ico">

    <link rel="stylesheet" href="../css/benchmark.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    </head>

    <body>';



echo '

    <nav>

        <a href="guiaDisenoExamen.html">Anterior</a>

        <a href="../index.php">| Principal |</a>

        <a href="felxbox.html">Siguiente</a>

    </nav>

    <h1>Benchmark v1.4</h1>

    <h2><a href="../assets/Wireframe_Benchmark.pdf">Wireframe</a></h2>

    <div class="ContenedorGeneral">

';



echo '<h2>Test Benchmark</h2>';

echo array_to_html($benchmarkResult);

echo '<h2>Datos del sistema</h2>';

echo sysinfo_to_html($systemResult);



echo "\n</div></body></html>";

exit;



// -----------------------------------------------------------------------------

// Benchmark functions

// -----------------------------------------------------------------------------





/**

 * Funcion que saca datos del rendimiento de los tests.

 */

function test_benchmark($settings)

{

    $timeStart = microtime(true);



    $result = array();



    test_math($result);

    test_string($result);

    test_loops($result);

    test_ifelse($result);

    

    $result['TOTAL'] = timer_diff($timeStart);



    return $result;

}





/**

 * Funcion que saca los datos del sistema.

 */

function datos_Sysinfo($settings) {

   

    $timeStart = microtime(true);

    

    $result = array();

    

    $result['Fecha & Hora'] = date("d-M-Y //  H:i:s");

    $result['Version de php'] = PHP_VERSION;

    $result['Sistema operativo Servidor'] = PHP_OS;

    $result['Nombre del servidor'] = $_SERVER['SERVER_NAME'];

    $result['Ip del servidor'] = $_SERVER['SERVER_ADDR'];

    $result['Geo Servidor'] = $_SERVER['HTTP_HOST'];





    return $result;

}





/**

 * Funcion que pasa el array al html.

 */

function array_to_html($array)

{

    $result = '';

    if (is_array($array)) {

    

    

        $result .= '<div id="ContenedorValores">';

        

            foreach ($array as $k => $v) {

                $result .= '<div class="TituloValores"><h3>' . htmlentities($k) . "</h3><li>".  array_to_html($v) ."</li>" .'<meter title="Valores" value="'. array_to_html($v).'" min="0" low="1" high="0.2" max="1.5"  optimum="0.5"></meter></div>';

        }

        $result .= "\n</div>";

   

   

    } else {

        

        

        $result = htmlentities($array);

    }

    return $result;

}





/**

 * Funcion que pasa el array al html.

 */

function sysinfo_to_html($array) {

    $result = '';

    if (is_array($array)) {

    

    

        $result .= '<div id="ContenedorDatos">';

        

            foreach ($array as $k => $v) {

            

            

                $result .= '<div class="TituloDatos"><h3>' . htmlentities($k) . "</h3><li>". sysinfo_to_html($v) ."</li></div>";

            

        }

        $result .= "\n</div>";

   

   

    } else {

        

        

        $result = htmlentities($array);

    }

    return $result;

}







/**

 * Funcion para retornar url.

*/

function dameURL(){

	$url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];

	return $url;

    

}



/**

 * Funcion del test MATH.

 */

function test_math(&$result, $count = 99999){

    $timeStart = microtime(true);



    $mathFunctions = array("abs", "acos", "asin", "atan", "bindec", "floor", "exp", "sin", "tan", "pi", "is_finite", "is_nan", "sqrt");

    for ($i = 0; $i < $count; $i++) {

        foreach ($mathFunctions as $function) {

            call_user_func_array($function, array($i));

        }

    }

    $result['MATH'] = timer_diff($timeStart);

}



/**

 * Funcion del test String.

 */

function test_string(&$result, $count = 99999){

    $timeStart = microtime(true);

    $stringFunctions = array("addslashes", "chunk_split", "metaphone", "strip_tags", "md5", "sha1", "strtoupper", "strtolower", "strrev", "strlen", "soundex", "ord");



    $string = 'el perro de San Roque no tiene rabo';

    for ($i = 0; $i < $count; $i++) {

        foreach ($stringFunctions as $function) {

            call_user_func_array($function, array($string));

        }

    }

    $result['STRING'] = timer_diff($timeStart);

}



/**

 * Funcion del test loops

 */

function test_loops(&$result, $count = 999999){

    $timeStart = microtime(true);

    for ($i = 0; $i < $count; ++$i) {



    }

    $i = 0;

    while ($i < $count) {

        ++$i;

    }

    $result['LOOPS'] = timer_diff($timeStart);

}



/**

 * Funcion del test ifelse.

 */

function test_ifelse(&$result, $count = 999999){

    $timeStart = microtime(true);

    for ($i = 0; $i < $count; $i++) {

        if ($i == -1) {



        } elseif ($i == -2) {



        } else if ($i == -3) {



        }

    }

    $result['IF-ELSE'] = timer_diff($timeStart);

}





function timer_diff($timeStart){

    return number_format(microtime(true) - $timeStart, 3);

}

