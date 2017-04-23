<!-- Universidad UNIACC --> 

<!-- Ingenieria en informatica Multimedia --> 
<!-- Programacion WEB --> 
<!-- Alumno:Hans Jara --> 
<!-- Profesor: Rodrigo Jaque --> 

<!DOCTYPE html>
<html lang="es">
<head>
<br><br>
    <title>Examen HansJara</title>
    <link rel= "stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity= "sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin= "anonymous" > <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity= "sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin= "anonymous" ></script> 
    <meta charset="UTF-8">
</head>
 <body>

    <div class="container">
      <div class="header clearfix">
      <h3 class="text-muted">Formulario de consulta proveedores</h3>
      </div>

      <div class="row">

        <h1>Listado de proveedores</h1>
        <p class="lead"></div>Estimado <strong><?php echo $_GET['nombre'] ?></strong><br>Su email almacenado en nuestros registros es: <strong><?php
        echo $_GET['email'] ?></strong></p>

        <br><br>

        <p>Area seleccionada <?php echo $_GET['area'] ?>
        </p>
        <p>El mejor proveedor externo sugerido lo encontrara <a href="http://www.sodimac.cl/sodimac-cl/">AQUI</a></p>

      </div>

     <footer id="container" style="background-color:#0000FF" align="center">
          
                <br>Desarrollado por Hans Jara<br>Estudiante de Ingenieria en Informatica Multimedia<br>Programacion WEB<br><br>UNIACC<br>
</footer>
    </div>
  </body>
</html>