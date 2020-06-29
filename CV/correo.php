<?php
if(isset($_POST['email'])) {

// Aquí rellena tus datos 
$email_to = "dipointg@gmail.com";
$email_subject = "Correo enviado desde la web de prueba de formulario";
$email_from = $_POST['email'];


// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['first_name']) ||

!isset($_POST['email']) ||
!isset($_POST['subject']) ||
!isset($_POST['message'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['first_name'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Teléfono: " . $_POST['subject'] . "\n";
$email_message .= "Comentarios: " . $_POST['message'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "El formulario se ha enviado de forma correcta";
}
?>