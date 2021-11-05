<?php
 
if($_POST) {
    $visitor_name = "";
    $visitor_email = "";
    $email_title = "";
    $concerned_department = "";
    $visitor_message = "";
     
    if(isset($_POST['visitor_name'])) {
      $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
    }
     
    if(isset($_POST['email_title'])) {
        $email_title = filter_var($_POST['email_title'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['concerned_department'])) {
        $concerned_department = filter_var($_POST['concerned_department'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['visitor_message'])) {
        $visitor_message = htmlspecialchars($_POST['visitor_message']);
    }
     
    if($concerned_department == "ventas") {
        $recipient = "ventas@tecplay.com";
    }
    else if($concerned_department == "capacitacion") {
        $recipient = "capacitacion@tecplay.com";
    }
    else if($concerned_department == "sugerencias") {
        $recipient = "sugerencias@tecplay.com";
    }
    else {
        $recipient = "contacto@tecplay.com";
    }
     
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
     
    if(mail($recipient, $email_title, $visitor_message, $headers)) {
        echo "<p>Gracias por contactarnos, $visitor_name. Te responderemos lo más pronto posible.</p>";
    } else {
        echo '<p>Lo sentimos hay un problema con el email.</p>';
    }
     
} else {
    echo '<p>Ocurrió un error</p>';
}
 
?>