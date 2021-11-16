<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
session_start(); //Método para iniciar sesión
$_SESSION['usuario']=$usuario;
// $_SESSION['rol_id']=$rol_id;
include('db.php'); //Variable consulta para llamar a la DB

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contrasena='$contrasena'";
$resultado=mysqli_query($conexion,$consulta); //(método para almacenar el resultado)
$consulta_rol = "SELECT rol_id FROM usuarios where usuario='$usuario' and contrasena='$contrasena'";
$filas=mysqli_num_rows($resultado);
$resultadoRol=mysqli_query($conexion,$consulta_rol);
$row = mysqli_fetch_array($resultadoRol); //Variable que contiene el rol
/** if($row){ ?> <?php include("sistema.php"); ?>
 * //     <h2 class="error"> <?php echo $row['rol_id'] ?> </h2> <?php } */

if($row['rol_id'] == 3){
    header("location:home.php");
}
else if ($row['rol_id'] == 1){
    header("location:admin.php");
}
else if ($row['rol_id'] == 2){
    header("location:editor.php");
}
else if ($row['rol_id'] == 4){
    header("location:root.php");
}
else{
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

<!-- ROLES
1. admin
2. editor
3. usuario
4. root
-->