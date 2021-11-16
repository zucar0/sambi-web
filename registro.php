<?php 
#Estas líneas ayudan a saber si existen errores en caso de que el servidor falle
ini_set('display_errors', 1);
error_reporting(E_ALL);
#Incluimos la base de datos
include('db.php');
#Por el método post vamos a recibir las variables de entrada de texto. 
$nombre=$_POST['txtNombre'];
$email=$_POST['txtEmail'];
$usuario=$_POST['txtUsuario'];
$contrasena=$_POST['txtContrasena'];
#Se crea una variable para insertar los datos
$consulta="INSERT INTO `usuarios` (`id`, `nombre`, `email`, `usuario`, `contrasena`, `rol_id`) 
            VALUES (NULL, '$nombre', '$email', '$usuario', '$contrasena', '3');"; 
#La variable resultado va a almacenar todo lo que realizamos. 
$resultado=mysqli_query($conexion, $consulta) or die ("Ocurrió un error en el registro del usuario.");
#En caso de que se ejecute correctamente 
echo'<script type="text/javascript">
        alert("Registro exitoso");
        window.location.href="sistema.php";
        alert("Ya puedes ingresar al sistema");
        </script>';
// echo "Registro exitoso";
#Cerraos la conexión a la base de datos
mysqli_close($conexion);
?>