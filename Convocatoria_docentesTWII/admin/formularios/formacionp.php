<!doctype html>
<html lang="en">
  <head>
    <title>Formacion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
<body>
  <div class="alert alert-primary" role="alert" align="center">
    <?php
    include '../includes/conex.php';
    session_start();
    $CI=$_SESSION['ci'];
    $colegio=$_POST['colegio'];
    $nombret=$_POST['nombre_titulo'];
    $institucion=$_POST['institucion'];
    $fecha_e=$_POST['fecha'];
    $level=$_POST['nivel_instruccion'];

    $usuario_creador=$_SESSION['ci'];
    //$creado=date('Y-m-d H:i:s');
    $sql="INSERT INTO formacion (ci, colegio, nombre_titulo, fecha, institucion, nivel) VALUES ('$CI', '$colegio','$nombret','$institucion','$fecha_e','$level')";
    $consulta=mysqli_query($conexion,$sql);
    if ($consulta) {
    echo "<br/><h1>Sus datos fueron guardados correctamente</h1><br/>";
    echo "<a href='formacion.php'>Agregar otro titulo! </a> <br/>";
    echo "<a href='idiomas.php'>Siguiente</a>";
      //header("location: ../docente.php");
    }else {
     
    echo "<br/><h1>Datos erroneos!</h1><br/>";
    echo "<a href='formacion.php'> Volver a intentarlo</a>";
    }
     ?>
     <br/>
    </div>
  </body>

  	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>