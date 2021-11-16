<?php

include('db.php');
$id=$_POST['txtId'];
#Se realiza la consulta para enviar el query de eliminación de usuario
mysqli_query($conexion, "DELETE FROM usuarios where ID='$id'") or die("Error al eliminar");
mysqli_close($conexion);
#A donde nos va a mandar después de ejecutar el query:
header("location:mostrarUsuarios.php");
?>