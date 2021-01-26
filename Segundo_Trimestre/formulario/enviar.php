<?php

    //Codificación UTF-8 para todo el fichero.

    header('Content-Type: text/html; charset=UTF-8');

    

    // Recupero detalles del envío POST

    

    $nombre = $_POST['nombre'];

    $nrtelefono = $_POST['nrtelefono'];

    $mail = $_POST['mail'];

    $comentario = $_POST['comment'];

    // crea y envía el mensaje de correo electrónico



    $para = 'andr3y.dee30@gmail.com';

    $asunto = 'Formulario de contacto';

    $mensaje = "<br>Mensaje de contacto desde el host.<br/><br/>";

    $mensaje .= "Nombre: " . $nombre . "<br /> ";

    $mensaje .= "Telefono: " . $nrtelefono . "<br />";

    $mensaje .= "Mail: " . $mail . "<br />";

    $mensaje .= "Comentario: " . $comentario ;

    //Así podríamos construir una estructura completa de página HTML si

    //queremos que llegue con más forma

    

    $cabeceras = "MIME-Version: 1.0". "\r\n";

    $cabeceras .= "Content-type: text/html; charset=UTF-8"."\r\n";

    $cabeceras .= "From:MailFromHostContact@andreihost.000webhostapp.com";



    if (mail($para, $asunto, $mensaje, $cabeceras )){

        //echo '<span style="font-size:1.3em;color:white;background-color:green;padding:5px;">Se acaba de enviar el correo, revisa tu bandeja de entrada o la de SPAM antes de ponerte nervioso...</span>';

		header('Location: ok-email.php');

    } else {

        //echo '<span style="font-size:1.3em;color:white;background-color:red;padding:5px;">Error al enviar mensaje</span>';

        header('Location: error-email.php');

    }

?>    

    





