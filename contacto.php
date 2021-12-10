<?php
if(isset($_POST['email'])) {
$email_to = "antonio.enralv@gmail.com";
$email_subject = "Propuesta resumida del correo electrónico";
//Se muestra un error si existe un problema en los campos del formulario. 
function died($error) {
    echo "Lo sentimos no pudimos procesar tu solicitud. ";
    echo "A continuación te mostramos un listado con los posibles errores: <br /><br />";
    echo $error."<br /><br />";
    echo "Por favor intenta nuevamente.<br /><br />";
    die();
}
// Validación de los datos existentes 
if(!isset($_POST['first_name']) ||
       !isset($_POST['last_name']) ||
       !isset($_POST['email']) ||
       !isset($_POST['telephone']) ||
       !isset($_POST['comments'])) {
    died('Lo sentimos; se identificó un error con las siguientes entradas');   
}
$first_name = $_POST['first_name']; // requerido
$last_name = $_POST['last_name']; // requerido
$email_from = $_POST['email']; // requerido
   $telephone = $_POST['telephone']; // no requerido 
$comments = $_POST['comments']; // requerido
$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 if(!preg_match($email_exp,$email_from)) {
$error_message .= 'Ingresaste un email inválido<br />';
 }
$string_exp = "/^[A-Za-z .'-]+$/";
 if(!preg_match($string_exp,$first_name)) {
$error_message .= 'El nombre no es válido.<br />';
 }
 if(!preg_match($string_exp,$last_name)) {
$error_message .= 'El apellido no es válido.<br />';
 }
 if(strlen($comments) < 2) {
$error_message .= 'El comentario no es válido.<br />';
 }
 if(strlen($error_message) > 0) {
   died($error_message);
 }
$email_message = "Esta es la información ingresada por el usuario:\n\n";
function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href");
  return str_replace($bad,"",$string);
}
$email_message .= "Nombre: ".clean_string($first_name)."\n";
$email_message .= "Apellido: ".clean_string($last_name)."\n";
$email_message .= "Email: ".clean_string($email_from)."\n";
$email_message .= "Teléfono: ".clean_string($telephone)."\n";
$email_message .= "Comentario: ".clean_string($comments)."\n";
// Se crean las cabeceras del correo
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>
<!-- Mensaje HTML -->
echo'<script type="text/javascript">
        alert("Gracias por contactarnos. Te contactaremos lo más pronto posible.");
        window.location.href="contacto.html";
        </script>';
<?php
}
?>