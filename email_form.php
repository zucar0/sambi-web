<?php
if(isset($_POST['email'])) {
$email_to = "antonio.enralv@gmail.com";
$email_subject = "Summarized propose of the email";
//Errors to show if there is a problem in form fields.
function died($error) {
    echo "We are sorry that we can procceed your request due to error(s)";
    echo "Below is the error(s) list <br /><br />";
    echo $error."<br /><br />";
    echo "Please go back and fix these errors.<br /><br />";
    die();
}
// validation expected data exists
if(!isset($_POST['first_name']) ||
       !isset($_POST['last_name']) ||
       !isset($_POST['email']) ||
       !isset($_POST['telephone']) ||
       !isset($_POST['comments'])) {
    died('We are sorry to proceed your request due to error within form entries');   
}
$first_name = $_POST['first_name']; // required
$last_name = $_POST['last_name']; // required
$email_from = $_POST['email']; // required
   $telephone = $_POST['telephone']; // not required
$comments = $_POST['comments']; // required
$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 if(!preg_match($email_exp,$email_from)) {
$error_message .= 'You entered an invalid email<br />';
 }
$string_exp = "/^[A-Za-z .'-]+$/";
 if(!preg_match($string_exp,$first_name)) {
$error_message .= 'Invalid first name<br />';
 }
 if(!preg_match($string_exp,$last_name)) {
$error_message .= 'Invalid Last name<br />';
 }
 if(strlen($comments) < 2) {
$error_message .= 'Invalid comments<br />';
 }
 if(strlen($error_message) > 0) {
   died($error_message);
 }
$email_message = "Form details below.\n\n";
function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href");
  return str_replace($bad,"",$string);
}
$email_message .= "First Name: ".clean_string($first_name)."\n";
$email_message .= "Last Name: ".clean_string($last_name)."\n";
$email_message .= "Email: ".clean_string($email_from)."\n";
$email_message .= "Telephone: ".clean_string($telephone)."\n";
$email_message .= "Comments: ".clean_string($comments)."\n";
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>
<!-- include your own success html here -->
Thank you for contacting us. We will be in touch with you very soon.
<?php
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <!--Esta etiqueta VIEWPORT nos indica que en cualquier tipo de tamaño vamos a establecer ciertas medidas-->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <!--
  <meta name="viewport" 
  content="width=device-width, Cualquier tamaño será el ancho de nuestra página de nuestro dispositivo.
        user-scalable=no,   El usuario no puede hacer más grande nuestra página web
        initial-scale=1.0,  Con estos tres parámetros se limita a que la pantalla no se pueda hacer ´más grande o más pequeña con los dedos.
        maximum-scale=1.0,  
        minimum-scale=1.0" 
  >-->
  <title>Contáctanos</title>
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
  <div class="contenedor">
    <section>
      <div class="banner">
        
      </div>
    </section>
    <header>
      <nav>
        <ul style="display: inline-flex; width: 90%;">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="sistema.php">Sistema</a></li>
          <li><a href="equipo.html">Equipo</a></li>
          <li><a href="descripcion.html">Descripción</a></li>
          <li><a href="mantenimiento.html">Mantenimiento</a></li>
          <li><a href="contacto.html">Contacto</a></li>
          <!--<li><a href="crud.php">CRUD</a></li>-->
        </ul>
        <img src="img/logo-cic.png" alt="Laboratorio de Ciencia de Datos y Tecnologías de Software" title="LCDyTS" style="width: 6%;     vertical-align: middle;">
      </nav>
    </header>
    <section class="main">
      <div class="imagen">
        <img src="img/sambi-contacto.jpg" alt="SAMBI-CIC-IPN-2021" title="Contáctanos">
      </div>
      <section class="post">
        <article>
          <h2>Contáctanos</h2>  
            <form  name="contactform"  method="post" action="email_form.php">
              <div class="elem-group">
                <label for="first_name">Nombre</label>
                <input type="text" name="first_name" placeholder="Escribe tu nombre"  maxlength="50" size="30" pattern=[A-Z\sa-z]{3,20} required>
              </div>
              <div class="elem-group">
                <label for="last_name">Apellido</label>
                <input type="text" name="last_name" maxlength="50" size="30" placeholder="Escribe tu apellido" pattern=[A-Z\sa-z]{3,20} required>
              </div>
              <div class="elem-group"> 
                <label for="email">Tu E-mail</label>
                <input type="text"  name="email" maxlength="80" size="30" placeholder="ejemplo@email.com" required>
              </div>
              <div class="elem-group">
                <label for="telephone">Teléfono</label>
                <input type="text" name="telephone" maxlength="30" size="30" required placeholder="Escribe un teléfono de contacto" pattern=[A-Za-z0-9\s]{8,60}>
              </div>
              <div class="elem-group">
                <label for="comments">Escribe tu comentario:</label>
                <textarea name="comments" maxlength="1000" cols="25" rows="6" placeholder="Coméntanos lo que quieras." required></textarea>
              </div>
              <button type="submit" value="Submit">Enviar mensaje</button>
              <button type="reset" value="Borrar">Borrar</button>
            </form>          
        </article>
      </section>
    </section>
    <aside>
      <div class="widget">
        <h3 class="título">Nuestro Laboratorio</h3>
        <p>
          Se desarrollan herramientas, técnicas, algoritmos y metodologías para la 
          creación y gestión de sistemas de información; todo con esquemas que integran el manejo de 
          bases de datos, interfaces gráficas, minería de datos e ingeniería de software.
        </p>
      </div>
      <div class="widget">
        <h3 class="título">¿Qué es Minería de Datos?</h3>
        <iframe width="250" height="171" src="https://www.youtube.com/embed/-umybr8nKag" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="widget">
        <h3 class="título">Sistema Ecobici en Foro Tv</h3>
        <iframe src="https://player.vimeo.com/video/209496672?h=ddecb26856" width="250" height="171" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="widget">
        <h3 class="título">LCDyTS</h3>
        <iframe width="250" height="171" src="https://www.youtube.com/embed/91I0RZq1hnM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       </div>
       <div class="widget">
        <h3 class="título">Maestría en Computación</h3>
        <iframe width="250" height="171" src="https://www.youtube.com/embed/3W24f8SUym0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="widget">
        <h3 class="título">Difusión Posgrados</h3>
        <iframe width="250" height="171" src="https://www.youtube.com/embed/mzOwYmExmAo?list=PL5908c8tQMDT29-BVKbZkN4BOkE5ndSET" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </aside>
    <footer>
      <p>
        LCDyTS - <span>&#174;</span>
      </p>
    </footer>
    
  </div>
  <script src="js/form-validation.js"></script>
</body>
</html> 