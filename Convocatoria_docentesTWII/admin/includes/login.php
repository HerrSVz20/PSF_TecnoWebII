<!doctype html>
<html lang="en">

  <head>
    <title>Sesion</title>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="css/custom.css">
  </head>

<body>
  <div class="alert alert-danger" role="alert" align="center">
  
<?php
  include 'conex.php';
  session_start();
  $h='';
  $ci=$_POST['ci'];
  $password=$_POST['password'];
  $sql_pass="SELECT * FROM usuarios WHERE ci='$ci'";
  $consulta_pass=mysqli_query($conexion,$sql_pass);
  if ($consulta_pass) {
    while ($row = mysqli_fetch_array($consulta_pass)) {
    $hash=$row['password'];
    }
    if(password_verify($password, $hash)){
       $sql2="SELECT * FROM usuarios WHERE ci='$ci'";
    $consulta2=mysqli_query($conexion,$sql2);
    while ($row = mysqli_fetch_array($consulta2)) {
      $_SESSION['ci']=$row['ci'];
      $_SESSION['nombres']=$row['nombres'];
      $_SESSION['apellidos']=$row['apellidos'];
      $_SESSION['rol']=$row['rol'];
    }
    if ($_SESSION['rol']=='admin') {
      header("location: ../admin.php");
    }else {
      header("location: ../docente.php");
    }
    }else {
    echo "<div class='alert alert-danger' role='alert'>";
    echo "<br/>Datos erroneos<br/>";
    echo "</div>";
    echo "<a class='btn btn-info' href='../login.php'> Volver al login</a>";
    }
    
  }else {
    echo "<br/>Datos erroneos<br/>";
    echo "<a href='../login.php'> Volver al login</a>";
    }
 ?>
</div>
</body>
</html>