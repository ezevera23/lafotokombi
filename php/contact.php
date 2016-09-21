<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
if(isset($_POST['contact_email'])){
// EMAIL AL ADMINISTRADOR
$mailTo = "lafotokombi@gmail.com";
$subject = "Contacto desde la web [La Fotokombi]";
$body = "Nuevo mensaje desde la web
<br><br>
De: ".$_POST['contact_email']."<br>
Nombre: ".$_POST['first-name']."<br>
Apellido: ".$_POST['last-name']."<br>
Asunto: ".$_POST['subject']."<br>
Mensaje: ".$_POST['message']."<br>";
$headers = "To: La Fotokombi <".$mailTo.">\r\n";
$headers .= "From: ".$_POST['first-name']." <".$_POST['contact_email'].">\r\n";
$headers .= "Content-Type: text/html";
//envio destinatario
$mail_success = mail($mailTo, utf8_decode($subject), utf8_decode($body), $headers);

// EMAIL DE AGRADECIMIENTO
$mailTo = $_POST['contact-email'];
$subject = "Gracias por contactarse con la La Fotokombi";
$body = "Hola, ".$_POST['first-name'].":<br><br>".
"¡Gracias por contactarte con La Fotokombi! A la brevedad obtendrás nuestra respuesta.
<br><br>
<b>Consulta realizada:</b>
<br>
De: ".$_POST['contact_email']."<br>
Nombre: ".$_POST['first-name']."<br>
Asunto: ".$_POST['subject']."<br>
Mensaje: ".$_POST['message']."<br><br><br><br>".
"<div style='font-style:italic;'>-El equipo de La Fotokombi</div><br>".
"<img style='width:12%;' src='http://quinigestion.com/images/quini/logo.png'>";
$headers = "To: ".$_POST['first-name']." <".$_POST['contact_email'].">\r\n";
$headers .= "From: La Fotokombi <lafotokombi@gmail.com.com>\r\nMIME-Version: 1.0\n";
$headers .= "Content-Type: text/html";
//envio destinatario
$mail_success = mail($mailTo, utf8_decode($subject), utf8_decode($body), $headers);
}

?>