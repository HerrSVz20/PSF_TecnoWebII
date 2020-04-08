<?php
  session_start();
  $user=$_SESSION['nombres'].' '.$_SESSION['apellidos'];
  $rol=$_SESSION['rol'];

  if (isset($user) && $rol=='admin') {
    //todo el html de los formularios
    echo "<h2>Bienvenido ".$user."</h2>";
    echo "<a href='includes/logout.php'> Logout</a>";
    echo "<br/> <a href='platos.php'>PLATOS</a>";
  }
  else{
    header("location: login.php");
  }
 ?>
