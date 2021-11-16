<?php
//Recordar variable de sesión
session_start();
include('db.php');
//Validar que se crea una variable de sesión al pasar por el Login
#Si no existe la variable usuario mandaremos a location:sistema.php
if(!isset($_SESSION['usuario'])){
  header("location:sistema.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Ver Usuarios de SAMBI</title>
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body class="system">
  <div class="contenedor">
    <section>
      <div class="banner">      
      </div>
    </section>
    <header>
      <nav>
        <ul style="display: inline-flex; width: 90%;">
          <li><a href="indexadmin.php">Inicio</a></li>
          <li><a href="sistema.html">Usuarios</a></li>
          <!-- <li><a href="equipo.html">Reportes</a></li>
          <li><a href="descripcion.html">Descripción</a></li>
          <li><a href="mantenimiento.html">Mantenimiento</a></li>
          <li><a href="contacto.html">Contacto</a></li> -->
          <!--<li><a href="crud.php">CRUD</a></li>-->
        </ul>
        <img src="img/logo-cic.png" alt="Laboratorio de Ciencia de Datos y Tecnologías de Software" title="LCDyTS" style="width: 6%;     vertical-align: middle;">
      </nav>
    </header>
    <section class="main">
      <div class="imagen">
        <img src="img/registro-sambi.jpg" alt="Técnico reparando una bici en el taller de Ecobici" title="Técnico reparando una bici en el taller de Ecobici">
      </div>
      <section class="post">
        <article>
          <h2 style="text-align: center;">Usuarios registrados</h2>  
            <div class="contenedor-tabla">
                <!-- Mostrar usuarios regitrados -->
                <table class="tabla-usuarios">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Contraseña</th>
                            <th>ID</th>
                        </tr>
                    </thead>
                    <tbody class="body-tabla-usuarios">
<?php
    $sql="SELECT * FROM usuarios";
    #Se crea una variable que va a almacenar el resultado en un arreglo con la variable conexion mas sql
    $result=mysqli_query($conexion, $sql);
    #Bucle que mostrará la información proveniente de la base de datos
    while($mostrar = mysqli_fetch_array($result)){
?>

                        <tr>
                            <!-- Impresión de datos -->
                            <td><?php echo $mostrar['nombre'] ?></td>
                            <td><?php echo $mostrar['email'] ?></td>
                            <td><?php echo $mostrar['usuario'] ?></td>
                            <td><?php echo $mostrar['contrasena'] ?></td>
                            <td>
                                <!-- Eliminar -->
                                <form action="eliminar.php" method="post">
                                    <input type="text" value="<?php echo $mostrar['id']?>" name="txtId" readonly>
                                    <td>
                                        <input type="submit" style="width: 90px; font-size: 19px;" 
                                        value="Borrar" name="btn-eliminar">
                                    </td>
                                </form>
                            </td>
                            <td>
                                <!-- Editar o modificar datos -->
                                <a class="btn-editar" href="editarUsuarios.php"  type="text">Editar</a>
                            </td>
                        </tr>
<?php
#Cierre del bucle while.
        }
?>
                    </tbody>
                </table>
            </div>
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