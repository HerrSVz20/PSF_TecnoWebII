
<!doctype html>
<html lang="en">

  <head>
    <title>Docente</title>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="css/custom.css">
  </head>

<body>


<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #265291;">

<?php
//echo "Su rol de usuario no cuenta con permisos. <br/>";
echo "<a href='includes/logout.php'>Cerrar sesison &nbsp;</a>"
?>

 <?php
  session_start();
  $user=$_SESSION['nombres'].' '.$_SESSION['apellidos'];
  $rol=$_SESSION['rol'];

  if (isset($user) && $rol=='docente') {
    echo "<h2>Bienvenido ".$user."</h2>";
    //echo "<a href='includes/logout.php'> Logout</a>";
    //echo "<br/> <a href='platos.php'>PLATOS</a>";
  }
  else{
    header("location: login.php");
  }
  ?>
</nav>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #265291;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
       <a class="btn btn-outline-primary" href="/docente/index1.php" role="button">Inicio</a>
        <a href="formularios/certificados.php" class="btn" style="background-color:white">Certificados</a>
        <a href="formularios/distinciones.php" class="btn" style="background-color:white">Distinciones</a>
        <a href="formularios/experiencia_p.php" class="btn" style="background-color:white">Experiencia_P</a>
        <a href="formularios/ex_docente.php" class="btn" style="background-color:white">E_Docente</a>
        <a href="formularios/formacion.php" class="btn" style="background-color:white">Formacion</a>
        <a href="formularios/idiomas.php" class="btn" style="background-color:white">Idiomas</a>
        <a href="formularios/investigacion.php" class="btn" style="background-color:white">Investifgaciones</a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      
  <div class="dropdown">
  <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white">
    Reportes
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Todo</a>
      <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Carreras
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Adminisracion de empresas</a>
    <a class="dropdown-item" href="#">Ing. de redes y telecomunicaciones</a>
    <a class="dropdown-item" href="#">x</a>
    <a class="dropdown-item" href="#">y</a>
    <a class="dropdown-item" href="#">z</a>
  
  </div>
</div>
  
  </div>
                                       
</div>

   
</nav>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
