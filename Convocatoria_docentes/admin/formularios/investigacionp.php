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
    $areas_cientificas=$_POST['areas_cientificas'];
    $participacion_proyectos=$_POST['p_p'];
    $produccion_cientifica=$_POST['produccion_cientifica'];
    $produccion_tecnologica=$_POST['produccion_tecnologica'];

        $usuario_creador=$_SESSION['ci'];
    //$creado=date('Y-m-d H:i:s');
    $sql="INSERT INTO investigaciones (ci, areas_cientificas, participacion_proyectos, produccion_cientifica, produccion_tecnologica) VALUES ('$CI','$areas_cientificas','$participacion_proyectos','$produccion_cientifica','$produccion_tecnologica')";
    $consulta=mysqli_query($conexion,$sql);
    if ($consulta) {
    echo "<br/><h1>Sus datos fueron guardados correctamente</h1><br/>";
    echo "<a href='formacion.php'>Agregar mas! </a> <br/>";
    echo "<a href='../docente.php'>Volver</a>";
      //header("location: ../docente.php");
    }else {
     
    echo "<br/><h1>Datos erroneos!</h1><br/>";
    echo "<a href='investigacion.php'> Volver a intentarlo</a>";
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