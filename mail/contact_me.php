<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Por favor completa todos los campos";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'consultasweb@segelgadol.com.ar'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Contacto Web:  $name";
$email_body = "Recibiste un nuevo mensaje del formulario de contacto\n\n"."Detalles:\n\nNombre: $name\n\nEmail: $email_address\n\nTeléfono: $phone\n\nMensaje:\n$message";
$headers = "De: noreply@segelgadol.com.ar\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
//$headers .= "Responder a: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>