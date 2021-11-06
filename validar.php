<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
session_start(); //Método para iniciar sesión
$_SESSION['usuario']=$usuario;

include('db.php'); //Variable consulta para llamar a la DB

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contrasena='$contrasena'";
$resultado=mysqli_query($conexion,$consulta); //(método para almacenar el resultado)

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.php");
}else{
    ?>
    <?php
    include("sistema.php");
    ?>
    <h2 class="error">ERROR: Datos inválidos</h2>
    
    <?php
}
mysqli_free_results($resultado);
mysqli_close($conexion);
?>