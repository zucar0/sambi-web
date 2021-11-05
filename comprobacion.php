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
  <title>Newsletter</title>
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
        </ul>
      </nav>
    </header>
    <section class="main">
      <div class="imagen">
        <img src="img/tecplay-boletin.jpg" alt="Tec & Play 2020" title="Tec & Play">
      </div>
      <div class="post">
        <h1>Comprueba tus datos</h1>
        <br>
        <p>Estos son los datos que nos has enviado:</p>
        <?php  


        if(isset($_POST['submit'])){//Para ejecutar PHP script en Submit
        if(!empty($_POST['check_list'])){
        // Bucle para almacenar y mostrar los valores de la casilla de verificación comprobación individual.
        foreach($_POST['check_list'] as $selected){
        echo $selected."</br>";
        }
        echo "Nombre: "; echo $_POST['nombre']; echo "<br/>";
        echo "Apellidos: "; echo $_POST['apellidos']; echo "<br/>";
        echo "E-mail: "; echo $_POST['email']; echo "<br/>";
        echo "Twitter: "; echo $_POST['twitter']; echo "<br/>";
        echo "Facebook: "; echo $_POST['facebook']; echo "<br/>";
        echo "Día de la semana: "; echo $_POST['dia']; echo "<br/>";
        }
        }
        
        ?>
        <p>Comprueba tus datos antes de enviarlos, si no están bien vuelve a escribirlos.</p>
        <p>Los datos son correctos: <a href="enviados.html">Enviar</a>
        <p>Los datos no son correctos: <a href="newsletter.html">Volver a escribirlos</a>
      </div>
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
          elit, vel egestas odio libero quis dui. Nulla porttitor lectus in ipsum vestibulum vestibulum. 
          ulla vitae dolor non dolor suscipit rhoncus pretium at enim. Donec quis semper sem. Vivamus 
          quis ante at lorem consectetur fermentum non nec ante. Phasellus aliquam non quam posuere 
          fringilla. Aenean a imperdiet nisi. Phasellus elit nunc, lacinia eget scelerisque ac, gravida 
          eu libero. Nulla maximus est justo, et luctus sapien egestas sed. Curabitur vel malesuada 
          sapien. Aliquam nisi lorem, consequat ac tincidunt in, mollis ac enim. Aliquam tortor diam, 
          vulputate id arcu dignissim, pulvinar faucibus leo.
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