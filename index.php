<!-- Universidad UNIACC --> 

<!-- Ingenieria en informatica Multimedia --> 
<!-- Programacion WEB --> 
<!-- Alumno:Hans Jara --> 
<!-- Profesor: Rodrigo Jaque --> 

<!DOCTYPE html>
<!-- Idioma --> 
<html lang="es">

<!-- Cabecera --> 
<head>
    <title>Examen HansJara</title>
    <link rel= "stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity= "sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin= "anonymous" > <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity= "sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin= "anonymous" ></script> 
    <meta charset="UTF-8">
</head>

<!-- Cuerpo de la pagina--> 
 <body>

    <div class="container">
      <div class="header clearfix">
      <br>
        <h3 class="text-muted">Formulario de consulta proveedores</h3>
      </div>

      <div class="row">

        <h1>Listado de proveedores</h1>
        <p class="lead">Este sitio, a sido diseñado para realizar busqueda de proveedores de diferentes areas de la construccion, Ingrese los datos requeridos

        <form method="get" action="proveedores.php">
        <label>Nombre: </label><input type="text" name="nombre" class="form-control" required/><br>
        <label>Email: </label><input type="email" class="form-control" name="email" required/>  <br>
        <label>Area: </label><select name="area" required class="form-control">
          <option value="">Seleccione...</option>
          <option value="Electricidad">Electricidad</option>
          <option value="Construccion">Construccion</option>
          <option value="Estructuras">Estructuras</option>
          <option value="Gasfiteria">Gasfiteria</option>
        </select>
        <br>
        <br>

<!-- Boton -->         
        <input type="submit" class="btn btn-primary" value="Buscar" role="button"><br><br>
        </form>
      </div>

<!-- Creditos --> 
      <footer id="container" style="background-color:#0000FF" align="center">
          
                <br>Desarrollado por Hans Jara<br>Estudiante de Ingenieria en Informatica Multimedia<br>Programacion WEB<br><br>UNIACC<br>
</footer>
    </div>
  </body>
</html>