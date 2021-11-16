<?php

 include('conexion.php');

$usu 	= $_POST["usuario"];
$pass 	= $_POST["contrasena"];
$rol 	= $_POST["rol_id"];



$queryusuario = mysqli_query($conn,"SELECT * FROM usuarios WHERE usuario ='$usu' and contrasena = '$pass' and rol_id = '$rol'");
$nr 		= mysqli_num_rows($queryusuario);  
	
if ($nr == 1 )  
	{ 
		if($rol=="usuario")
		{	
			header("Location: user.php");
		}
		else if ($rol=="admin")
		{
			header("Location: admin.php");
		}
        else if ($rol=="editor"){
            header("Location: editor.php");
        }
	}
else
	{
	echo "<script> alert('Usuario, contraseña o rol incorrecto.');window.location= 'sistema.php' </script>";
	}

?>