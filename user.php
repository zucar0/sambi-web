<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>USUARIO - Sistema Web de Análisis al Mantenimiento de Bicicletas (SAMBI)</title>
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
        <li><a href="home.php">Inicio</a></li>
          <li><a href="#">Vida Útil</a></li>
          <li><a href="#">Viajes</a></li>
          <li><a href="#">Kilometraje</a></li>
          <li><a href="#">Por unidad</a></li>
          <li><a href="#">Historias</a></li>
        </ul>
        <img src="img/logo-cic.png" alt="Laboratorio de Ciencia de Datos y Tecnologías de Software" title="LCDyTS" style="width: 6%;     vertical-align: middle;">
      </nav>
    </header>
    <section class="main">
      <div class="imagen">
        <img src="img/ecobici-mantenimiento-correctivo.jpg" alt="Técnico reparando una bici en el taller de Ecobici" title="Técnico reparando una bici en el taller de Ecobici">
      </div>
      <section class="post">
        <article>
          <h2 style="display:inline-flex;">Bienvenido USUARIO, <?php echo $usuario; ?>.</h2>              
        </article>
      </section>
    </section>
    <aside>
      <div class="widget">
        <h3 class="título">Manual de SAMBI</h3>
        <ul>
          <li><a href="#">Estructura</a></li>
          <li><a href="#">Días de servicio</a></li>
          <li><a href="#">Vida útil</a></li>
          <li><a href="#">Viajes</a></li>
          <li><a href="#">Kilometraje</a></li>
          <li><a href="#">Pronósticos</a></li>
          <li><a href="#">Descargar</a></li> 
        </ul>
      </div>
      <div class="widget">
        <h3 class="título">Movilidad en México</h3>
        <p>
          En México tenemos un serie problema con la movilidad, pero ¿qué es, con qué se cóme, cómo
          lo identificamos? Son preguntas que como sociedad tenemos que responder y más pensando en  
          el futuro tan desalentador que tenemos con noticias como el cambio climático, el tráfico, 
          la contaminación. En este contexto, la bicicleta se ha convertido en la solución por 
          excelencia... <a href="/movilidad.html">Continuar leyendo</a>
        </p>
      </div>
      <div class="widget">
        <h3 class="título">Objetivo</h3>
        <p>
        Analizar los datos del Sistema de Análisis de Movilidad Individual para realizar un pronóstico 
        sobre el servicio que reciben las bicicletas de <a href="https://www.ecobici.cdmx.gob.mx/" target="_blank">
        ECOBICI</a>, evaluando el mantenimiento periódico, el periodo de utilidad de las bicis y la
        regularidad con la que desaparecen y realizan viajes posterior a su mantenimiento. 
        </p>
      </div>
    </aside>
    <footer>
      <p>
        LCDyTS - <span>&#174;</span>
      </p>
    </footer>  
  </div>
</body>
</html> 