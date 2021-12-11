<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Sistema Web de Análisis al Mantenimiento de Bicicletas (SAMBI)</title>
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
        </ul>
        <img src="img/logo-cic.png" alt="Logo del Laboratorio de Ciencia de Datos y Tecnologías de Software" title="LCDyTS" style="width: 6%;     vertical-align: middle;">
      </nav>
    </header>
    <section class="main">
      <div class="imagen">
        <img src="img/ecobici-mantenimiento-correctivo-sambi.jpg" alt="Acceso general de usuarios" title="Acceso general de usuarios">
      </div>
      <section class="post">
        <article>
          <h2>Sistema de Análisis al Mantenimiento de Bicicletas</h2>  
          <p>
            Este sistema es un trabajo que busca implementar un análisis profundo sobre el mantenimiento correctivo
            que reciben las bicicletas a través del análisis y visualización histórica de los datos abiertos 
            publicados por el Sistema de bicicletas públicas de la Ciudad de México, ECOBICI, utilizando distintas
            variables publicadas a través su sitio web, por lo que el proyecto contempla aprovechar los datos
            que ponen a disposición.
          </p>
          <p>
            Para llevar a cabo este trabajo hemos recolectado información de diversas fuentes, además de trabajar
            de forma estadística obteniendo datos relevantes como la vida útil de las bicicletas, el número de 
            viajes que realizan, el promedio de la vida útil de las unidades. Por medio de diversas fuentes
            hemos trabajado para recopilar la información vital para las visualizaciones que nos ayudarán 
            a comprender el mantenimiento. 
          </p>
          <p>
              Conocimos a través de entrevistas y lecturas información sobre los mantenimientos su segmentación 
              y la manera en que se procede para que una bicicleta entre al taller. Este sistema
              forma parte del esfuerzo para reducir los problemas de movilidad en CDMX.
          </p>
          <p>El sistema nos entrega una serie de visualizaciones para la comprensión del mantenimiento correctivo
              que reciben las unidades:
          </p>
          <ul>
            <li>Vida útil: Muestra los años de servicio de las unidades, a partir del primer viaje registrado 
              hasta el último</li>
              <li>Viajes: Nos muestra la visualización de los viajes totales y más información como el promedio
                de viajes que tienen las bicicletas.
              </li>
            <li>
              Kilometraje: Pretende mostrar la visualización de los kilómetros recorridos por cada bicicleta así 
              y de esa forma conocer el parémtro de KM que utiliza ECOBICI para considerar sus mantenimientos. 
            </li>
          </ul>
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