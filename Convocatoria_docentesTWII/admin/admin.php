<html lang="en">

  <head>
    <title>Admin</title>
  
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

  if (isset($user) && $rol=='admin') {
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
        <a href="pdf.php" class="btn" style="background-color:white"> Subir convocatoria</a>
        <a href="#" class="btn" style="background-color:white">Añadir docente</a>

        
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
  &nbsp;<a href="includes/imprimir.php" class="btn" style="background-color:white"> Imprimir</a>
  &nbsp;<a href="admin.php" class="btn" style="background-color:white">Actualizar</a>                                     
</div>


    </ul>
      <form class="form-inline my-2 my-lg-0" action="admin.php" role="search">
      <input class="form-control mr-sm-2" type="search" name="busqueda" placeholder="Buscar" aria-label="Search">
      <button type="submit" class="btn btn-primary">Buscar</button>
    </form>



  </div>
  
</nav>



 <table class="table table-striped table-dark">
  <thead align="center">
    <tr bgcolor="#">
      <th scope="col">ID</th>
      <th scope="col">CI</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Profesion</th>
      <th scope="col">Celular</th>
      <th scope="col"></th>
      <th scope="col">Acciones</th>
      <th scope="col"></th>
      
    </tr>
  </thead>


      <?php
    include 'includes/conex.php';
 //busqueda
      if (isset($_GET['busqueda'])) { 
      $sql="SELECT * FROM usuarios WHERE estudios_universitarios  LIKE '%".$_GET['busqueda']."%'";
      //$sql="SELECT * FROM usuarios WHERE apellidos  LIKE '%".$_GET['busqueda']."%'";
      //$sql="SELECT * FROM usuarios WHERE nombres  LIKE '%".$_GET['busqueda']."%'";
      }
    else{
         $sql="SELECT * FROM usuarios ";

     }

  //

      $consulta = mysqli_query($conexion,$sql);
      
      mysqli_close($conexion);

      $result = mysqli_num_rows($consulta);
      if($result > 0){

        while ($row = mysqli_fetch_array($consulta)) {
           
      ?>
         <tr align="center">
          <td><?php echo $row['id']; ?></td>
           <td><?php echo $row['ci']; ?></td>
           <td><?php echo $row['nombres']; ?></td>
           <td><?php echo $row['apellidos']; ?></td>
           <td><?php echo $row['estudios_universitarios']; ?></td>
           <td><?php echo $row['celular']; ?></td>
           <td><a class="btn btn-danger" href="eliminar.php?num=<?php echo $row['id']?>">Eliminar</a></td>
           <td><a class="btn btn-warning" href="editar.php?num=<?php echo $row['id']?>">Editar</a></td>
           <td><a class="btn btn-primary" href="ver.php?num=<?php echo $row['id']?>">Ver</a></td>
        </tr>
        <?php 
         }
        }
 ?>

</table>

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>



 