<!DOCTYPE html>
<meta charset="utf-8">
<?php
	
	$con = mysqli_connect("localhost", "id15396843_root", "]yRPG-E&Z5dQB|HN", "id15396843_dpw1_u3_a3_anea") or die("Error en la conexión");
?>
<html>
<head>
	<title>CRUD PHP & MYSQL</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
        <ul>
          <li><a href="index.html">Inicio</a></li>
          <li><a href="acerca-de.html">Acerca de</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="cursos.html">Cursos</a></li>
          <li><a href="contacto.html">Contacto</a></li>
          <li><a href="crud.php">CRUD</a></li>
        </ul>
      </nav>
    </header>
    <section class="main">
      <div class="imagen">
        <img src="img/tecplay-desarrollo-de-software.jpg" alt="Tec & Play 2020" title="Tec & Play">
      </div>
      <section class="post">
        <article>
          <h2>Ejemplo de CRUD</h2>  
          <form method="POST" action="crud.php">
          		<label>Nombre: </label>	
          		<input type="text" name="nombre" placeholder="Escribe tu nombre"><br/>
				<label>Password: </label>	
          		<input type="password" name="passw" placeholder="Escribe tu contraseña"><br/>
				<label>Email: </label>	
          		<input type="text" name="email" placeholder="Escribe tu correo"><br/>
          		<br>
          		<input type="submit" name="insert" value="INSERTAR DATOS">
          </form>
          <!--Código para insertar en la base de datos-->
          <?php 
          			if(isset($_POST['insert'])){
          				/*Declaración de variables para el insert*/
          				$usuario = $_POST['nombre'];
          				$pass = $_POST['passw'];
          				$email = $_POST['email'];
          				//Se insertará en DB (Se agrega el código SQL)
          				$insertar = "INSERT INTO users (usuario, password, email) VALUES ('$usuario', '$pass', '$email')";

          				//Ejecutar consulta
          				$ejecutar = mysqli_query($con, $insertar);
          				//Si se ejecuta, los datos se insertan correctamente en la tabla
          				if($ejecutar){
          						echo "<h3>Datos insertados correctamente</h3>";
          				}
          	}
          ?>
          <br>
          <table width=100% border="2" style="background-color: #EFEFEF;">
          		<tr>
          			<th>ID</th>
          			<th>Usuario</th>
          			<th>Password</th>
          			<th>Email</th>
          			<th>Editar</th>
          			<th>Borrar</th>
          		</tr>
          		<!--Consulta para guardar todos los registros-->
          		<?php 
          			$consulta = "SELECT * FROM users";
          			$ejecutar = mysqli_query($con, $consulta);
          			$iteradora = 0;
          			while ($fila = mysqli_fetch_array($ejecutar)) {
          				$id = $fila['id'];
          				$usuario = $fila['usuario'];
          				$password = $fila['password'];
          				$email = $fila['email'];
          				#Variable iteradora de incrementará al final de cada registro
          				$iteradora++;
          			 ?>
	          		<tr align="center">
	          		 	<td><?php echo $id; ?></td>
	          		 	<td><?php echo $usuario; ?></td>
	          		 	<td><?php echo $password; ?></td>
	          		 	<td><?php echo $email; ?></td>
	          		 	<td style="text-decoration: none; background-color: #FE8000; color: white;"><a href="crud.php?editar=<?php echo $id; ?>">Editar</a></td>
	          		 	<td style="text-decoration: none; background-color: #FE8000; color: white;"><a href="crud.php?borrar=<?php echo $id; ?>">Borrar</a></td>
					</tr>
				<?php }	?>

          </table>
          <br>
          <!--Programación para editar-->
          <?php 
          	if(isset($_GET['editar'])){
          		include("editar.php");
          	}
          ?>
          <!--Programación para borrar-->
          <?php 

          		if(isset($_GET['editar'])){
          			$borrar_id = $_GET['borrar'];

          			$borrar = "DELETE FROM users WHERE id=$borrar_id";
          			$ejecutar = mysqli_query($con, $borrar);

          			if($ejecutar){
          				echo "<script>alert('Los datos del usuario han sido borrados')</script>";
						echo "<script>window.open('crud.php','_self')</script>";
          			}
          		}
           ?>
        </article>
      </section>
    </section>
    <aside>
      <div class="widget">
        <h3 class="título">Artículos destacados</h3>
        <ul>
          <li><a href="#">Los beneficios de IONOS.</a></li>
          <li><a href="#">Desarrollo móvil: auge eterno.</a></li>
          <li><a href="#">De periodista a programador.</a></li>
          <li><a href="#">Guía de emprendimiento en IT.</a></li>
          <li><a href="#">La curva de aprendizaje de Angular.</a></li> 
        </ul>
      </div>
      <div class="widget">
        <h3 class="título">Otros artículos</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut finibus massa. Mauris 
          inibus at est sed porttitor. Sed rhoncus, metus eget eleifend ultricies, arcu nisi laoreet 
          elit, vel egestas odio libero quis dui. 
          Nulla porttitor lectus in ipsum vestibulum vestibulum. ulla vitae dolor non dolor suscipit rhoncus pretium at enim. Donec quis semper sem. Vivamus quis ante at lorem consectetur fermentum non nec ante. Vivamus quis ante at lorem consectetur fermentum non nec ante.
        </p>
      </div>
      <div class="widget">
        <h3 class="título">Suscríbete</h3>
        <p>
          Recibe toda la información de tecnología al suscribitr a nuestro newsletter. Recibe información, tutoriales, guías de programación de software y todo lo relevante para tu carrera en las tecnologías de la información. Anímate y visita nuestra sección de <a href="newsletter.html">Suscripción</a>
        </p>
      </div>
    </aside>
    <footer>
      <p>
        Tec & Play 2020 - <span>&#174;</span>
      </p>
    </footer>  
  </div>
</body>
</html>